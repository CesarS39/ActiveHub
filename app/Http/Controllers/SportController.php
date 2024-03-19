<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SportRequest;


class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');
        $sportsFilter = Sport::where('name', 'LIKE', '%'.$filterValue.'%');

        $sports = $sportsFilter->simplePaginate(10);
        return view('sports.index' , [
            'sports' => $sports,
            'filterValue' => $filterValue,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SportRequest $request)
    {
        $sport = $request->all();
        Sport::create($sport);
        return redirect()->action([SportController::class, 'index'])
        ->with('success-create', 'Sport created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport)
    {
        return view('sports.edit', compact('sport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SportRequest $request, Sport $sport)
    {
        $sport->update([
            'name' => $request->name,
        ]);
        return redirect()->action([SportController::class, 'index'])
        ->with('success-update', 'Sport updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport)
    {
        $sport->delete();
        return redirect()->action([SportController::class, 'index'])
        ->with('success-delete', 'Sport deleted successfully');
    }
}
