@extends('template')
@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','Data Iku')
@section('konten')

<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Iku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(Auth::user()->role=="operator")
        <form action="/operator/update_iku" method="post">
        @endif
        @if(Auth::user()->role=="admin")
        <form action="/admin/update_iku" method="post">
        @endif
        @csrf 
        <input type="hidden" name="id" id="id2">
        <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
        <div class="form-group">
            <label for="message-text" class="col-form-label">IKU</label>
            <select name="iku" id="iku2" class="form-control">
                            
                            @foreach($tbikupilar1 as $tbikupilar1)
                            <option value="{{ $tbikupilar1->kode_iku }}">IKU {{ $tbikupilar1->kode_iku }}</option>
                            @endforeach
                          </select>          
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
                              
                              <input type="hidden" name="tahun_awal" id="tahun_awal11" value="<?php echo $data; ?>"></tr>
                              <input type="hidden" name="tahun1" id="tahun11">
                              <input type="hidden" name="tahun2" id="tahun21">
                              <input type="hidden" name="tahun3" id="tahun31">
                              <input type="hidden" name="tahun4" id="tahun41">
                              <input type="hidden" name="tahun5" id="tahun51">
                              <tr width="10%">
                                <td><b>Baseline/Capaian/Target</b></td>
                                <td><input type="text" name="target1" id="target11" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target2" id="target21" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target3" id="target31" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target4" id="target41" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target5" id="target51" placeholder="Target" class="form-control"></td>
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

<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
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
                      <h3 class="h4">Form IKU  ( No. TOR : {{ $no_etor }})</h3>
                    </div>
                    <div class="card-body">
                    @if(Auth::user()->role=="operator")
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/store_iku">
                    @endif
                    @if(Auth::user()->role=="admin")
                      <form class="form-horizontal" id="input-form" method="post" action="/admin/store_iku">
                    @endif  
                      @csrf  
                      <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">IKU</label>
                          <div class="col-sm-9">
                          <select name="iku" id="iku" class="form-control @error('iku') is-invalid @enderror">
                            
                              <option value="">--Pilih--</option>
                              @foreach($tbikupilar as $tbikupilar)
                              <option value="{{ $tbikupilar->kode_iku }}">IKU {{ $tbikupilar->kode_iku }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-12">
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
                              
                              <input type="hidden" name="tahun_awal" value="<?php echo $data; ?>"></tr>
                              <input type="hidden" name="tahun1" value="<?php echo $data; ?>">
                              <input type="hidden" name="tahun2" value="<?php echo $data+1; ?>">
                              <input type="hidden" name="tahun3" value="<?php echo $data+2; ?>">
                              <input type="hidden" name="tahun4" value="<?php echo $data+3; ?>">
                              <input type="hidden" name="tahun5" value="<?php echo $data+4; ?>">
                              <tr width="10%">
                                <td><b>Baseline/Capaian/Target</b></td>
                                <td><input type="text" name="target1" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target2" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target3" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target4" placeholder="Target" class="form-control"></td>
                                <td><input type="text" name="target5" placeholder="Target" class="form-control"></td>
                              </tr>
                            </table>

                          </div>
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
                    @foreach($iku as $iku)
                    <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data {{ "IKU ".$iku->keterangan }}</h3>
                    </div>
                    <div class="card-body">
                    
                      
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/store_etor">
                        @csrf  
                          <div class="form-group">
                            <div class="col-sm-12">
                              <table class="table table-bordered" width="100%">
                              <tr>
                                  <td><b>IKU</b></td>
                                  <td colspan="5">{{ "IKU ".$iku->iku }}</td>
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
                                  @if(Auth::user()->role=="operator")  
                                  <button type="button" class="btn btn-primary" onclick="getData({{ $iku->id }},{{ $iku->iku }},{{ $iku->tahun_awal }},{{ $iku->target1 }},{{ $iku->target2 }},{{ $iku->target3 }},{{ $iku->target4 }},{{ $iku->target5 }})" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
  | <a href="/operator/delete_iku/{{ $iku->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
    @endif
    
    @if(Auth::user()->role=="admin")  
                                  <button type="button" class="btn btn-primary" onclick="getData({{ $iku->id }},{{ $iku->iku }},{{ $iku->tahun_awal }},{{ $iku->target1 }},{{ $iku->target2 }},{{ $iku->target3 }},{{ $iku->target4 }},{{ $iku->target5 }})" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
  | <a href="/admin/delete_iku/{{ $iku->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
    @endif
  </tr>
                                <input type="hidden" name="tahun1" value="{{ $iku->tahun_awal }}">
                                <input type="hidden" name="tahun2" value="{{ $iku->tahun_awal+1 }}">
                                <input type="hidden" name="tahun3" value="{{ $iku->tahun_awal+2 }}">
                                <input type="hidden" name="tahun4" value="{{ $iku->tahun_awal+3 }}">
                                <input type="hidden" name="tahun5" value="{{ $iku->tahun_awal+4 }}">
                                <tr width="10%">
                                  <td><b>Baseline/Capaian/Target</b></td>
                                  <td>{{ $iku->target1 }}</td>
                                  <td>{{ $iku->target2 }}</td>
                                  <td>{{ $iku->target3 }}</td>
                                  <td>{{ $iku->target4 }}</td>
                                  <td>{{ $iku->target5 }}</td>
                                </tr>
                              </table>

                            </div>
                          </div>
                          </div>
                          
                          
                          
                        </form>
                      
                    </div>
                        
                @endforeach  
                  </div>
                  
                  </div>
                  
                </div>
 @endsection

<script>
  
function ganti() {
  

  <?php
      if(Auth::user()->role == "operator")
      {

      

?>
   // document.getElementById('no_tor').value += document.getElementById('nama_program').value;
    let _url = '/operator/tes/'+ document.getElementById('nama_program').value;
              $.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                      console.log(response['nama']);

                      //alert(response['nama']);
                      datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                      document.getElementById('no_tor').value = datavalid;
                      document.getElementById('no_tor_hidden').value = datavalid;

                    //  alert(datavalid);
                    }
                });

                <?php

        }
