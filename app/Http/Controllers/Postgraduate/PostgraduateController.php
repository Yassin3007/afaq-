<?php

namespace App\Http\Controllers\Postgraduate;

use App\Models\Postgraduate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostgraduateRequest;
use Illuminate\Support\Facades\DB;

class PostgraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postgraduates = Postgraduate::all();
        return view('postgraduate.index',compact('postgraduates'));
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
        $data = $request->only(['name','link','description']);
        $logo = $request->file('logo');
        $file = $request->file('file');
        $postgraduate=Postgraduate::create(array_merge($data,[
            'logo'=>$logo->store($request->name),
            
        ]));
        if($request->has('file')){
            $file = $request->file('file')->store($postgraduate->name );
            $postgraduate->file = $file ;
            $postgraduate->save();
        } 
        DB::commit();
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
    public function update(PostgraduateRequest $request, string $id)
    {
        DB::beginTransaction();

        $postgraduate = Postgraduate::findOrFail($id);
        $data = $request->only(['name','link','description']);
        $postgraduate->update($data);
        if($request->has('logo')){
            Storage::delete($postgraduate->logo);
            $logo = $request->file('logo')->store($postgraduate->name );
            $postgraduate->logo = $logo ;
            $postgraduate->save();
        } 
        if($request->has('file')){
            Storage::delete($postgraduate->file);

            $file = $request->file('file')->store($postgraduate->name );
            $postgraduate->file = $file ;
            $postgraduate->save();
        } 
        DB::commit();

        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postgraduate = Postgraduate::findOrFail($id);
        Storage::deleteDirectory($postgraduate->name);
        $postgraduate->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();

    }
}
