<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\Models\User;
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
<b>TOR Fakultas Ekonomi dan Bisnis Universitas Mataram</b>
<hr>
<br>
<table border="1" width="100%" cellspacing="0" cellpadding="0">
    
        @foreach($etors as $etor)
        <tr>
            <td>Unit Kerja</td>
            <td>{{ $etor->unit_kerja }}</td>
        </tr>
        <tr>
            <td>No TOR</td>
            <td>{{ $etor->no_tor }}</td>
        </tr>
        <tr>
            <td>Nama Program</td>
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
<b>IKU</b>
<hr>
<table border="1" width="100%" cellspacing="0" cellpadding="0">
    
        @foreach($ikus as $iku)
        <tr>
            <td width="10%">IKU</td>
            <td colspan="5">{{ $iku->iku }}</td>
        </tr>
        <tr>
            <td width="10%">Tahun </td>
            <td align="center">{{ $iku->tahun_awal }} </td>
            <td align="center">{{ $iku->tahun_awal+1 }}</td>
            <td align="center">{{ $iku->tahun_awal+2 }}</td>
            <td align="center">{{ $iku->tahun_awal+3 }}</td>
            <td align="center">{{ $iku->tahun_awal+4 }}</td>
        </tr>
        <tr>
            <td width="10%">Baseline/Capaian/Target
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
<b>IKK</b>
<hr>
        @foreach($kegiatans as $kegiatan)
        <table border="1" width="100%" cellspacing="0" cellpadding="0">

        <tr>
            <td colspan="7">
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

    <table border="1" width="100%" cellspacing="0" cellpadding="0">
        
        <tr>
            <td width="20%">IKK</td>
            <td colspan="7">
                <?php 
                    echo $p3->ikk;

                ?>
            </td>
        </tr>
        <tr>
            <td width="10%">Tahun</td>
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
            <td width="10%">Baseline/Capaian/Target</td>
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

<b>Input Output</b>
<hr>
<?php
                $i=1;
                ?> 
@foreach($io as $io)
                
                <table border="1" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th>Input {{ $i }}</th>
                    <th>Output {{ $i }}</th>
</tr>
                <tr>
                  <td> {{ $io->input }} </td>
                  <td> {{ $io->output }}  </td>
                
</tr>
</table>
<br>

<table border="1" cellpadding="0" cellspacing="0" width="100%">
                          <thead>
                          
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


<b>JADWAL</b>
<hr>

<table border="1" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>
            Input
        </td>
        <td>
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
                            echo $p4->input;
                        } 
                  ?>
              </td>
              <td>{{ $j->bulan }}</td>
        </tr>
    @endforeach
    
</table>



<br>


<br>
