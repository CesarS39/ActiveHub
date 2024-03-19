<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\http\Requests\TeacherRequest;
use App\http\Requests\TeacherUpdateRequest;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');
        $studentsFilter = User::role('Student')
        ->where('name', 'LIKE', '%'.$filterValue.'%');

        $students = $studentsFilter->simplePaginate(10);
        return view('students.index' , [
            'students' => $students,
            'filterValue' => $filterValue,
        
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(TeacherRequest $request)
    {
        $student = $request->all();
        $user = User::create($student);
        $user->roles()->sync(3);

        return redirect()->action([StudentController::class, 'index'])
        ->with('success-create', 'Student created successfully');
    }

    public function show(User $student){
        $student = User::find($student->id);
        return view('students.show', compact('student'));
    }

    public function edit(User $student){
        return view('students.edit', compact('student'));
    }

    public function update(TeacherUpdateRequest $request, User $student){
        $student = User::find($student->id);
        if(!$student){
            abort(404, 'Student not found');
        }else{
            $student->update([
                'name' => $request->name,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return redirect()->action([StudentController::class, 'index'])
            ->with('success-update', 'Student updated successfully');
        }
    }

    public function destroy(User $student)
    {
        $student->delete();
        return redirect()->action([StudentController::class, 'index'])
        ->with('success-delete', 'Student deleted successfully');
    }
}
