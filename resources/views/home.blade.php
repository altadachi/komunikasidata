@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="/view-data"><span class="btn btn-primary ">Lihat
                            Data</span></a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>Selamat Datang</h1>
                            <p>Ini adalah Aplikasi Sederhana Mata Kuliah Komunikasi Data</p>
                        </div>
                    </div>
                    <h1>Kelompok 1</h1>
                    <p> Aplikasi ini dibuat bertujuan untuk menyelesaikan salah satu tugas <b>Komunikasi
                            Data </b> untuk mempelajarinya lebih dalam. Aplikasi ini bertujuan untuk memberikan
                        informasi
                        dan menjelaskan tentang Komponen Perangkat Komunikasi Data berbasis Online.</p>

                    <h4>Keterangan Pembuatan Aplikasi dan Teknologi yang di pakai :</h4>
                    <ul>
                        <li>PHP 7.4.9</li>
                        <li>Library Composer version 1.10.1</li>
                        <li>Basis Data : Mysql</li>
                        <li>Framework Boostrap 4</li>
                        <li>Framework Laravel 8 dengan dukungan bahasa pemograman Javascript dan NodeJS</li>
                    </ul>

                    <p>Demikian kami buat sistem aplikasi sederhana ini, mohon maaf apabila banyak kesalaha kurang
                        berkenan. Semoga aplikasi ini dapat
                        memberikan wawasan yang lebih luas kepada pengguna. Kami memohon untuk saran dan kritiknya.
                        Terima kasih.</p>

                    <center>
                        <h4>Anggota Kelompok</h4>
                    </center>

                </div>
                <div class="container">

                    <div class="d-flex justify-content-center">

                        <div class="card" style="width:350px;">
                            <img class="card-img-top rounded-circle" src="assets/altadachi.jpg" alt="altadachi"
                                width="80">
                            <div class="card-body">
                                <h4 class="card-title">Muhaltatin Jabaarsyah Dachi</h4>
                                <p class="card-text">Nim : 180121246</p>

                            </div>
                        </div>
                        <div class="card" style="width:350px; margin-left:5px">
                            <img class="card-img-top rounded-circle" src="assets/ayutiana.jpeg" alt="ayutiana"
                                width="80">
                            <div class="card-body">
                                <h4 class="card-title">Ayu Tiana Artamian br Purba</h4>
                                <p class="card-text">180121233</p>

                            </div>
                        </div>
                        <div class="card" style="width:350px; margin-left:5px">
                            <img class="card-img-top rounded-circle " src="assets/jokosiswanto.jpeg" alt="jokosiswanto"
                                width="80" height="270">
                            <div class="card-body">
                                <h4 class="card-title">Joko Siswanto</h4>
                                <p class="card-text">180121215</p>

                            </div>
                        </div>
                        <div class="card" style="width:350px; margin-left:5px">
                            <img class="card-img-top rounded-circle" src="assets/yunisarah.jpeg" alt="yunisarah"
                                width="80">
                            <div class="card-body">
                                <h4 class="card-title">Yuni Sarah</h4>
                                <p class="card-text">180121236</p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection