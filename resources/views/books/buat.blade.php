@extends('master')
@section('title', 'Submit Buku Yuk')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                
                @if (session('thankyou'))
                    <div class="alert alert-success">
                    {{ session('thankyou') }}
                </div>
                @endif
                
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Submit Buku Baru</legend>
                    <p>Yuk submit buku baru buat koleksi bu Uut, biar bu Uut bisa pintar kayak kalian :)</p>
                    <hr>

                    <div class="form-group">
                        <label for="jdl_buku" class="col-lg-2 control-label">Judul Buku</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="jdl_buku" placeholder="Masukkan Judul Buku Disini" name="jdl_buku" value="{{ old('jdl_buku') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="penerbit" class="col-lg-2 control-label">Penerbit Buku</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Nama Penerbit Disini" name="penerbit" value="{{ old('penerbit') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="thn_terbit" class="col-lg-2 control-label">Tahun Terbit</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="thn_terbit" placeholder="Kapan Bukunya Terbit?" name="thn_terbit" value="{{ old('thn_terbit') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="konten_buku" class="col-lg-2 control-label">Konten Buku</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="7" id="konten_buku" placeholder="Punya review buku ini? Atau mau ngasih tau ke bu Uut tentang isi dari buku ini? Masukin disini aja :)" name="konten_buku"></textarea>
                            <span class="help-block">Bantu bu Uut untuk mengoleksi buku-buku! Semoga kamu yang bantu bu Uut dilancarkan dalam segala hal, aamiin.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-raised btn-default">Cancel</button>
                            <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection