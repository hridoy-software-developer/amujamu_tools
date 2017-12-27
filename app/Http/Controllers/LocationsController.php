<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class LocationsController extends Controller
{

    /**
     * Display a listing of the locations.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $locations = Location::paginate(25);

        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new location.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('locations.create');
    }

    /**
     * Store a new location in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Location::create($data);

            return redirect()->route('locations.location.index')
                             ->with('success_message', 'Location was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified location.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);

        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified location.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        

        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified location in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $location = Location::findOrFail($id);
            $location->update($data);

            return redirect()->route('locations.location.index')
                             ->with('success_message', 'Location was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified location from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $location = Location::findOrFail($id);
            $location->delete();

            return redirect()->route('locations.location.index')
                             ->with('success_message', 'Location was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:1|max:350',
            'description' => 'nullable|string|min:0|max:10000',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
