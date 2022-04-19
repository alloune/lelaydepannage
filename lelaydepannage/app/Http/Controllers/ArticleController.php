<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Article::all();
        return view('articles', compact('vehicules'));
    }

    public function indexDashboard()
    {
        $vehicules = Article::all();
        return view('dashboardArticles', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vehicules = Article::all();

         $validated = $request->validate([
            "model" => 'bail|required|string|max:40',
            "brand"=> 'bail|required|string|max:40',
            "engine"=> 'bail|required|string|max:40',
            "fuels"=> 'bail|required|string|max:40',
            "km"=> 'bail|required|string|max:40',
            "price"=> 'bail|required|string|max:40',
            "image"=> 'bail|required|string|',
             "year"=> 'bail|required|string',
        ]);

        Article::create([
            "model" => $request->model,
            "brand"=> $request->brand,
            "engine"=> $request->engine,
            "fuels"=> $request->fuels,
            "km"=> $request->km,
            "price"=> $request->price,
            "image"=> $request->image,
            "year"=>$request->year,

        ]);
       return redirect(route('dashboard-articles', compact('vehicules')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
//        dd($request);
        $validated = $request->validate([
            "model" => 'bail|required|string|max:40',
            "brand"=> 'bail|required|string|max:40',
            "engine"=> 'bail|required|string|max:40',
            "fuels"=> 'bail|required|string|max:40',
            "km"=> 'bail|required|string|max:40',
            "price"=> 'bail|required|string|max:40',
            "image"=> 'bail|required|string|',
            "year"=> 'bail|required|string',
        ]);

        $article->update([
                "model" => $request->input('model'),
                "brand"=> $request->input('brand'),
                "engine"=> $request->input('engine'),
                "fuels"=> $request->input('fuels'),
                "km"=> $request->input('km'),
                "price"=> $request->input('price'),
                "image"=> $request->input('image'),
                "year"=> $request->input('year'),
            ]);
        return redirect(route('dashboard-articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('dashboard-articles'));
    }
}
