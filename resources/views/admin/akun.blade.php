@extends('template')

@section('menu1','')
@section('menu2','active')
@section('menu3','')
@section('judul','Data Akun Pengguna Aplikasi')
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
      <a class="dropdown-item" href="/admin/tambahakun_admin">Admin</a>
      <a class="dropdown-item" href="/admin/tambahakun">Siswa</a>
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
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Hak Akses</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->role }}</td>
                              <td><a href="/admin/destroy/{{$user->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>|<a href="/admin/view_detail_akun/{{$user->id}}"><button class="btn btn-primary"><i class="fa fa-edit"></i> View Details</button></a></td>
                            </tr>
                            
                            @endforeach
                            
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