<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupero dati dal DB
        $comics = Comic::All();

        return view( 'pages.comics.index', compact('comics') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:20',
                'description'=> 'required',
                'thumb'=> 'required',
                'price'=>'required',
                'series'=>'required|max:15',
                'sale_date'=>'required',
                'type'=>'required',
            ],
            [
                'title.required'=> 'Il titolo è obbligatorio',
                'title.max'=>'Hai superato il numero massimo',
                'description.required'=>'La descrizione è obbligatoria',
                'thumb.required'=>'l immagine è obbligatoria',
                'price.required'=>'Il prezzo è obbligatorio',
                'series.required'=>'La serie è obbligatorio',
                'series.max'=>'Hai superato il limite di caratteri',
                'sale_date.required'=>'La data è obbligatoria',
                'type.required'=>'Il titolo è obbligatorio',
            ]);
        //logica per salvare il nuovo dato nel DB
        $form_data = $request->all();

        $new_comic = new Comic();

        
        //Solo grazie al model con protected $fillable
        $new_comic->fill( $form_data );

        $new_comic->save();

        return redirect()->route( 'comics.index' )->with('success', 'Complimenti hai creato un nuovo fumetto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //logica per ottenere i dati del singolo record
        $comic = Comic::findOrFail($id);


        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}