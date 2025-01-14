@extends('template')



@section('menu1','active')

@section('judul','Dashboard')
@section('konten')
<div class="col-lg-12">

<div class="card">
        <div class="card-header">
            <h4 class="card-title">Keterangan Penggunaan Aplikasi</h4>
        </div>
        <div class="card-body">
            <p><strong>Dashboard:</strong> Aplikasi ini menampilkan data Nilai Siswa.</p>
            <p><strong>Fitur Utama:</strong> 
                <ul>
                    <li>User: Menampilkan User.</li>
                    <li>Mapel: Menampilkan Guru.</li>
                    <li>Mapel: Menampilkan Mata Pelajaran.</li>
                    <li>Nilai: Menampilkan Nilai.</li>
                </ul>
            </p>
            <p><strong>Sekolah:</strong> SMA Negeri 1 Tanjung.</p>
        </div>
        </div>
        @endsection