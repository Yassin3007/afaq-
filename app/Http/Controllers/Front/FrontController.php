<?php

namespace App\Http\Controllers\Front;

use App\Models\Route;
use App\Models\Article;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Servant;
use App\Models\Training;
use App\Models\Scholarship;
use App\Models\Postgraduate;
use Illuminate\Http\Request;
use App\Models\JobOpportunity;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class FrontController extends Controller
{
    function index() {
        $data['training'] = Route::find(1); 
        $data['edu'] = Route::find(2); 
        $data['job'] = Route::find(3); 
        $data['articles']=Article::limit(3)->get();
        return view('front.index',$data);

    }

    public function training_route() {
        $trainings = Training::all();
        return view('front.training.index',compact('trainings'));
    }

    public function job_route() {
        $enable = Setting::find(1)->enable ;
        $data['file'] = Setting::find(1)->file ;
        if($enable == 1){
            $data['opportunities'] = JobOpportunity::orderBy('created_at','DESC')->get();

        }elseif($enable == 0){
            $data['opportunities'] = JobOpportunity::where('start','<=',date('Y-m-d'))->where('end','>',date('Y-m-d'))->orderBy('created_at','DESC')->get();

        }
        $data['companies'] = Company::limit(3)->get();
        return view('front.job.index',$data);
    }

    public function all_companies(){
        $companies = Company::all();
        return view('front.job.companies',compact('companies'));
    }

    public function job($id){
        $job = JobOpportunity::findOrFail($id);
        return view('front.job.job',compact('job'));

    }

    public function education_route(){
        $data['postgraduates'] = Postgraduate::all();
        $data['scholarships'] = Scholarship::all();
        return view('front.education.index',$data);

    }

    public function get_articles()  {
        $articles = Article::orderBy('created_at','DESC')->get();
        return view('front.articles.index',compact('articles'));
    }

    public function article($id){

        $article = Article::findOrFail($id);
        return view('front.articles.article',compact('article'));
    }

    public function elharamain() {
        $routes = Servant::all();
        return view('front.education.servant',compact('routes'));
    }

    public function postgraduates($id) {
        $postgraduate= Postgraduate::findOrFail($id);
        return view('front.education.postgraduate',compact('postgraduate'));
    }

    public function get_scholarship($id)  {
        $scholarship = Scholarship::findOrFail($id);
        return view('front.education.scholarship', compact('scholarship'));
        
    }

    public function get_servant($id)  {
        $servant = Servant::findOrFail($id);
        return view('front.education.servant_routes',compact('servant'));
    }

    public function contact(){
        $setting = Setting::first();
        
        return view('front.contact',compact('setting'));
    }
    public function storeContact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $data = Contact::create([
            'name'=>$request->name ,
            'email'=>$request->email ,
            'subject'=>$request->subject ,
            'message'=>$request->message ,
        ]);
        // Mail::to('concept.arch11@gmail.com')->send(new ContactMail($data));
        // Mail::to('concept@conc-arch.com')->send(new ContactMail($data));

        toastr()->success('request has been sent successfully');
        return redirect()->back();
    }
}
