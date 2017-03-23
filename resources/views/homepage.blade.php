@extends('master')
@section('title', 'Bu Uut\'s Book Directory')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Selamat Datang di Bu Uut's Book Directory!</h1>
                  <p class="lead">Bu Uut's Book Directory adalah sebuah inovasi asal-asalan dari mahasiswa gabut di Departemen Informatika ITS yang mencoba untuk selalu produktif meskipun gangguan 'malas' selalu menyerang</p>
                  <p><a class="btn btn-raised btn-primary" href="/books" role="button">Cek List Buku Sekarang</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->


        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 class="text-center">Situs ini dibuat asal-asal oleh 2 orang yang merupakan mahasiswa aktif Departemen Informatika ITS</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="thumbnail">
                                <div class="caption text-center">
                                    <img src="/images/fajar.jpg" style="height: auto; max-width: 100%;">
                                    <h2>Fajar Maulana Firdaus</h2>
                                    <h5>Department of Informatics ITS</h5>
                                    <hr>
                                    <p>Loves to code everything, except Competitive Programming. Trying to praise everyone because their life is amazing and better than him. Glad to had some bestfriends around him. A die hard Chelsea FC Fans since 2001. Big fan of Linus Benedict Torvalds and Lawrence Edward Page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thumbnail">
                                <div class="caption text-center">
                                    <img src="/images/faiq.jpg" style="height: auto; max-width: 100%;">
                                    <h2>Faiq</h2>
                                    <h5>Department of Informatics ITS</h5>
                                    <hr>
                                    <p>Big guy sitting in front of laptop just to play a lot of steam's game. Kind-hearted man, tough guy, always being nice to the other person. The man who always wears a nice outfits every class session. Had a girl named Firda Rheinalia, which is also studying on Department of Informatics ITS.</p>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>

@endsection