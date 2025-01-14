@extends('template')
@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','Data Input Output')
@section('konten')

<?php
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  
  use Illuminate\Support\Facades\Auth;
  
  use App\Models\User;
  use App\Models\kodemakuraian;
  use App\Models\jadwal;
  use App\Models\tbl_etor;
  use App\Models\table_kegiatan;
  use App\Models\detailbelanja;
  use App\Models\table_ikk;
  use App\Models\io;
  use App\Models\iku;
  use App\Models\program1;
  use App\Models\program2;
  use App\Models\program3;
  use App\Models\tb_uraian;
  
  use App\Models\tbikk;
  use App\Models\tbikkuraian;
  use App\Models\tbikupilar;
  
?>
<!-- Large modal -->
<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">


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
        <form action="admin/update_ikk2" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Detail Belanja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->role == "operator")
        <form action="/operator/store_detailbelanja" method="post">
      @endif
      @if(Auth::user()->role == "admin")
        <form action="/admin/store_detailbelanja" method="post">
      @endif
        @csrf 
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="id_etor" id="id_etor" value="{{ $id_etor }}"> 
        <input type="hidden" name="id_io3" id="id_io3" class="form-control">
            
        <div class="form-group">
            <label for="message-text" class="col-form-label">MAK</label>
            <select name="mak" id="mak" onchange="updatekategori()" class="form-control">
                <option value="">Pilih</option>
                @foreach($list_kategori as $li)
                <option value="{{ $li->kode_mak }}">{{ $li->kode_mak }}</option>
                @endforeach
            </select>
                     
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Uraian</label>
            <select name="uraian" id="uraian" class="form-control" disabled >
                <option value="">Pilih</option>
                @foreach($list_kategori as $li)
                <option value="{{ $li->kode_mak }}">{{ $li->kode_mak }}</option>
                @endforeach
            </select>
            <input type="hidden" name="id_io" id="id_io" class="form-control">          
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Vol</label>
            <input type="number" value="0" name="vol" id="vol" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Satuan</label>
            <input type="text" value="-" name="satuan" id="satuan" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Satuan</label>
            <input type="number" value="0" name="harga_satuan" id="harga_satuan" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Jurusan</label>
            <input type="number" value="0" name="jurusan" id="jurusan" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fakultas</label>
            <input type="number" value="0" name="fakultas" id="fakultas" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Universitas</label>
            <input type="number" value="0" name="universitas" id="universitas" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Hibah</label>
            <input type="number" value="0" name="hibah" id="hibah" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Lainnya</label>
            <input type="number" value="0" name="lainnya" id="lainnya" value="" class="form-control">         
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Input Output</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->role == "operator")
        <form action="/operator/update_io" method="post">
      @endif
      @if(Auth::user()->role == "admin")
        <form action="/admin/update_io" method="post">
      @endif
        @csrf 
        <input type="hidden" name="id" id="idx2">
        <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
        <div class="form-group">
            <label for="message-text" class="col-form-label">Input</label>
            <input type="text" value="-" name="input" id="nama_kegiatan2" class="form-control">          
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Output</label>
            <input type="text" value="-" name="output" id="nama_kegiatan22" class="form-control">          
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

<div class="modal fade bd-example12-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Detail Belanja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->role == "operator")
        <form action="/operator/update_detailbelanja" method="post">
      @endif
      @if(Auth::user()->role == "admin")
        <form action="/admin/update_detailbelanja" method="post">
      @endif
        @csrf 
        <div class="form-group">
<!--    
        <input type="text" name="mak3" id="mak3" class="form-control">      -->
        <input type="hidden" name="id" id="id5" class="form-control">
        <input type="hidden" name="id_io5" id="id_io5" class="form-control">
        <input type="hidden" name="id_etor" id="id_etor" value="{{ $id_etor }}" class="form-control"> 
       </div>
        
        <div class="form-group">
            <label for="message-text" class="col-form-label">MAK</label>
            <select name="mak" id="mak2" onchange="updatekategori2()" class="form-control">
                <option value="">Pilih</option>
                @foreach($list_kategori as $li)
                <option value="{{ $li->kode_mak }}">{{ $li->kode_mak }}</option>
                @endforeach
            </select>     
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Uraian</label>
            <select name="uraian" id="uraian2" class="form-control" disabled >
                <option value="">Pilih</option>
                @foreach($list_kategori as $li)
                <option value="{{ $li->kode_mak }}">{{ $li->kode_mak }}</option>
                @endforeach
            </select>
            <input type="hidden" name="id_io" id="id_io2" class="form-control">          
          </div>
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Uraian</label>
            <select name="uraian" id="uraian2" class="form-control" disabled >
                <option value="">Pilih</option>
                @foreach($list_kategori as $li)
                <option value="{{ $li->kode_mak }}">{{ $li->kode_mak }}</option>
                @endforeach
            </select>       
          </div> -->
          <div class="form-group">
            <label for="message-text" class="col-form-label">Vol</label>
            <input type="number" value="0" name="vol" id="vol3" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Satuan</label>
            <input type="text" name="satuan" id="satuan2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Satuan</label>
            <input type="number" value="0" name="harga_satuan" id="harga_satuan2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Jurusan</label>
            <input type="number" value="0" name="jurusan" id="jurusan2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fakultas</label>
            <input type="number" value="0" name="fakultas" id="fakultas2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Universitas</label>
            <input type="number" name="universitas" id="universitas2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Hibah</label>
            <input type="number" name="hibah" id="hibah2" value="" class="form-control">         
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Lainnya</label>
            <input type="number" name="lainnya" id="lainnya2" value="" class="form-control">         
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
                      <h3 class="h4">Form Input Output  ( No. TOR : {{ $no_etor }})</h3>
                    </div>
                    <div class="card-body">
                    @if(Auth::user()->role == "operator")
                      <form class="form-horizontal" id="input-form" method="post" action="/operator/store_io">
                    @endif 
                    @if(Auth::user()->role == "admin")
                      <form class="form-horizontal" id="input-form" method="post" action="/admin/store_io">
                    @endif 
                      @csrf  
                      <input type="hidden" name="id_etor" id="id2_etor" value="{{ $id_etor }}"> 
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Input</label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control @error('input') is-invalid @enderror" name="input" id="input">
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="col-sm-3 form-control-label">Output</label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control @error('output') is-invalid @enderror" name="output" id="output">
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
                    @foreach($io as $io)
                    <hr>
                    <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="table-responsive">
                    <div class="card-body">
                      <div class="form-group">
                            <div class="col-sm-12">
                      <table table class="table table-bordered" id=".example" width="100%">
                      <tr>
                      @if(Auth::user()->role == "operator")
                        <th colspan="3">Data {{ $i }}   <div class ="pull-right"><a href="/operator/jadwal1/{{ $id_etor }}/{{ $io->id }}"><button class="btn btn-success" type="button">Jadwal</button></a></align></th>
                      @endif
                      @if(Auth::user()->role == "admin")
                        <th colspan="3">Data {{ $i }}   <div class ="pull-right"><a href="/admin/jadwal1/{{ $id_etor }}/{{ $io->id }}"><button class="btn btn-success" type="button">Jadwal</button></a></align></th>
                      @endif
                      </tr>
                      <tr>
                          <th>Input {{ $i }}</th>
                          <th>Output {{ $i }}</th>
                          <th>Action</th>
</tr>
                      <tr>
                        <td> {{ $io->input }} </td>
                        <td> {{ $io->output }}  </td>
                        <td>
                        @if(Auth::user()->role == "operator")  
                        <button type="button" class="btn btn-primary" onclick="getData({{ $io->id }}, '{{ $io->input }}', '{{ $io->output }}')" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
| <a href="/operator/delete_io/{{ $io->id }}"><button class="btn btn-danger" type="button">Delete</button></a></h3>
@endif
@if(Auth::user()->role == "admin")  
                        <button type="button" class="btn btn-primary" onclick="getData({{ $io->id }}, '{{ $io->input }}', '{{ $io->output }}')" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
