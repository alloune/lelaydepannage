<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardVehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('dashboard/vehicules',[
           'vehicules' => $vehicules,
        ]);
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

        $vehicules = Vehicule::all();

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
        $fileName =  $request->input('model').$request->input('brand').$request->input('year)').phpdate('d-m-Y-');
        $file->move(public_path('storage'), $fileName);


        Vehicule::create([
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
        return redirect(route('dashboard.vehicules', compact('vehicules')));
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
    public function update(Request $request, Vehicule $article)
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
            $fileName = phpdate('d-m-Y-');
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
        return redirect(route('dashboard.vehicules'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $article)
    {
        Storage::delete($article->image);
        $article->delete();
        return redirect(route('dashboard-articles'));
    }
}
