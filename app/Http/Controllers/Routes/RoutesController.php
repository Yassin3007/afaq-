<?php

namespace App\Http\Controllers\Routes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoutesRequest;
use App\Models\Route;
use App\Services\Routes\RoutesServices;

class RoutesController extends Controller
{
    protected $routeServices ;
    function __construct(RoutesServices $routesServices)  {
        $this->routeServices = $routesServices ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();
        return view('routes.index',compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoutesRequest $request)
    {
        $data = $request->only(['name','description']);
        Route::create($data);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoutesRequest $request,  $id)
    {
        $route = $this->routeServices->getRoute($id);
        $data = $request->only(['name','description']);
        $route->update($data);
        toastr()->success('Data has been updated successfully!', 'Done');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $route = $this->routeServices->getRoute($id);

        $route->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();

    }
}
