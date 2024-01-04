<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHostelRequest;
use App\Http\Requests\UpdateHostelRequest;

use App\Models\Hostel;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostels = Hostel::latest()->get();

        // dd($students);

        return view('hostels.index', [
            'hostels' => $hostels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hostels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHostelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHostelRequest $request)
    {
        $validated = $request->validated();

        Hostel::create($validated);

        return redirect()->route('hostels.index')->with('message', 'Added successfully.')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hostel  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Hostel $hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hostel  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostel $hostel)
    {

        return view('hostels.edit', [
            'hostel' => $hostel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHostelRequest  $request
     * @param  \App\Models\Hostel  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHostelRequest $request, Hostel $hostel)
    {
        $hostel->update($request->validated());

        return redirect()->route('hostels.index')->with('message', 'Hostel updated successfully.')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hostel  $hostels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostel $hostel)
    {
        $hostel->delete();

        return redirect()->route('hostels.index')->with('message', 'hostels deleted successfully.')->withInput();
    }


    // /**
    //  * Execute the console command.
    //  */
    // public function handle(): void
    // {
    //     $name = $this->ask('What is your name?');
    
    //     // ...
    // }
}
