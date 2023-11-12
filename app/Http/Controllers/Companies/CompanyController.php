<?php

namespace App\Http\Controllers\Companies;

use App\Models\Company;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Imports\CompanysImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Storage;
use App\Services\Company\CompanyServices;


class CompanyController extends Controller
{

    protected $companyServices ;
    function __construct(CompanyServices $companyServices) {
        $this->companyServices = $companyServices ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index',compact('companies'));
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
    public function store(CompanyRequest $request)
    {
        $data = $request->only(['name','type','link']);
        $logo = $request->file('logo');

        $company=Company::create($data);
        if($request->has('logo')){
            $logo = $request->file('logo')->store($company->name );
            $company->logo = $logo ;
            $company->save();
        } 
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
    public function update(CompanyRequest $request,  $id)
    {
        $company = $this->companyServices->getCompany($id);
        $data = $request->only(['name','type','link']);
        $company->update($data);
        if($request->has('logo')){
            if($company->logo!=null){
                Storage::delete($company->logo);
            }
            $logo = $request->file('logo')->store($company->name );
            $company->logo = $logo ;
            $company->save();
        } 
        toastr()->success('Data has been updated successfully!', 'Done');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = $this->companyServices->getCompany($id);
        Storage::deleteDirectory($company->name);

        $company->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();

    }

    public function file_upload(Request $request){
        $file = $request->file('file')->store('/excel');

        $setting = Setting::find(1);
        $setting->file = $file ; 
        $setting->save();
        Excel::import(new CompanysImport, $request->file);
        toastr()->success('Data has been uploaded successfully!', 'Done');
        return back();
    }

    public function company_delete_all(){
        DB::table('companies')->truncate();
        return back() ;
    }
}
