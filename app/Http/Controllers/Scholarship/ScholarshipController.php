<?php

namespace App\Http\Controllers\Scholarship;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ScholarshipRequest;
use App\Services\Scholarship\ScholarshipServices;

class ScholarshipController extends Controller
{
    protected $scholarshipServices ;

    function __construct(ScholarshipServices $scholarshipServices) {
        $this->scholarshipServices = $scholarshipServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarships= Scholarship::all();
        return view('scholarship.index',compact('scholarships'));
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
    public function store(ScholarshipRequest $request)
    {
        $data = $request->only(['name','link','description']);
        $logo = $request->file('logo');
        Scholarship::create(array_merge($data,[
            'logo'=>$logo->store($request->name),
            
        ]));
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
    public function update(ScholarshipRequest $request,  $id)
    {
        $scholarship =$this->scholarshipServices->getScholarship($id);
        $data = $request->only(['name','link','description']);
        $scholarship->update($data);
        if($request->has('logo')){
            Storage::delete($scholarship->logo);
            $logo = $request->file('logo')->store($scholarship->name );
            $scholarship->logo = $logo ;
            $scholarship->save();
        } 
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scholarship =$this->scholarshipServices->getScholarship($id);
        Storage::deleteDirectory($scholarship->name);
        $scholarship->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();
    }
}
