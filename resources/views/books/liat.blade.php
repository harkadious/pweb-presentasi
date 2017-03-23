@extends('master')
@section('title', 'Lihat Buku')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h1 class="header">Lihat Bukunya bu Uut</h1>
                    <hr>
                    <strong>Judul Buku :</strong><input type="text" class="form-control" name="jdl_buku" value="{{ $buku->jdl_buku }}" readonly><br>
                    <strong>Penerbit :</strong><input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}" readonly><br>
                    <strong>Tahun Terbit :</strong><input type="text" class="form-control" name="thn_terbit" value="{{ $buku->thn_terbit }}" readonly><br>
                    <strong>Konten Buku :</strong><textarea class="form-control" name="konten_buku" rows="7" readonly>{{ $buku->konten_buku }}</textarea><br>
                </div>
                <form method="post" action="{!! action('BooksController@destroy', $buku->id) !!}" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div>
                <button type="submit" class="btn btn-raised btn-warning">Delete</button>
                <a href="{!! action('BooksController@edit', $buku->id) !!}" class="btn btn-raised btn-info">Edit</a>
                </div>
                </form>
                <div class="clearfix"></div>

            </div>
    </div>

@endsection