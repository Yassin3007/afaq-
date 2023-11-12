<?php

namespace App\Http\Controllers\Servant;

use App\Models\Servant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostgraduateRequest;

class ServantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servants = Servant::all();
        return view('servant.index',compact('servants'));
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
    public function store(PostgraduateRequest $request)
    {
        DB::beginTransaction();
        $data = $request->only(['name','link','description','video']);
        $logo = $request->file('logo');
        $file = $request->file('file');
        $servant=Servant::create(array_merge($data,[
            'logo'=>$logo->store($request->name),
            
        ]));
        if($request->has('file')){
            $file = $request->file('file')->store($servant->name );
            $servant->file = $file ;
            $servant->save();
        } 
        DB::commit();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Servant $servant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servant $servant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostgraduateRequest $request, $id)
    {
        DB::beginTransaction();

        $servant = Servant::findOrFail($id);
        $data = $request->only(['name','link','description','video']);
        $servant->update($data);
        if($request->has('logo')){
            Storage::delete($servant->logo);
            $logo = $request->file('logo')->store($servant->name );
            $servant->logo = $logo ;
            $servant->save();
        } 
        if($request->has('file')){
            Storage::delete($servant->file);

            $file = $request->file('file')->store($servant->name );
            $servant->file = $file ;
            $servant->save();
        } 
        DB::commit();

        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $servant = Servant::findOrFail($id);
        Storage::deleteDirectory($servant->name);
        $servant->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();
    }
}
