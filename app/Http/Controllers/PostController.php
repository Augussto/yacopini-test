<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sells = Sell::all();
        //return view('dashboard',['sells'=>$sells]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'año' => 'required',
            'precio' => 'required'
        ]);
        
        $show = Sell::create($validateData);
        return redirect('dashboard')->with('success', 'Sell is successfully saved');;
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
        $sell = Sell::findOrFail($id);
        //return $sell;
        return view('edit')->with('sell',$sell);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'año' => 'required',
            'precio' => 'required'
        ]);
        
        Sell::whereId($id)->update($validateData);
        return redirect('dashboard')->with('success', 'Sell is successfully updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sell = Sell::findOrFail($id);
        $sell -> delete();

        return redirect('dashboard');
    }
}
