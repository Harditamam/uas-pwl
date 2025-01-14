@extends('template')
@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','Data IKK')
@section('konten')

<!-- Large modal -->
<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>

<div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit IKK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(Auth::user()->role == "operator")  
          <form action="/operator/update_ikk2" method="post">
        @endif
        @if(Auth::user()->role == "admin")  
          <form action="/admin/update_ikk2" method="post">
        @endif
        @csrf 
        <input type="hidden" name="id" id="id2">
        <input type="hidden" name="id_kegiatan" id="nama_kegiatan212">
        <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
        <div class="form-group">
            <label for="message-text" class="col-form-label">IKK</label>
            <input type="text" name="ikk" id="ikk" class="form-control">          
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Target</label>
            <table class="table table-bordered" width="100%">
                              <tr>
                                <td width="10%"><b>Tahun</b></td>
                                <td><?php 
                                      $data = date('Y');
                                      echo $data;
                                 ?></td>
                                <td><?php 
                                      echo $data+1;
                                 ?></td>
                                <td><?php 
                                      echo $data+2;
                                 ?></td>
                                <td><?php 
                                      echo $data+3;
                                 ?></td>
                                <td><?php 
                                      echo $data+4;
                                 ?></td>
                              
                              <input type="hidden" name="tahun_awal" id="tahun_awal113" value="<?php echo $data; ?>"></tr>
                              <input type="hidden" name="tahun1" id="tahun113">
                              <input type="hidden" name="tahun2" id="tahun213">
                              <input type="hidden" name="tahun3" id="tahun313">
                              <input type="hidden" name="tahun4" id="tahun413">
                              <input type="hidden" name="tahun5" id="tahun513">
                              <tr width="10%">
                                <td><b>Baseline/Capaian/Target</b></td>
                                <td><input type="text" name="target1" id="target113" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target2" id="target213" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target3" id="target313" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target4" id="target413" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target5" id="target513" placeholder="Target" class="form-control"></td>
                              </tr>
                            </table>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade bd-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ikk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->role == "operator")
        <form action="/operator/store_ikk" method="post">
      @endif
      @if(Auth::user()->role == "admin")
        <form action="/admin/store_ikk" method="post">
      @endif
        @csrf 
        <input type="hidden" name="id" id="id2">
        <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
        <div class="form-group">
            <label for="message-text" class="col-form-label">IKK</label>
            <input type="text" name="ikk2" id="ikk2" value="" class="form-control">
            <input type="hidden" name="nama_kegiatan21" id="nama_kegiatan21" class="form-control">          
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Target</label>
            <table class="table table-bordered" width="100%">
                              <tr>
                                <td width="10%"><b>Tahun</b></td>
                                <td><?php 
                                      $data = date('Y');
                                      echo $data;
                                 ?></td>
                                <td><?php 
                                      echo $data+1;
                                 ?></td>
                                <td><?php 
                                      echo $data+2;
                                 ?></td>
                                <td><?php 
                                      echo $data+3;
                                 ?></td>
                                <td><?php 
                                      echo $data+4;
                                 ?></td>
                              
                              <input type="hidden" name="tahun_awal11" id="tahun_awal11" value="<?php echo $data; ?>"></tr>
                              <input type="hidden" name="tahun1" id="tahun111">
                              <input type="hidden" name="tahun2" id="tahun211">
                              <input type="hidden" name="tahun3" id="tahun311">
                              <input type="hidden" name="tahun4" id="tahun411">
                              <input type="hidden" name="tahun5" id="tahun511">
                              <tr width="10%">
                                <td><b>Baseline/Capaian/Target</b></td>
                                <td><input type="text" name="target1" id="target111" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target2" id="target211" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target3" id="target311" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target4" id="target411" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target5" id="target511" placeholder="Target" class="form-control"></td>
                              </tr>
                            </table>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Nama Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->role == "operator")
        <form action="/operator/update_ikk" method="post">
      @endif
      @if(Auth::user()->role == "admin")
        <form action="/admin/update_ikk" method="post">
      @endif
        @csrf 
        <input type="hidden" name="id" id="idx2">
        <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
        <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" id="nama_kegiatan2" class="form-control">          
          </div>
          
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<div class="col-lg-12">
                  <div class="card">
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
                    @if (session('status2'))
                        <div class="alert alert-warning">
                            {{ session('status2') }}
                        </div>
                    @endif
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form IKK  ( No. TOR : {{ $no_etor }})</h3>
                    </div>
                    <div class="card-body">
                      @if(Auth::user()->role == "operator")
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/store_kegiatan">
                      @endif
                      @if(Auth::user()->role == "admin")
                      <form class="form-horizontal" id="input-form" method="post" action="/admin/store_kegiatan">
                      @endif

                      @csrf  
                      <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Nama Kegiatan</label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" id="nama_kegiatan">
                        </div>
                      </div>
                        
                        
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                    <?php
                        $i=1;
                    ?>
                    @foreach($ikk as $ikk)
                    
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Kegiatan <?php echo $i; ?></h3>
                    </div>
                    <div class="table-responsive">
                    <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="h4">
                      <table class="table table-bordered" width="100%">
                        <tr>
                          <td>Kegiatan</td>
                          <td>Action</td>
