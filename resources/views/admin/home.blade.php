@extends('templateadmin')
@section('judul','Dashboard')
@section('menu1','active')
@section('menu2','')
@section('konten')
<div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-user"></i></div>
                    <div class="title"><span>Admin</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>1</strong></div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow"><i class="icon-user"></i></div>
                    <div class="title"><span>Manajemen</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-yellow"></div>
                      </div>
                    </div>
                    <div class="number"><strong>5</strong></div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Operator</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>6</strong></div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                </div>
@endsection