?>

<?php
      if(Auth::user()->role == "admin")
      {

      

?>
   // document.getElementById('no_tor').value += document.getElementById('nama_program').value;
    let _url = '/admin/tes/'+ document.getElementById('nama_program').value;
              $.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                      console.log(response['nama']);

                      //alert(response['nama']);
                      datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                      document.getElementById('no_tor').value = datavalid;
                      document.getElementById('no_tor_hidden').value = datavalid;

                    //  alert(datavalid);
                    }
                });

                <?php

        }
?>

}
/*
function ganti1() {
 // $('.form-group').uniqueClone();

  $(".bagian1").clone().appendTo(".form1");
}

function ganti2() {
 // $('.form-group').uniqueClone();
  $(".bagian2").clone().appendTo(".form2");
  
}
*/

function getData(id,iku,tahun_awal,target1,target2,target3,target4,target5)
{
    //alert($id);
    document.getElementById("id2").value = id;
    document.getElementById("iku2").value = iku;
    document.getElementById("tahun_awal11").value = tahun_awal;
    document.getElementById("target11").value = target1;
    document.getElementById("target21").value = target2;
    document.getElementById("target31").value = target3;
    document.getElementById("target41").value = target4;
    document.getElementById("target51").value = target5;

    document.getElementById("tahun11").value = $tahun_awal;
    document.getElementById("tahun21").value = $tahun_awal+1;
    document.getElementById("tahun31").value = $tahun_awal+2;
    document.getElementById("tahun41").value = $tahun_awal+3;
    document.getElementById("tahun51").value = $tahun_awal+4;
    
}

</script>





