
@extends('template')

@section('menu1','')
@section('menu2','')
@section('menu3','active')
@section('judul','E-TOR')
@section('konten')


<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\Models\User;
use App\Models\catatan;
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

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

?>




<!-- Large modal -->
<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
<div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/verifikator/store_catatan" method="post">
        @csrf 
        <input type="hidden" value="{{ $id_etor }}" name="id_etor">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Catatan</label>
            <textarea name="catatan" id="catatan" class="form-control" height="200"></textarea>          
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Catat</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade bd-example29-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Catatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/verifikator/update_catatan" method="post">
        @csrf 
        <input type="hidden" name="id" id="id2">
        <input type="hidden" value="{{ $id_etor }}" name="id_etor">
        <div class="form-group">
            <label for="message-text" class="col-form-label">Catatan</label>
            <textarea name="catatan" id="catatan2" class="form-control" height="200"></textarea>          
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Catat</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

                    

<font size="5"><b>Data TOR <a href="/operator/editetor/{{$id_etor}}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit TOR</button></a>
   
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

                    @if (session('status3'))
                        <div class="alert alert-warning">
                            {{ session('status3') }}
                        </div>
                    @endif
</b></font>
<hr>

<br>
<br>


@if(Auth::user()->role == "verifikator")
<form action="/verifikator/store_oke" method="post">
        @csrf 
        <input type="hidden" value="{{ $id_etor }}" name="id_etor">
          <div class="modal-footer">
          
        <button type="submit" name="oke" value="1" class="btn btn-warning"><i class="fa fa-times"></i> Revision</button>
        <button type="submit" name="oke" value="2" class="btn btn-success"><i class="fa fa-check"></i> Verified</button>
      </div>
        </form>
@endif
<table border="1" width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
    
        @foreach($etors as $etor)
        <tr>
            <td bgcolor="silver">Unit Kerja</td>
            <td>{{ $etor->unit_kerja }}</td>
        </tr>
        <tr>
            <td bgcolor="silver">No TOR</td>
            <td>{{ $etor->no_tor }}</td>
        </tr>
        <tr>
            <td bgcolor="silver">Nama Program</td>
            <td>
                    <?php
                        $program = program3::where('id_program3', $etor->nama_program)->get();
                        foreach($program as $p)
                        {
                            echo $p->judul3;
                        }
                    ?>

            </td>
        </tr>
        @endforeach
    
</table>
<br>
<b>IKU <a href="/operator/tambah_iku/{{ $id_etor }}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit IKU</button></a></b>
<br><br><hr>
<table border="1" width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
    
        @foreach($ikus as $iku)
        <tr>
            <td width="10%" bgcolor="silver">IKU</td>
            <td colspan="5">{{ $iku->iku }}</td>
        </tr>
        <tr>
            <td width="10%" bgcolor="silver">Tahun </td>
            <td align="center">{{ $iku->tahun_awal }} </td>
            <td align="center">{{ $iku->tahun_awal+1 }}</td>
            <td align="center">{{ $iku->tahun_awal+2 }}</td>
            <td align="center">{{ $iku->tahun_awal+3 }}</td>
            <td align="center">{{ $iku->tahun_awal+4 }}</td>
        </tr>
        <tr>
            <td width="10%" bgcolor="silver">Baseline/Capaian/Target
 </td>
            <td align="center">{{ $iku->target1 }} </td>
            <td align="center">{{ $iku->target2 }}</td>
            <td align="center">{{ $iku->target3 }}</td>
            <td align="center">{{ $iku->target4 }}</td>
            <td align="center">{{ $iku->target5 }}</td>
        </tr>
        @endforeach
    
</table>

<br>
<b>IKK <a href="/operator/tambah_ikk/{{ $id_etor }}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit IKK</button></a></b>
<br><br><hr>
        @foreach($kegiatans as $kegiatan)
        <table border="1" width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">

        <tr>
            <td colspan="8" bgcolor="silver">
            <?php
                        $program1 = table_kegiatan::where('id', $kegiatan->id)->get();
                        foreach($program1 as $p)
                        {
                            echo "Kegiatan ".$p->nama_kegiatan;
                        }
                    ?>
            </td>
        </tr>
        
        </table>

    <?php
            $program3 = table_ikk::where('id_kegiatan', $kegiatan->id)->get();
            foreach($program3 as $p3)
            {
    ?>

    <table border="1" width="100%" cellspacing="0" cellpadding="0" class="table table-bordered">
        
        <tr>
            <td width="20%" bgcolor="silver">IKK</td>
            <td colspan="7">
                <?php 
                    echo $p3->ikk;

                ?>
            </td>
        </tr>
        <tr>
            <td width="10%" bgcolor="silver">Tahun</td>
            <td>
                <?php 
                    echo $p3->tahun_awal;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->tahun_awal;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->tahun_awal+1;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->tahun_awal+2;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->tahun_awal+3;

                ?>
            </td>
            <td colspan="2" align="center">
                <?php 
                    echo $p3->tahun_awal+4;

                ?>
            </td>
        </tr>

        <tr>
            <td width="10%" bgcolor="silver">Baseline/Capaian/Target</td>
            <td align="center">
                <?php 
                    echo $p3->target1;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->target2;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->target3;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->target4;

                ?>
            </td>
            <td align="center">
                <?php 
                    echo $p3->target5;

                ?>
            </td>
            <td colspan="2" align="center">
                <?php 
                    echo $p3->tahun_awal+4;

                ?>
            </td>
        </tr>
        
        </table>
        <?php
                        
            }
        ?>
        <br>
    @endforeach
    
