<?php

namespace App\Http\Controllers\Training;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingRequest;
use Illuminate\Support\Facades\Storage;
use App\Services\Training\TrainingServices;

class TrainingController extends Controller
{
    protected $trainingServices;

    public function __construct(TrainingServices $trainingServices){

        $this->trainingServices = $trainingServices ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::all();
        return view('training.index',compact('trainings'));
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
    public function store(TrainingRequest $request)
    {
        $data = $request->only(['name','link','description']);
        $logo = $request->file('logo');
        Training::create(array_merge($data,[
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
    public function update(Request $request, string $id)
    {
        $training =$this->trainingServices->getTraining($id);
        $data = $request->only(['name','link','description']);
        $training->update($data);
        if($request->has('logo')){
            if($training->logo != null){
                Storage::delete($training->logo);

            }
            $logo = $request->file('logo')->store($training->name );
            $training->logo = $logo ;
            $training->save();
        } 
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $training =$this->trainingServices->getTraining($id);
        Storage::deleteDirectory($training->name);
        $training->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();
    }
}