| <a href="/admin/delete_io/{{ $io->id }}"><button class="btn btn-danger" type="button">Delete</button></a></h3>
@endif
</td>
</tr>
</table>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                      <?php
                          $tgl = date('Y');
                      ?>
                    
                      
                      
                      <div class="card-body">
                      <div class="table-responsive">    
                      <div class="form-group">
                            <div class="col-sm-12">
                              <div class="table responsive">
                              <table class="table table-bordered" id=".example" width="100%">
                              <thead>
                              <tr>
                              <th colspan="12"> <button type="button" class="btn btn-warning" onclick="getDatax('','{{ $io->id }}')" data-toggle="modal" data-target=".bd-example1-modal-lg">Tambah Detail Belanja</button>
                   </th>
                          </tr>
                              <tr>
                                  <th><b>MAK</b></th>
                                  <th><b>Uraian</b></th>
                                  <th><b>Vol</b></th>
                                  <th><b>Satuan</b></th>
                                  <th><b>Harga Satuan</b></th>
                                  <th><b>Sub Total</b></th>
                                  <th><b>Jurusan</b></th>
                                  <th><b>Fakultas</b></th>
                                  <th><b>Universitas</b></th>
                                  <th><b>Hibah</b></th>
                                  <th><b>Lainnya</b></th>
                                  <th><b>Action</b></th>
                              </tr>  
                          </thead>
                          <tbody>
                   <?php
                      $h_sub_total=0;
                      $h_universitas=0;
                      $h_jurusan=0;
                      $h_fakultas=0;
                      $h_hibah=0;
                      $h_lainnya=0;
                   ?>
                     @foreach($detailbelanja as $db)
                                @if($db->id_io == $io->id)
                                
                                <?php
                                      $h_sub_total += $db->harga_satuan*$db->vol;
                                      $h_universitas += $db->universitas;
                                      $h_fakultas += $db->fakultas;
                                      $h_jurusan += $db->jurusan;
                                      $h_hibah += $db->hibah;
                                      $h_lainnya += $db->lainnya;

                                      $h_sub = $db->harga_satuan*$db->vol;

?>
                                <tr>

                                
                                <td>{{ $db->mak }}</td>
                                <td><?php
                                     $kodemak1 = kodemakuraian::where('id',$db->uraian)->get();
                                     foreach($kodemak1 as $king)
                                     {
                                       echo $king->rincian;
                                     }
                                ?></td>
                                <td>{{ $db->vol }}</td>
                                <td>{{ $db->satuan }}</td>
                                <td><?php echo "Rp.".number_format($db->harga_satuan,2,',','.'); ?></td>

                                <td><?php echo "Rp.".number_format($h_sub,2,',','.'); ?></td>
                                <td><?php echo "Rp.".number_format($db->jurusan,2,',','.'); ?></td>
                                <td><?php echo "Rp.".number_format($db->fakultas,2,',','.'); ?></td>
                                <td><?php echo "Rp.".number_format($db->universitas,2,',','.'); ?></td>
                                <td><?php echo "Rp.".number_format($db->hibah,2,',','.'); ?></td>
                                <td><?php echo "Rp.".number_format($db->lainnya,2,',','.'); ?></td>
                                <td>
                                @if(Auth::user()->role == "operator")  
                                <button type="button" class="btn btn-primary" onclick="getDataxx({{ $db->id }}, {{ $db->mak }},{{ $db->uraian }},{{ $db->vol }},{{ $db->satuan }},{{ $db->harga_satuan }},{{ $db->jurusan }},{{ $db->fakultas }},{{ $db->universitas }},{{ $db->hibah }},{{ $db->lainnya }},{{ $io->id }})" data-toggle="modal" data-target=".bd-example12-modal-lg">Edit</button>
| <a href="/operator/delete_detailbelanja/{{ $db->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
                               
@endif

@if(Auth::user()->role == "admin")  
                                <button type="button" class="btn btn-primary" onclick="getDataxx('{{ $db->id }}', '{{ $db->mak }}','{{ $db->uraian }}','{{ $db->vol }}','{{ $db->satuan }}','{{ $db->harga_satuan }}','{{ $db->jurusan }}','{{ $db->fakultas }}','{{ $db->universitas }}','{{ $db->hibah }}','{{ $db->lainnya }}','{{ $io->id }}')" data-toggle="modal" data-target=".bd-example12-modal-lg">Edit</button>
| <a href="/admin/delete_detailbelanja/{{ $db->id }}"><button class="btn btn-danger" type="button">Delete</button></a></td>
                               
@endif
</tr>
                                
                                @endif
                      @endforeach
                      <tr>
                                  <td colspan="5"><center>Subtotal</center></td>
                                  <td><?php echo "Rp.".number_format($h_sub_total,2,',','.'); ?></td>
                                  <td><?php echo "Rp.".number_format($h_jurusan,2,',','.'); ?></td>
                                  <td><?php echo "Rp.".number_format($h_fakultas,2,',','.'); ?></td>
                                  <td><?php echo "Rp.".number_format($h_universitas,2,',','.'); ?></td>
                                  <td><?php echo "Rp.".number_format($h_hibah,2,',','.'); ?></td>
                                  <td><?php echo "Rp.".number_format($h_lainnya,2,',','.'); ?></td>
                                </tr>
</tbody>
                                
                              
                              </table>
                              </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          
                          
                      
                        
                    
                    </div>
                    <?php
                        $i++;
                    ?>
                @endforeach
                  </div>
                  
                  </div>
                  
                </div>
 @endsection