</tr>  
<tr>
                          <td>{{ $ikk->nama_kegiatan }}</td>
                          <td>
                          @if(Auth::user()->role == "operator")  
                          <button type="button" class="btn btn-primary" onclick="getData({{ $ikk->id }}, '{{ $ikk->nama_kegiatan }}')" data-toggle="modal" data-target=".bd-example-modal-lg21">Edit</button>
| <a href="/operator/delete_ikk/{{ $ikk->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>

@endif

@if(Auth::user()->role == "admin")  
                          <button type="button" class="btn btn-primary" onclick="getData({{ $ikk->id }}, '{{ $ikk->nama_kegiatan }}')" data-toggle="modal" data-target=".bd-example-modal-lg21">Edit</button>
| <a href="/admin/delete_ikk/{{ $ikk->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>

@endif
</tr>  
                    </table>
                            
                        </h4>
                    </div>  
                    
                      <?php
                          $tgl = date('Y');
                      ?>
                    
                      <div class="card-body">
                    @if(Auth::user()->role =="operator")
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/store_etor">
                    @endif
                    @if(Auth::user()->role =="admin")
                      <form class="form-horizontal" id="input-form" method="post" action="/admin/store_etor">
                    @endif    
                      @csrf 
                        <table class="table table-bordered" width="100%">
                               
                        <div class="table-responsive">
                          <div class="form-group">
                            <div class="col-sm-12">
                            <tr>
                            <td colspan="7"> <button type="button" class="btn btn-warning" onclick="getDatax('','',{{ $tgl }},'','','','','','{{ $ikk->id }}')" data-toggle="modal" data-target=".bd-example1-modal-lg">Tambah IKK</button>
                    </td>
                            </tr>  
                            <tr>
                            @foreach($tbikupilar2 as $ikk3)
                      
                      @if($ikk3->id_kegiatan == $ikk->id)
                    
                                  <td><b>IKK</b></td>
                                  <td colspan="5">{{ $ikk3->ikk }}</td>
                                  <td rowspan="1">Action</td>
                              </tr>  
                              <tr>
                                  <td width="10%"><b>Tahun</b></td>
                                  <td><?php 
                                        $data = date('Y');
                                        echo $data;
                                  ?></td>
                                  <td><?php 
                                        echo $data+1;
                                  ?></td>
                                  <td><?php 
                                        echo $data+2;
                                  ?></td>
                                  <td><?php 
                                        echo $data+3;
                                  ?></td>
                                  <td><?php 
                                        echo $data+4;
                                  ?></td>
                                  <td rowspan="2">
                                  @if(Auth::user()->role =="operator")  
                                  <button type="button" class="btn btn-primary" onclick="getDataRow({{ $ikk3->id }},'{{ $ikk3->ikk }}','{{ $ikk3->tahun_awal }}','{{ $ikk3->target1 }}','{{ $ikk3->target2 }}','{{ $ikk3->target3 }}','{{ $ikk3->target4 }}','{{ $ikk3->target5 }}','{{ $ikk3->id_kegiatan }}')" data-toggle="modal" data-target=".bd-example2-modal-lg">Edit</button>
  | <a href="/operator/delete_ikk2/{{ $ikk3->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
                                @endif
                                @if(Auth::user()->role =="admin")  
                                  <button type="button" class="btn btn-primary" onclick="getDataRow({{ $ikk3->id }},'{{ $ikk3->ikk }}','{{ $ikk3->tahun_awal }}','{{ $ikk3->target1 }}','{{ $ikk3->target2 }}','{{ $ikk3->target3 }}','{{ $ikk3->target4 }}','{{ $ikk3->target5 }}','{{ $ikk3->id_kegiatan }}')" data-toggle="modal" data-target=".bd-example2-modal-lg">Edit</button>
  | <a href="/admin/delete_ikk2/{{ $ikk3->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
                                @endif
                                </tr>
                                <input type="hidden" name="tahun1" value="{{ $ikk3->tahun_awal }}">
                                <input type="hidden" name="tahun2" value="{{ $ikk3->tahun_awal+1 }}">
                                <input type="hidden" name="tahun3" value="{{ $ikk3->tahun_awal+2 }}">
                                <input type="hidden" name="tahun4" value="{{ $ikk3->tahun_awal+3 }}">
                                <input type="hidden" name="tahun5" value="{{ $ikk3->tahun_awal+4 }}">
                                <tr width="10%">
                                  <td><b>Baseline/Capaian/Target</b></td>
                                  <td>{{ $ikk3->target1 }}</td>
                                  <td>{{ $ikk3->target2 }}</td>
                                  <td>{{ $ikk3->target3 }}</td>
                                  <td>{{ $ikk3->target4 }}</td>
                                  <td>{{ $ikk3->target5 }}</td>
                                </tr>
                                
                                @endif
                      @endforeach
                              </table>
                            </div>
                          </div>
                          
                          
                          
                        </form>

                  
                    </div>
                        <?php
                            $i++;
                        ?>
                @endforeach  
                  </div>
                  
                  </div>
                  
                </div>
                </div>
 @endsection


  

