
@extends('template')

@if($cek==1)
@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','Data E-TOR')
@section('konten')
@endif

@if($cek==2)
@section('menu1','')
@section('menu2','')
@section('menu4','active')
@section('judul','Laporan E-TOR')
@section('konten')
@endif
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

<div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    @if($cek=="1")
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">

                      @if(Auth::user()->role == "admin")                            
                        <a href="/admin/tambahetor"><button class="btn btn-success"><i class="fa fa-plus"></i> Edit Data</button></a>
                      @endif
                      @if(Auth::user()->role == "operator")                            
                        <a href="/operator/tambahetor"><button class="btn btn-success"><i class="fa fa-plus"></i> Edit Data</button></a>
                      @endif

                      @if(Auth::user()->role == "verifikator")            
                          <?php
                              $pesan = DB::table('tbl_etor')
                              ->where('dibaca', '=', 0)
                              ->count();
                          ?>
                          <i class="fa fa-envelope"></i> Belum Terbaca (<?php echo $pesan; ?>)
                      @endif
                    </h3>
                    </div>
                    @endif  
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
                              <th>Unit Kerja</th>
                              <th>No TOR</th>
                              <th>Tahun</th>

                              <th>Action</th>
                              @if(Auth::user()->role == "verifikator" || Auth::user()->role == "operator")

                              <th>Status</th>
                              @endif
                              @if(Auth::user()->role == "admin")

                              <th>Status</th>
                              @endif
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($tbl_etor as $etor)
                            
                            <tr>
                              <td>{{ $etor->unit_kerja }}</td>
                              <td>{{ $etor->no_tor }}</td>
                              <td>
                              <?php echo date("Y",strtotime($etor->created_at)); ?>     

                              </td>
                              <td>
     @if(Auth::user()->role == "admin" || Auth::user()->role == "operator")
     @if($cek=="1")                         
     <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Add/Edit Data
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

        @if(Auth::user()->role == "admin")
        <a class="dropdown-item" href="/admin/tambah_iku/{{ $etor->id }}">IKU</a>
        <a class="dropdown-item" href="/admin/tambah_ikk/{{ $etor->id }}">IKK</a>
        <a class="dropdown-item" href="/admin/tambah_io/{{ $etor->id }}">Input/Output</a>
        @endif

        @if(Auth::user()->role == "operator")
        <a class="dropdown-item" href="/operator/tambah_ikk/{{ $etor->id }}">IKK</a>
        <a class="dropdown-item" href="/operator/tambah_io/{{ $etor->id }}">Input/Output</a>
        @endif
      </div>
      @endif
      @endif
    </div>
    @if(Auth::user()->role == "admin")
  
  @if($cek=="1")
  |
  <a href="/admin/editetor/{{$etor->id}}"><button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a> | 
  
  <a href="/admin/destroyetor/{{$etor->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
  
  @endif
  @if($cek=="2")
<a href="/admin/printpdf/{{$etor->id}}"><button class="btn btn-secondary"><i class="fa fa-file"></i> Print PDF</button></a>
|
<a href="/admin/printexcel/{{$etor->id}}"><button class="btn btn-success"><i class="fa fa-file"></i> Print Excel</button></a>
@endif
  
  @endif
  
  @if(Auth::user()->role == "operator")
  @if($cek=="1")
  |
  <a href="/operator/editetor/{{$etor->id}}"><button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a> | 
  <a href="/operator/destroyetor/{{$etor->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
  
  @endif
  @if($cek=="2")
<a href="/operator/printpdf/{{$etor->id}}"><button class="btn btn-secondary"><i class="fa fa-file"></i> Print PDF</button></a>
|
<a href="/operator/printexcel/{{$etor->id}}"><button class="btn btn-success"><i class="fa fa-file"></i> Print Excel</button></a>
@endif
  @endif
  @if(Auth::user()->role == "verifikator")
  <a href="/verifikator/ceketor/{{$etor->id}}"><button class="btn btn-success"><i class="fa fa-eye"></i> Cek</button></a>
  @endif
  @if(Auth::user()->role == "operator")
  <a href="/operator/ceketor/{{$etor->id}}"><button class="btn btn-success"><i class="fa fa-eye"></i> Cek</button></a>
  @endif
  @if(Auth::user()->role == "manager")
  <a href="/manager/ceketor/{{$etor->id}}"><button class="btn btn-success"><i class="fa fa-eye"></i> Cek</button></a>
  @endif
</td>

@if(Auth::user()->role == "verifikator" || Auth::user()->role == "operator")
    
<td>
<?php
    if($etor->oke=="1")
    {
      echo "<div class='alert alert-success'><i class='fa fa-check'> Verified</i></div>";
    }
    else{
      echo "<div class='alert alert-warning'><i class='fa fa-times'> Revision</i></div>";
    }

?>
</td>

@endif


@if(Auth::user()->role == "admin")
    
<td>
<?php
    if($etor->oke=="1")
    {
      echo "<div class='alert alert-success'><i class='fa fa-check'> Verified</i></div>";
    }
    else{
      echo "<div class='alert alert-warning'><i class='fa fa-times'> Revision</i></div>";
    }

?>
</td>

@endif
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