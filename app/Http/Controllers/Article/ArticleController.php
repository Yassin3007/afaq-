<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
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
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);
        $data = $request->only(['name','description']);
        $logo = $request->file('logo');
        if($request->has('logo')){

            Article::create(array_merge($data,[
                'logo'=>$logo->store($request->name),
                
            ]));
        }else{
            Article::create($data);
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
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);
        $article =Article::findOrFail($id);
        $data = $request->only(['name','description']);
        $article->update($data);
        if($request->has('logo')){
            if($article->logo != null){
                Storage::delete($article->logo);
            }
            $logo = $request->file('logo')->store($article->name );
            $article->logo = $logo ;
            $article->save();
        } 
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        Storage::deleteDirectory($article->name);
        $article->delete();
        toastr()->error('Data has been deleted !', 'Done');
        return back();
    }
}
