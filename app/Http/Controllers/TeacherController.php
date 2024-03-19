<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\http\Requests\TeacherRequest;
use App\http\Requests\TeacherUpdateRequest;
use App\Models\Sport;


class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');
        $teachersFilter = User::role('Teacher')
        ->where('name', 'LIKE', '%'.$filterValue.'%');

        $teachers = $teachersFilter->simplePaginate(10);
        return view('teachers.index' , [
            'teachers' => $teachers,
            'filterValue' => $filterValue,
        
        ]);
    }

    public function create()
    {
        $sports= Sport::all();
        return view('teachers.create' , compact('sports'));
    }

    public function store(TeacherRequest $request)
    {
        $teacher = $request->all();
        $user = User::create($teacher);
        $user->roles()->sync(2);

        $user->Sport()->attach($request->input('sports'));

        return redirect()->action([TeacherController::class, 'index'])
        ->with('success-create', 'Teacher created successfully');
    }

    public function show(User $teacher){
        $teacher = User::find($teacher->id);

        $sports = $teacher->Sport()->select('name')->get();
        return view('teachers.show', compact('teacher', 'sports'));
    }

    public function edit(User $teacher){
        $sports= Sport::all();
        $ids_sports = $teacher->Sport()->pluck('sports.id');
        return view('teachers.edit', compact('teacher', 'sports', 'ids_sports'));
    }

    public function update(TeacherUpdateRequest $request, User $teacher){
        $teacher = User::find($teacher->id);
        if(!$teacher){
            abort(404, 'Teacher not found');
        }else{
            $teacher->update([
                'name' => $request->name,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            $teacher->Sport()->sync($request->input('sports'));
            return redirect()->action([TeacherController::class, 'index'])
            ->with('success-update', 'Teacher updated successfully');
        }
    }

    public function destroy(User $teacher)
    {
        $teacher->delete();
        return redirect()->action([TeacherController::class, 'index'])
        ->with('success-delete', 'Teacher deleted successfully');
    }
}
