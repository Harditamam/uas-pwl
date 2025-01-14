@extends('template')



@section('menu2','active')

@section('judul','Edit Akun Admin')
@section('konten')
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
                      <form class="form-horizontal" method="post" action="/admin/update_akun_admin/{{ $users->id }}">
                      @csrf
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama" placeholder="Nama" autocomplete="off" class="form-control @error('nama') is-invalid @enderror" value="{{ $users->name }}">
                            @error('nama')
                          <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                          </div>
                          
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ $users->email }}">
                            @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                          </div>
                          
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
 @endsection
