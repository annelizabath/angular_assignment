<?php

namespace App\Http\Controllers;

use App\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books=books::all();
        $booksdetails =books::all();
        return view('books.index', compact('booksdetails'));
    }
    public function create()
    {
        return view('books.books');
    }
    public function sample()
    {
        return view('books.books');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bk=new books([
            'title'=>$request->get('title'),
            'body'=>$request->get('body')
        ]);
        $bk->save();
        return redirect('/books/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(books $books)
    {
        return view('books.books');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=books::find($id);
        return view('books.edit',compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books=books::find($id);
        $books->title=$request->get('title');
        $books->body=$request->get('body');
        $books->save();
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books=books::find($id);
        $books->delete();
        return redirect('/books');
    }
}
