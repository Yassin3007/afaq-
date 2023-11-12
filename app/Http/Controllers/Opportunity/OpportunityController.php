<?php

namespace App\Http\Controllers\Opportunity;

use Illuminate\Http\Request;
use App\Models\JobOpportunity;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\OpportunityRequest;
use App\Models\Setting;
use App\Services\Opportunity\OpportunityServices;

class OpportunityController extends Controller
{

    protected $opportunityServices ;
    function __construct(OpportunityServices $opportunityServices) {
        
        $this->opportunityServices = $opportunityServices ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enable = Setting::find(1)->enable ;
        $opportunities = JobOpportunity::all();
        return view('opportunity.index',compact('opportunities','enable'));
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
    public function store(OpportunityRequest $request)
    {
        $data = $request->only(['company_name','title','link','start','end','description']);
        $logo = $request->file('logo');
        JobOpportunity::create(array_merge($data,[
            'logo'=>$logo->store($request->company_name),
            
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
    public function update(OpportunityRequest $request,  $id)
    {
        $opportunity =$this->opportunityServices->getOpportunity($id);
        $data = $request->only(['company_name','title','link','start','end','description']);
        $opportunity->update($data);
        if($request->has('logo')){
            Storage::delete($opportunity->logo);
            $logo = $request->file('logo')->store($opportunity->company_name );
            $opportunity->logo = $logo ;
            $opportunity->save();
        } 
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy( $id)
    {
        $opportunity =$this->opportunityServices->getOpportunity($id);
        Storage::deleteDirectory($opportunity->company_name);
        $opportunity->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();
    }

    public function enable(Request $request)  {
        
        $enable = Setting::find(1);
        $enable->update([
            'enable'=>$request->enable
        ]);
        toastr()->success('Status has been updated successfully!', 'Congrats');
        return back();
    }
}
