<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreWineRequest;
use App\Http\Requests\UpdateWineRequest;
use App\Models\Wine;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['wines'] = Wine::all();
        return view('wines.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWineRequest $request)
    {
        Wine::create($request->all());
        return redirect()->route('wine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        return view('wines.form', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWineRequest  $request
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWineRequest $request, Wine $wine)
    {
        $wine->update($request->all());
        return redirect()->route('wine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wine = Wine::findOrFail($id);
        $wine->delete();
        return redirect()->back();
    }
}
