<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vehicules = Article::all();

        $validated = $request->validate([
            "model" => 'bail|required|string|max:40',
            "brand" => 'bail|required|string|max:40',
            "engine" => 'bail|required|string|max:40',
            "fuels" => 'bail|required|string|max:40',
            "km" => 'bail|required|string|max:40',
            "price" => 'bail|required|string|max:40',
            "image" => 'bail|image|required|max:2048',
            "year" => 'bail|required|string',
            "ct" => 'bail|required|string',
        ]);


        $file = $request->file('image');
        $fileName = date('d-m-Y-') . $file->getClientOriginalName();
        $file->move(public_path('storage'), $fileName);


        Article::create([
            "model" => $request->model,
            "brand" => $request->brand,
            "engine" => $request->engine,
            "fuels" => $request->fuels,
            "km" => $request->km,
            "price" => $request->price,
            "image" => $fileName,
            "year" => $request->year,
            "ct" => $request->ct,

        ]);
        return redirect(route('dashboard-articles', compact('vehicules')));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {


        $validated = $request->validate([
            "model" => 'bail|required|string|max:40',
            "brand" => 'bail|required|string|max:40',
            "engine" => 'bail|required|string|max:40',
            "fuels" => 'bail|required|string|max:40',
            "km" => 'bail|required|string|max:40',
            "price" => 'bail|required|string|max:40',
            "image" => 'image',
            "year" => 'bail|required|string',
            "ct" => 'bail|required|string',
        ]);

        if (isset($request->image)) {

            $file = $request->file('image');
            $fileName = date('d-m-Y-') . $file->getClientOriginalName();
            $file->move(public_path('storage'), $fileName);

            $article->update([
                "model" => $request->input('model'),
                "brand" => $request->input('brand'),
                "engine" => $request->input('engine'),
                "fuels" => $request->input('fuels'),
                "km" => $request->input('km'),
                "price" => $request->input('price'),
                "image" => $fileName,
                "year" => $request->input('year'),
                "ct" => $request->input('ct'),
            ]);
        }
        return redirect(route('dashboard-articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete($article->image);
        $article->delete();
        return redirect(route('dashboard-articles'));
    }
}