<script>
function ganti1() {
 // $('.form-group').uniqueClone();

  $(".bagian1").clone().appendTo(".form1");
}

function ganti2() {
 // $('.form-group').uniqueClone();
  $(".bagian2").clone().appendTo(".form2");
  
}


function getData(id, nama)
{
    alert(id);
   
    document.getElementById("idx2").value = id;
    document.getElementById("nama_kegiatan2").value = nama; 
      
}

function getDatax(id,ikk,tahun_awal,target1,target2,target3,target4,target5,nama_kegiatan)
{

   //alert(nama_kegiatan);
    document.getElementById("id2").value = id;
    document.getElementById("ikk").value = ikk;
    document.getElementById("tahun_awal11").value = tahun_awal;
    document.getElementById("target111").value = target1;
    document.getElementById("target211").value = target2;
    document.getElementById("target311").value = target3;
    document.getElementById("target411").value = target4;
    document.getElementById("target511").value = target5;

    document.getElementById("tahun_awal11").value = tahun_awal;
    document.getElementById("tahun211").value = tahun_awal+1;
    document.getElementById("tahun311").value = tahun_awal+2;
    document.getElementById("tahun411").value = tahun_awal+3;
    document.getElementById("tahun511").value = tahun_awal+4;
    document.getElementById("nama_kegiatan21").value = nama_kegiatan;
}



function getDataRow(id,ikk,tahun_awal,target1,target2,target3,target4,target5,nama_kegiatan)
{

   //alert(nama_kegiatan);
    document.getElementById("id2").value = id;
    document.getElementById("ikk").value = ikk;
    document.getElementById("tahun_awal113").value = tahun_awal;
    document.getElementById("target113").value = target1;
    document.getElementById("target213").value = target2;
    document.getElementById("target313").value = target3;
    document.getElementById("target413").value = target4;
    document.getElementById("target513").value = target5;

    document.getElementById("tahun_awal113").value = tahun_awal;
    document.getElementById("tahun213").value = tahun_awal+1;
    document.getElementById("tahun313").value = tahun_awal+2;
    document.getElementById("tahun413").value = tahun_awal+3;
    document.getElementById("tahun513").value = tahun_awal+4;
    document.getElementById("nama_kegiatan212").value = nama_kegiatan;


}

function tes()
{
  alert("tes");
}

</script>





