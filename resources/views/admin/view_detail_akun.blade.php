@extends('template')

@section('menu1','')
@section('menu2','active')
@section('menu3','')
@section('judul','Akun')
@section('konten')
<div class="col-lg-12">

<?php
    if($users->role=="siswa")
    {
?>

                    <!-- 1 -->
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
                            Detail Akun Siswa
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$users->name}}</td>
                        </tr>
                        <tr>
                            <td width="15%">NIS</td>
                            <td>:</td>
                            <td>{{$users->nis}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Kelas</td>
                            <td>:</td>
                            <td>{{$users->kelas}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$users->email}}</td>
                        </tr>
                        <tr>
                            <td width="15%">No. Handphone</td>
                            <td>:</td>
                            <td>{{$users->phone}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Hak Akses</td>
                            <td>:</td>
                            <td>{{$users->role}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><div class="pull-right"><a href="/admin/edit_akun_operator/{{$users->id}}"> <button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></div></td>
                        </tr>
                        </table>
                      </div>
                    </div>
                  </div>

<?php
  }

?>

<?php
    if($users->role=="admin")
    {
?>



                  <!-- 2 -->
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
                            Detail Akun Admin
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$users->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$users->email}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><div class="pull-right"><a href="/admin/edit_akun_admin/{{$users->id}}"> <button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></div></td>
                        </tr>
                        </table>
                      </div>
                    </div>

                    
                  </div>

                  <?php
  }

?>

<?php
    if($users->role=="manager")
    {
?>

                    <!-- 3 -->
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
                            Detail Akun Pimpinan Fakultas
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$users->name}}</td>
                        </tr>
                        <tr>
                            <td width="15%">NIP</td>
                            <td>:</td>
                            <td>{{$users->nip}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Jabatan</td>
                            <td>:</td>
                            <td>{{$users->jabatan}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$users->email}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><div class="pull-right"><a href="/admin/edit_akun_fakultas/{{$users->id}}"> <button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></div></td>
                        </tr>
                        
                        </table>
                      </div>
                    </div>

                    
                  </div>


                  <?php
  }

?>

<?php
    if($users->role=="verifikator")
    {
?>
                    <!-- 4 -->
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
                            Detail Akun Tim Verifikasi
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$users->name}}</td>
                        </tr>
                        <tr>
                            <td width="15%">NIP</td>
                            <td>:</td>
                            <td>{{$users->nip}}</td>
                        </tr>
                        
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$users->email}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><div class="pull-right"><a href="/admin/edit_akun_verifikator/{{$users->id}}"> <button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></div></td>
                        </tr>
                        </table>
                      </div>
                    </div>

                    
                  </div>  
                  <?php
  }

?>





                </div>

                

              </div>

              
              
                </div>
              
              </div>


              
            </div>


            

@endsection            