<script>
  

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



function updatekategori()
{

  <?php
      if(Auth::user()->role=="operator")
      {
  ?>

    let kategori = $("#mak").val();
    $("#uraian").children().remove();
    $("#uraian").val('');
    $("#uraian").append('<option value="">Pilih</option>');
    $("#uraian").prop('disabled',true);
    
    if(kategori!="" && kategori!=null)
    {
      $.ajax({
        url:"{{url('')}}/operator/listSubKategori/"+kategori,
        success:function(res)
        {
          
          $("#uraian").prop('disabled',false);
          let tampilan_option = '';
          $.each(res, function(index,data){
            tampilan_option += `<option value="${data.id}">${data.rincian}</option>`
          })
          $("#uraian").append(tampilan_option);
         // console.log(res);
        }
    });
    }


    <?php   
      }
      else
      {
        ?>
          let kategori = $("#mak").val();
    $("#uraian").children().remove();
    $("#uraian").val('');
    $("#uraian").append('<option value="">Pilih</option>');
    $("#uraian").prop('disabled',true);
    
    if(kategori!="" && kategori!=null)
    {
      $.ajax({
        url:"{{url('')}}/admin/listSubKategori/"+kategori,
        success:function(res)
        {
          
          $("#uraian").prop('disabled',false);
          let tampilan_option = '';
          $.each(res, function(index,data){
            tampilan_option += `<option value="${data.id}">${data.rincian}</option>`
          })
          $("#uraian").append(tampilan_option);
         // console.log(res);
        }
    });
    }
        <?php
      }
    ?>
    
}


function updatekategori2()
{

  <?php
      if(Auth::user()->role=="operator")
      {
  ?>
  let kategori = $("#mak2").val();
    $("#uraian2").children().remove();
    $("#uraian2").val('');
    $("#uraian2").append('<option value="">Pilih</option>');
    $("#uraian2").prop('disabled',true);
    
    if(kategori!="" && kategori!=null)
    {
      $.ajax({
        url:"{{url('')}}/operator/listSubKategori2/"+kategori,
        success:function(res)
        {
          
          $("#uraian2").prop('disabled',false);
          let tampilan_option = '';
          $.each(res, function(index,data){
            tampilan_option += `<option value="${data.id}">${data.rincian}</option>`
          })
          $("#uraian2").append(tampilan_option);
         // console.log(res);
        }
    });
    }

    <?php
      }
      else
      {
        ?>
          let kategori = $("#mak2").val();
    $("#uraian2").children().remove();
    $("#uraian2").val('');
    $("#uraian2").append('<option value="">Pilih</option>');
    $("#uraian2").prop('disabled',true);
    
    if(kategori!="" && kategori!=null)
    {
      $.ajax({
        url:"{{url('')}}/admin/listSubKategori2/"+kategori,
        success:function(res)
        {
          
          $("#uraian2").prop('disabled',false);
          let tampilan_option = '';
          $.each(res, function(index,data){
            tampilan_option += `<option value="${data.id}">${data.rincian}</option>`
          })
          $("#uraian2").append(tampilan_option);
         // console.log(res);
        }
    });
    }
        <?php
      }
    ?>
}

function updateItem()
{

}

function getData(id, nama, nama1)
{
    //alert(id);
    document.getElementById("idx2").value = id;
    document.getElementById("nama_kegiatan2").value = nama;
    document.getElementById("nama_kegiatan22").value = nama1;    
}

function getDatax(id,id_io)
{

   //alert(id_io);
    document.getElementById("id").value = id;
    document.getElementById("id_io3").value = id_io;
}


function getDataxx(id,mak,uraian,vol,satuan,harga_satuan,jurusan,fakultas,universitas,hibah,lainnya,id_io)
{
    alert(id_io);
     document.getElementById("id5").value = id;

    // // document.getElementById("uraian2").selectedIndex[0].value = uraian;
    // // document.getElementById("uraian2").selectedIndex[0].text = uraian;
    
     document.getElementById("vol3").value = vol;
     document.getElementById("satuan2").value = satuan;
     document.getElementById("harga_satuan2").value = harga_satuan;
     document.getElementById("jurusan2").value = jurusan;
     document.getElementById("fakultas2").value = fakultas;
     document.getElementById("universitas2").value = universitas;
     document.getElementById("hibah2").value = hibah;
     document.getElementById("lainnya2").value = lainnya;
     document.getElementById("id_io5").value = id_io;
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





