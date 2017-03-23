<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookFormRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function homepage(){
        return view('homepage');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Book::all();

        return view('books.semuabuku', ['buku'=> $buku]);
//        return view('books.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.buat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request){
        $buku = new Book([
            'jdl_buku' => $request->get('jdl_buku'),
            'penerbit' => $request->get('penerbit'),
            'thn_terbit' => $request->get('thn_terbit'),
            'konten_buku' => $request->get('konten_buku'),
        ]);

        $buku->save();

        return redirect('/books/create')->with('thankyou', 'Terima kasih sudah menambahkan koleksi buku bu Uut!');
//        return $request->all();
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
        $buku = Book::find($id);
        return view('books.liat')->withBuku($buku);
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
        $buku = Book::find($id);
        return view('books.edit')->withBuku($buku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, BookFormRequest $request)
    {
        //
        $buku = Book::find($id);

        $buku->jdl_buku = $request->get('jdl_buku');
        $buku->penerbit = $request->get('penerbit');
        $buku->thn_terbit = $request->get('thn_terbit');
        if($request->konten_buku){
            $buku->konten_buku = $request->konten_buku;
        }

        $buku->save();

        return redirect(action('BooksController@edit', $buku->id))->with('thankyou', 'Terima kasih telah membantu kesejahteraan bu Uut!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $buku = Book::find($id);
        $bukutemp = $buku->jdl_buku;
        $buku->delete();
        return redirect('/books')->with('thankyou', 'Terima kasih! Buku '. $bukutemp .' telah berhasil dihapus!');
    }
}
