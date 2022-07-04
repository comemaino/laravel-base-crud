<?php

namespace App\Http\Controllers;

use App\Comic;
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
        $comics_list = Comic::all();
        // dd($comics_list);
        return view('comics.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'nullable|max:100',
        //     'thumb'  => 'required',
        //     'price' => 'required|max:100',
        //     'series' => 'required|max:100',
        //     'sale_date' => 'required|max:100',
        //     'type' => 'required|max:100',
        // ]);

        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_to_update = Comic::findOrFail($id);
        return view('comics.edit', compact('comic_to_update'));
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
        $request->validate($this->getValidationRules());
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'nullable|max:100',
        //     'thumb'  => 'required',
        //     'price' => 'required|max:100',
        //     'series' => 'required|max:100',
        //     'sale_date' => 'required|max:100',
        //     'type' => 'required|max:100',
        // ]);

        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function getValidationRules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb'  => 'required',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
        ];
    }
}
