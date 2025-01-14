@extends('template')

@section('menu1','')
@section('menu5','active')
@section('menu2','')
@section('judul','Data Nilai')
@section('konten')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
 
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Add Data
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="/admin/tambah_nilai">Nilai Siswa</a>
    </div>
  </div>
</div>
                      </h3>
                    </div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status1'))
                        <div class="alert alert-danger">
                            {{ session('status1') }}
                        </div>
                    @endif
                    <div class="table-responsive">                       
                      <table id="example" class="display" style="width:100%">
                          <thead>
                            <tr>
                            <th>#</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Nilai</th>
                            <th>Guru</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @forelse($dataNilai as $nilai)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nilai->user->nis ?? '-' }}</td>
                                <td>{{ $nilai->user->name ?? '-' }}</td>
                                <td>{{ $nilai->nilai }}</td>
                                <td>{{ $nilai->guru->nama ?? '-' }}</td>
                                <td>{{ $nilai->mapel->nama ?? '-' }}</td>
                                <td><a href="/admin/destroy_nilai/{{$nilai->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>|<a href="/admin/edit_nilai/{{$nilai->id}}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></a></td>
                            
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data nilai.</td>
                            </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection      


<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

  <script>
      $(document).ready(function() {
        $('#example').DataTable();
            
      } );
  </script>