<br>

<b>Input Output <a href="/operator/tambah_io/{{ $id_etor }}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit Input/Output</button></a></b>
<br><br><hr>
<?php
                $i=1;
                ?> 
@foreach($io as $io)
                
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
                <tr>
                    <th bgcolor="silver">Input {{ $i }}</th>
                    <th bgcolor="silver">Output {{ $i }}</th>
</tr>
                <tr>
                  <td> {{ $io->input }} </td>
                  <td> {{ $io->output }}  </td>
                
</tr>
</table>
<br>

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
                          <thead>
                          
                          <tr>
                              <th bgcolor="silver"><b>MAK</b></th>
                              <th bgcolor="silver"><b>Uraian</b></th>
                              <th bgcolor="silver"> <b>Vol</b></th>
                              <th bgcolor="silver"><b>Satuan</b></th>
                              <th bgcolor="silver"><b>Harga Satuan</b></th>
                              <th bgcolor="silver"><b>Sub Total</b></th>
                              <th bgcolor="silver"><b>Jurusan</b></th>
                              <th bgcolor="silver"><b>Fakultas</b></th>
                              <th bgcolor="silver"><b>Universitas</b></th>
                              <th bgcolor="silver"><b>Hibah</b></th>
                              <th bgcolor="silver"><b>Lainnya</b></th>
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

                  $detailbelanja = detailbelanja::where('id_io',$io->id_io   )->get();
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


<?php
    $i++;
?>
<hr>
@endforeach


<br>


<b>Jadwal </b>
<br><br><hr>

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
    <tr>
        <td bgcolor="silver">
            Input
        </td>
        <td bgcolor="silver">
            Bulan
        </td>
    </tr>
    @foreach($jadwals as $j)
          <tr>
              <td>
                  <?php
                        $program1 = io::where('id', $j->id_io)->get();
                        foreach($program1 as $p4)
                        {
                            echo $p4->input. " ";
                        } 
                  ?>
                  <a href="/operator/jadwal1/{{ $id_etor }}/{{ $j->id_io }}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit Input/Output</button></a>
              </td>
              <td>{{ $j->bulan }}</td>
        </tr>
    @endforeach
    
</table>

<br>
<br>
<hr>
<b>Catatan</b>
<hr>

@if(Auth::user()->role == "verifikator")
 <button type="button" class="btn btn-warning" onclick="" data-toggle="modal" data-target=".bd-example2-modal-lg"><i class="fa fa-plus"></i> Catatan</button>
  @endif

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
    <tr>
    <td bgcolor="silver">
            No  
        </td>
        <td bgcolor="silver">
            Catatan
        </td>
        @if(Auth::user()->role == "verifikator")
        <td bgcolor="silver">
            Action
        </td>
        @endif
    </tr>
    <?php
    $no=1;
        $program12 = catatan::where('id_etor', $id_etor)->get();
        foreach($program12 as $pp)
        {
    ?>
          <tr>
          <td>
                  <?php
                     echo $no;           
                  ?>
              </td>
              <td>
                  <?php
                     echo $pp->catatan;           
                  ?>
              </td>
              @if(Auth::user()->role == "verifikator")
              <td>

              <button type="button" class="btn btn-primary" onclick="getData('{{ $pp->id }}','{{ $pp->catatan }}')" data-toggle="modal" data-target=".bd-example29-modal-lg"><i class="fa fa-edit"></i> Edit</button>

              <a href="/verifikator/deletecatatan/{{$pp->id}}/{{ $id_etor }}"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
  
              </td>
              @endif
        </tr>
    <?php
    $no++;
        }
    ?>
    
</table>



@endsection

<script>
    
function getData(id,catatan)
{
    //alert($id);
    document.getElementById("id2").value = id;
    document.getElementById("catatan2").value = catatan;
    
}
</script>