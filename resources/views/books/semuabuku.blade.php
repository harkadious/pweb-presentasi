@extends('master')
@section('title', 'Daftar Buku bu Uut')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Buku bu Uut </h2>
                    
                    @if (session('thankyou'))
    				<div class="alert alert-success">
    			    {{ session('thankyou') }}
				    </div>
					@endif
                    
                    @if($buku->isEmpty())
                    @else
                    <p>Bu Uut punya beberapa koleksi buku nih! Yuk intip bukunya :)</p>
                    @endif
                </div>
                @if ($buku->isEmpty())
                    <p> Belom ada buku nih, tambahin dong. Biar bu Uut bisa pinter seperti kalian :)</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Konten Buku</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $bukusatuan)
                                <tr>
                                    <td>{!! $bukusatuan->id !!} </td>
                                    <td><a href="{!! action('BooksController@show', $bukusatuan->id) !!}">{!! $bukusatuan->jdl_buku !!}</a></td>
                                    <td>{!! $bukusatuan->penerbit !!}</td>
                                    <td>{!! $bukusatuan->thn_terbit !!}</td>
                                    @if($bukusatuan->konten_buku)
									<td>{{ substr(strip_tags($bukusatuan->konten_buku), 0, 32) }}{{ strlen(strip_tags($bukusatuan->konten_buku)) > 32 ? "..." : "" }}</td>
									@else
									<td>Belum ada penjelasan bukunya nih</td>
									@endif
									{{--<td><a href="{{ route('buku.show', $bukusatuan->id) }}" class="btn btn-default btn-sm">Lihat</a> <a href="{{ route('buku.edit', $bukusatuan->id) }}" class="btn btn-default btn-sm">Edit</a></td>--}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection