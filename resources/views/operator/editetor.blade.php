@extends('template')
@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','Edit  TOR')
@section('konten')

<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
<body onload="myFunction()">
<div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form</h3>
                    </div>
                    <div class="card-body">
                    @if( Auth::user()->role == "operator")
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/update_etor/{{ $etors->id }}">
                      @endif
                      @if( Auth::user()->role == "admin")
                      <form class="form-horizontal" id="input-form" method="post" action="/admin/update_etor/{{ $etors->id }}">
                      @endif

                      @csrf  
                      <div class="form-group">
                          <label class="col-sm-3 form-control-label">Unit Kerja</label>
                          <div class="col-sm-9">
                            <input type="text" name="unit_kerja1" value="{{ $unit_kerja }}" disabled placeholder="Unit Kerja" class="form-control">
                            <input type="hidden" id="unit_kerja" name="unit_kerja" value="{{ $unit_kerja }}">
                            <input type="hidden" id="id" name="id" value="{{ $etors->id }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">No. TOR</label>
                          <div class="col-sm-9">
                            <input type="text" disabled name="no_tor" id="no_tor" value="{{ $no_tor }}" placeholder="No. TOR" class="form-control myAutoSelect1">
                            <input type="hidden" id="no_tor_hidden" name="no_tor_hidden" value="{{ $no_tor }}">
                            <input type="hidden" id="no_tor_hidden1" name="no_tor_hidden1" value="{{ $no_tor }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Nama Program</label>
                          <div class="col-sm-9">
                            <select name="nama_program" onchange="ganti()" id="nama_program1" class="form-control select2 @error('nama_program') is-invalid @enderror">
                            @foreach($programs3 as $programs3)
                              <option value="{{ $tor_temp }}" selected>{{ $programs3->judul3 }}</option>
                              @endforeach  
                              @foreach($program3 as $program3)
                              <option value="{{ $program3->id_program3 }}">{{ $program3->judul3 }}</option>
                              @endforeach
                            </select>
                            @error('nama_program')
                          <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                          </div>

                          <div class="form-group">
                          <label class="col-sm-3 form-control-label">Nama Kegiatan</label>
                          <div class="col-sm-9">
                            <select name="nama_program2" id="nama_program2" onchange="ganti2()" class="form-control select2 @error('nama_program') is-invalid @enderror">
                               <option value="" selected>--Pilih--</option>
                            </select>
                            @error('nama_program2')
                          <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                          </div>
                        </div>

                        
                    <!--    <hr>
                        <div class="bagian2">
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">IKU</label>
                          <div class="col-sm-9">
                          <select name="iku" id="iku" class="form-control select2 @error('iku') is-invalid @enderror">
                            
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
                              </tr>
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
                        <div class="form2">
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 form-control-label">
                            <button type="button" onclick="ganti2()" class="btn btn-warning">Create IKU</button>
                          </div>
                        </div>
                        <hr>
                        <div class="bagian1">
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Nama Kegiatan</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">IKK</label>
                          <div class="col-sm-9">
                          <select name="ikk" id="ikk" class="form-control select2 @error('ikk') is-invalid @enderror">
                          
                              <option value="">--Pilih--</option>
                              @foreach($tbikkuraian as $tbikkuraian)
                              <option value="{{ $tbikkuraian->id_ikk_uraian }}">{{ $tbikkuraian->judul_ikk_uraian }}</option>
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
                              </tr>
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
                        <div class="form1">
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3 form-control-label">
                            <button type="button" onclick="ganti1()" class="btn btn-warning">Create IKK</button>
                          </div>
                        </div>

                        <hr>        
                        -->
                        <div class="form-group">
                        <label class="col-sm-3 form-control-label">Latar Belakang</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" value="" name="latar_belakang" id="latar_belakang">{{ $etors->latar_belakang }}</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                        <label class="col-sm-3 form-control-label">Rasional</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" value=" " name="rasional" id="rasional">{{ $etors->rasional }}</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                        <label class="col-sm-3 form-control-label">Tujuan</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" value=" " name="tujuan" id="tujuan">{{ $etors->tujuan }}</textarea>
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
                  </div>
                </div>
 @endsection


 <script>
function myFunction() {

  <?php
        if(Auth::user()->role == "operator")
        {
    ?>
  let _url = '/operator/tes/'+ document.getElementById('nama_program1').value;
  $.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                    //   console.log(response['nama']);
                    //   //alert(response['nama']);
                    //   datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                    //   document.getElementById('no_tor').value = datavalid;
                    //   document.getElementById('no_tor_hidden').value = datavalid;
                    // //  alert(datavalid);
                          var id = response['id'];

                          let _url = '/operator/merkAjax/'+ id;
                          $.ajax
                          ({
                            url: _url,
                            type:'GET',
                            success: function(response2) {
                              datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                              document.getElementById('no_tor').value = datavalid;
                              document.getElementById('no_tor_hidden').value = datavalid;

                              $('#nama_program2').empty();
                              $('#nama_program2').append("<option value=''>--Pilihan--</option>");
                              
                              console.log(response2);

                              $.each(response2, function(index, element){
                                $('#nama_program2').append("<option value='"+element.id_program3+"'>"+element.judul3+"</option>");
                                var kode_id = element.kode_program3;
                              });

                            }
                          });
                    }
                });
                <?php
        }
        else{
            ?>

let _url = '/admin/tes/'+ document.getElementById('nama_program1').value;
$.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                    //   console.log(response['nama']);
                    //   //alert(response['nama']);
                    //   datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                    //   document.getElementById('no_tor').value = datavalid;
                    //   document.getElementById('no_tor_hidden').value = datavalid;
                    // //  alert(datavalid);
                          var id = response['id'];

                          let _url = '/admin/merkAjax/'+ id;
                          $.ajax
                          ({
                            url: _url,
                            type:'GET',
                            success: function(response2) {
                              datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                              document.getElementById('no_tor').value = datavalid;
                              document.getElementById('no_tor_hidden').value = datavalid;

                              $('#nama_program2').empty();
                              $('#nama_program2').append("<option value=''>--Pilihan--</option>");
                              
                              console.log(response2);

                              $.each(response2, function(index, element){
                                $('#nama_program2').append("<option value='"+element.id_program3+"'>"+element.judul3+"</option>");
                                var kode_id = element.kode_program3;
                              });

                            }
                          });
                    }
                });
      <?php
          }
      ?>
}
</script>
<script>
  
function ganti() {
  
   // document.getElementById('no_tor').value += document.getElementById('nama_program').value;

    <?php
        if(Auth::user()->role == "operator")
        {
    ?>

    let _url = '/operator/tes/'+ document.getElementById('nama_program1').value;
              $.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                    //   console.log(response['nama']);
                    //   //alert(response['nama']);
                    //   datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                    //   document.getElementById('no_tor').value = datavalid;
                    //   document.getElementById('no_tor_hidden').value = datavalid;
                    // //  alert(datavalid);
                          var id = response['id'];

                          let _url = '/operator/merkAjax/'+ id;
                          $.ajax
                          ({
                            url: _url,
                            type:'GET',
                            success: function(response2) {
                              datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                              document.getElementById('no_tor').value = datavalid;
                              document.getElementById('no_tor_hidden').value = datavalid;

                              $('#nama_program2').empty();
                              $('#nama_program2').append("<option value=''>--Pilihan--</option>");
                              
                              console.log(response2);

                              $.each(response2, function(index, element){
                                $('#nama_program2').append("<option value='"+element.id_program3+"'>"+element.judul3+"</option>");
                                var kode_id = element.kode_program3;
                              });

                            }
                          });
                    }
                });

         <?php
        }
        else
        {
        ?>
        let _url = '/admin/tes/'+ document.getElementById('nama_program1').value;
              $.ajax({
                    url: _url,
                    type:'GET',
                    success: function(response) {
                      var datavalid="";
                      //console.log(response['id']);

                      var id = response['id'];

                      let _url = '/admin/merkAjax/'+ id;
                      $.ajax
                      ({
                        url: _url,
                        type:'GET',
                        success: function(response2) {
                          datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                          document.getElementById('no_tor').value = datavalid;
                          document.getElementById('no_tor_hidden').value = datavalid;

                          $('#nama_program2').empty();
                          $('#nama_program2').append("<option value=''>--Pilihan--</option>");
                          
                          console.log(response2);

                          $.each(response2, function(index, element){
                            $('#nama_program2').append("<option value='"+element.id_program3+"'>"+element.judul3+"</option>");
                            var kode_id = element.kode_program3;
                          });

                        }
                      });

                      //alert(response['nama']);
                      
                    


                    }
                });

        <?php
        }
        ?>
}

</script>
<script>
function ganti2() {
  
  // document.getElementById('no_tor').value += document.getElementById('nama_program').value;

   <?php
       if(Auth::user()->role == "operator")
       {
   ?>

   let _url = '/operator/tes2/'+ document.getElementById('nama_program2').value;
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
       else
       {
       ?>
       let _url = '/admin/tes2/'+ document.getElementById('nama_program2').value;
             $.ajax({
                   url: _url,
                   type:'GET',
                   success: function(response) {
                     var datavalid="";
                     console.log(response);

                     var id = response['id'];

                     console.log(response['nama']);
                     //alert(response['nama']);
                     datavalid = document.getElementById('no_tor_hidden1').value + response['nama'];
                     document.getElementById('no_tor').value = datavalid;
                     document.getElementById('no_tor_hidden').value = datavalid;
                    //alert(datavalid);
                     
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

</script>

<!-- <script>
              $(document).ready(function () {
                $('#nama_program1').on('change', function () {
                let id = $(this).val();
                $('#nama_program2').empty();
                $('#nama_program2').append(`<option value="0" disabled selected>Processing...</option>`);
                
            });
        });
    });
</script> -->



</body>



