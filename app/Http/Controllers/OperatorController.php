<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Nilai;
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

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        return view('operator.home');
    }

    public function siswa()
    {
        // Mengambil data nilai dengan relasi siswa, guru, dan mapel
        $siswa = Auth::user();  // Ambil data user yang sedang login (siswa)
        
        // Ambil nilai berdasarkan user (siswa) yang sedang login
        $dataNilai = Nilai::where('user_id', $siswa->id)->with(['guru', 'mapel'])->get();

        // Kirim data nilai ke view
        return view('operator.siswa', compact('dataNilai'));
    }

    public function etor(Request $request, $id)
    {
        $tbl_etor = tbl_etor::select("*")
        ->orderByDesc("created_at")
        ->get();

       // echo $id;

       if($request->ajax())
       {
           return datatables()->of($tbl_etor)->make(true);
       }

       
        return view('admin.etor', compact(['tbl_etor','tbl_etor']))->with('cek',$id);
    }

    public function tambahetor() {
        $data = DB::table('program2')->get();
        return view('admin.tambahetor')->with('data', $data);
    }

    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('program3')->where('id_program2', $id)->get());
    }

    public function formetor()
    {
        $tb_uraians = tb_uraian::all();
        $user = Auth::user(); // Retrieve the currently authenticated user...
        $id = Auth::id(); 

        $cek = $user->code;

        $tb_uraiansx = tb_uraian::find(1);

        $tb_uraiansx2 = tb_uraian::all();

        $program3 = program3::all();

        $data = DB::table('program2')->get();
        //return view('admin.tambahetor')->with('data', $data);

        $tbikupilar = tbikupilar::all();

        $tbikkuraian = tbikkuraian::all();

        $unit_kerja = $tb_uraiansx->uraian;

        $no_tor = "4471 - ";

//        $no_tor = "4471 - ".$tb_uraiansx->code_unit.".".$tb_uraiansx->code_jenjang.".".$tb_uraiansx->code_uraian." - ";

        return view('operator.tambahetor', compact(['tb_uraians','program3']))->with('tes',$cek)->with('unit_kerja',$unit_kerja)->with('no_tor',$no_tor)->with(compact(['tbikupilar','tbikupilar']))->with(compact(['tbikkuraian','tbikkuraian']))->with(compact(['tb_uraiansx2','tb_uraiansx2']))->with('program2', $data);
    //    return view('operator.tambahetor');
    }

    public function tes($id)
    {
       $cek = $id;

        // $program3 = DB::table('program3')
        //     ->select('*')
        //     ->where('id_program3','=', $cek)
        //     ->get();

        // $cek = $program3->first()->id_program2;
        
        $program2 = DB::table('program2')
            ->select('*')
            ->where('id_program2','=', $cek)
            ->get();


        

       // $data["nama"] = $program2->first()->kode_program1.".".$program2->first()->kode_program2.".".$program3->first()->kode_program3;
       $data["nama"] = $program2->first()->kode_program1.".".$program2->first()->kode_program2;
       $data["id"] = $id;
        return response()->json($data);
    }


    public function tesX2($id)
    {
       $cek = $id;

        // $program3 = DB::table('program3')
        //     ->select('*')
        //     ->where('id_program3','=', $cek)
        //     ->get();

        // $cek = $program3->first()->id_program2;
        
        $program2 = DB::table('tb_uraian')
            ->select('*')
            ->where('id','=', $cek)
            ->get();


        

       // $data["nama"] = $program2->first()->kode_program1.".".$program2->first()->kode_program2.".".$program3->first()->kode_program3;
       $data["nama"] = $program2->first()->code_unit.".".$program2->first()->code_jenjang.".".$program2->first()->code_jenjang;
       $data["id"] = $id;
        return response()->json($data);
    }


    public function tes2($id)
    {
       $cek = $id;

        $program3 = DB::table('program3')
            ->select('*')
            ->where('id_program3','=', $cek)
            ->get();

        $cek = $program3->first()->id_program2;
        
        $program2 = DB::table('program2')
            ->select('*')
            ->where('id_program2','=', $cek)
            ->get();

        $data["nama"] = $program2->first()->kode_program1.".".$program2->first()->kode_program2.".".$program3->first()->kode_program3;
       //$data["nama"] = $program2->first()->kode_program1.".".$program2->first()->kode_program2;
        $data["id"] = $id;
        return response()->json($data);
    }


    public function merkAjax($id)
    {
        $motor = program3::where('id_program2',$id)->get();

        return $motor;
    }

    public function store_etor(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        
      
    //    $validated = $request->validate([
    //          'unit_kerja' => 'required',
    //          'no_tor_hidden' => 'required',
    //          'nama_program' => 'required',
    //          'latar_belakang' => 'required',
    //          'rasional' => 'required',
    //          'tujuan' => 'required'
    //      ]);

        $unit_kerja=$request->unit_kerja;
        $no_tor_hidden=$request->no_tor_hidden;
        $nama_program=$request->nama_program;
        $latar_belakang=$request->latar_belakang;
        $rasional=$request->rasional;
        $tujuan=$request->tujuan;
        

        if($request->unit_kerja=="")
        {
            $unit_kerja="-";
        }

        if($request->no_tor_hidden=="")
        {
            $no_tor_hidden="-";
        }

        if($request->nama_program=="")
        {
            $nama_program="-";
        }

        if($request->latar_belakang=="")
        {
            $latar_belakang="-";
        }

        if($request->rasional=="")
        {
            $rasional="-";
        }

        if($request->tujuan=="")
        {
            $tujuan="-";
        }

        
        tbl_etor::create([
            'unit_kerja'=>$unit_kerja,
            'no_tor'=>$no_tor_hidden,
            'nama_program'=>$nama_program,
            'latar_belakang'=>$latar_belakang,
            'rasional' => $rasional,
            'tujuan' => $tujuan,
            'dibaca' => 0,
            'oke' => 0
        ]);
        
        //return $request; 
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/etor/1')->with('status', 'data berhasil ditambahkan');
        }
        else
        {
            return redirect('/admin/etor/1')->with('status', 'data berhasil ditambahkan');
        }
        
            
    }


    public function store_iku(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        $validated = $request->validate([
            'iku' => 'required'
        ]);
        
        $target1=$request->target1;
        $target2=$request->target2;
        $target3=$request->target3;
        $target4=$request->target4;
        $target5=$request->target5;


        if($request->target1=="")
        {
            $target1="-";
        }

        if($request->target2=="")
        {
            $target2="-";
        }

        if($request->target3=="")
        {
            $target3="-";
        }

        if($request->target4=="")
        {
            $target4="-";
        }

        if($request->target5=="")
        {
            $target5="-";
        }
        

        iku::create([
            'iku'=>$request->iku,
            'keterangan'=>"",   
            'tahun_awal'=>$request->tahun_awal,
            'target1'=> $target1,
            'target2'=> $target2,
            'target3'=> $target3,
            'target4' => $target4,
            'target5' => $target5,
            'id_etor'=>$request->id_etor  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role=="operator")
        {
       return redirect('/operator/tambah_iku/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
        }
        else{
            return redirect('/admin/tambah_iku/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
            
        }     
    }

    public function store_ikk(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        /*    $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);
        */

        $target1="";
        $target2="";
        $target3="";
        $target4="";
        $target5="";
        $ikk2="";

        if($request->target1=="")
        {
            $target1="-";
        }

        if($request->target2=="")
        {
            $target2="-";
        }

        if($request->target3=="")
        {
            $target3="-";
        }

        if($request->target4=="")
        {
            $target4="-";
        }

        if($request->target5=="")
        {
            $target5="-";
        }

        if($request->ikk2=="")
        {
            $ikk2="-";
        }

        table_ikk::create([
            'ikk'=>$request->ikk2,
            'tahun_awal'=>$request->tahun_awal11,
            'target1'=>$request->target1,
            'target2'=>$request->target2,
            'target3'=>$request->target3,
            'target4' => $request->target4,
            'target5' => $request->target5,
            'id_etor'=>$request->id_etor,
            'id_kegiatan'=>$request->nama_kegiatan21  
        ]);
        
        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role == "operator")
       {
        return redirect('/operator/tambah_ikk/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }
       else{
        return redirect('/admin/tambah_ikk/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }

    }


    public function store_jadwal1(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        /*    $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);
        */
        $bulan=$request->bulan;
        if($request->bulan=="")
        {
            $bulan="0000-00-00";
        }

        jadwal::create([
            'id_io'=>$request->id_io,
            'id_etor'=>$request->id_etor,
            'bulan'=>$bulan  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       
       if(Auth::user()->role == "operator")
       {
        return redirect('/operator/jadwal1/'.$request->id_etor."/".$request->id_io)->with('status', 'data berhasil ditambahkan');
       }
       else
       {
        return redirect('/admin/jadwal1/'.$request->id_etor."/".$request->id_io)->with('status', 'data berhasil ditambahkan');

       }
       
    }

    public function update_jadwal1(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        /*    $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);
        */

        $bulan=$request->bulan;
        if($request->bulan=="")
        {
            $bulan="0000-00-00";
        }


        jadwal::where('id',$request->id)->update([
            'id_io'=>$request->id_io,
            'id_etor'=>$request->id_etor,
            'bulan'=>$bulan  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role == "operator")
       {
       return redirect('/operator/jadwal1/'.$request->id_etor."/".$request->id_io)->with('status2', 'data berhasil diupdate');
       }
       else{
        return redirect('/admin/jadwal1/'.$request->id_etor."/".$request->id_io)->with('status2', 'data berhasil diupdate');
           
       } 
    }

    public function destroyetor($id)
    {
        $data = tbl_etor::find($id);
        $data->delete();

        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/etor/1')->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/etor/1')->with('status1', 'data berhasil dihapus');
        }
         
    }

    public function delete_iku($id)
    {
        $data = iku::find($id);

        $idc = $data->id_etor;

        $data->delete();
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_iku/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/tambah_iku/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function delete_ikk($id)
    {
        $data = table_kegiatan::find($id);
        $idc = $data->id_etor;
        $data->delete();
        
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_ikk/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/tambah_ikk/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function delete_jadwal1($id)
    {
        $data = jadwal::find($id);
        $idc = $data->id_etor;

        $idd = $data->id_io;
        $data->delete();
        
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/jadwal1/'.$idc."/".$idd)->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/jadwal1/'.$idc."/".$idd)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function delete_io($id)
    {
        $data = io::find($id);
        $idc = $data->id_etor;
        $data->delete();
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_io/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/tambah_io/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function delete_detailbelanja($id)
    {
        $data = detailbelanja::find($id);
        $idc = $data->id_etor;
        $data->delete();
        
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_io/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        else
        {
            
            return redirect('/admin/tambah_io/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function delete_ikk2($id)
    {
        $data = table_ikk::find($id);
        $idc = $data->id_etor;
        $data->delete();
        
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_ikk/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        else{
            return redirect('/admin/tambah_ikk/'.$idc)->with('status1', 'data berhasil dihapus');
        }
        
    }

    public function editetor($id){

		$etors = tbl_etor::find($id);

     //   $no_tor_temp = explode(".",$etors->no_tor);

        $tor_temp = $etors->nama_program;

        //$programs3 = program3::find($tor_temp);
        $programs3 = program3::where('id_program3',$tor_temp)->get();


        $tb_uraians = tb_uraian::all();
        $user = Auth::user(); // Retrieve the currently authenticated user...
        $id = Auth::id(); 

        $cek = $user->code;

        $tb_uraiansx = tb_uraian::find($cek);

        $program3 = program3::all();

        $tbikupilar = tbikupilar::all();

        $tbikkuraian = tbikkuraian::all();

        $unit_kerja = $tb_uraiansx->uraian;

        $no_tor = "4471 - ".$tb_uraiansx->code_unit.".".$tb_uraiansx->code_jenjang.".".$tb_uraiansx->code_uraian." - ";

        return view('operator.editetor', compact(['tb_uraians','program3']))->with('tes',$cek)->with('unit_kerja',$unit_kerja)->with('no_tor',$no_tor)->with(compact(['tbikupilar','tbikupilar']))->with(compact(['tbikkuraian','tbikkuraian']))->with(compact('etors'))->with('tor_temp',$tor_temp)->with(compact('programs3'));
	}


    public function update_etor($id, Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        /* $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);
        */

        //$id = $request->id;

        $unit_kerja=$request->unit_kerja;
        $no_tor_hidden=$request->no_tor_hidden;
        $nama_program=$request->nama_program;
        $latar_belakang=$request->latar_belakang;
        $rasional=$request->rasional;
        $tujuan=$request->tujuan;
        

        if($request->unit_kerja=="")
        {
            $unit_kerja="-";
        }

        if($request->no_tor_hidden=="")
        {
            $no_tor_hidden="-";
        }

        if($request->nama_program=="")
        {
            $nama_program="-";
        }

        if($request->latar_belakang=="")
        {
            $latar_belakang="-";
        }

        if($request->rasional=="")
        {
            $rasional="-";
        }

        if($request->tujuan=="")
        {
            $tujuan="-";
        }

        tbl_etor::where('id',$id)->update([
            'unit_kerja'=>$unit_kerja,
            'no_tor'=>$no_tor_hidden,
            'nama_program'=>$nama_program,
            'latar_belakang'=>$latar_belakang,
            'rasional' => $rasional,
            'tujuan' => $tujuan
        ]);
        
        tbl_etor::where('id',$id)->update([
            'dibaca'=>0
        ]);

       // return $request; 
        if(Auth::user()->role=="operator")
        {
            return redirect('/operator/etor/1')->with('status', 'data berhasil diupdate');
        }   
        else{
            return redirect('/admin/etor/1')->with('status', 'data berhasil diupdate');
        } 
        
            
    }
    
    public function tambah_iku($id)
    {
       // echo "iku";
    //   $tbl_etor = tbl_etor::all();
       
    
       $data = tbl_etor::find($id);
        
       $id_etor = $data->id;
       $no_etor = $data->no_tor;

       $tbikupilar = tbikupilar::all();
       
       $tbikupilar1 = tbikupilar::all();     
       $iku = iku::where('id_etor',$id_etor)->get();
       return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with(compact('tbikupilar1'))->with(compact('id_etor'))->with(compact('no_etor'));         
    }

    public function tambah_io($id)
    {
       // echo "iku";
    //   $tbl_etor = tbl_etor::all();
    
       $data = tbl_etor::find($id);
    
       $list_kategori = \DB::table('kodemak')->get();
       
       

       $id_etor = $data->id;
       $no_etor = $data->no_tor;

       $tbikupilar = tbikupilar::all();
       
       $tbikupilar1 = tbikupilar::all();     
       $io = io::where('id_etor',$id_etor)->get();


       //$io = kodemakuraian::where('id',$id_etor)->get();

      // $id_io = $io['id'];

       $detailbelanja = detailbelanja::all();
       return view('operator.tambah_io', compact(['tbikupilar','tbikupilar']))->with(compact('tbikupilar1'))->with(compact('detailbelanja'))->with(compact('id_etor'))->with(compact('no_etor'))->with(compact('io'))->with(compact('list_kategori'));         
    }

    public function listSubKategori($kategori_id)
    {
        $data = \DB::table('kodemakrincian')->where('kode_mak',$kategori_id)->get();
        return response()->json($data);
    }

    public function isiKategori2($mak)
    {
        $data = \DB::table('kodemakrincian')->where('id',$mak)->get();
        return response()->json($data);
    }

    public function listSubKategori2($kategori_id)
    {
        $data = \DB::table('kodemakrincian')->where('kode_mak',$kategori_id)->get();
        return response()->json($data);
    }

    public function tambah_ikk($id)
    {
        $data1 = tbl_etor::find($id);
         
    //    $ikk3 = table_ikk::where('id_etor',4)->get();   
        $id_etor = $data1->id;
        $no_etor = $data1->no_tor;
 
        $tbikupilar = tbikupilar::all();
        
        $tbikupilar2 = table_ikk::where('id_etor',$id)->get();

        $tbikupilar1 = tbikupilar::all();     
        $ikk = table_kegiatan::where('id_etor',$id_etor)->get();
        return view('operator.tambah_ikk', compact(['tbikupilar','tbikupilar']))->with(compact('ikk'))->with(compact('tbikupilar1'))->with(compact('id_etor'))->with(compact('no_etor'))->with(compact('tbikupilar2'));
         
    }

    public function tambah_input_output()
    {
        // echo "input output";
         
    }

    public function jadwal1($id,$idy)
    {
        $data1 = tbl_etor::find($id);

        $data2 = io::find($idy);

        $input = $data2->input;
        $output = $data2->output;
         
    //    $ikk3 = table_ikk::where('id_etor',4)->get();   
        $id_etor = $data1->id;
        $no_etor = $data1->no_tor;

        $id_io = $data2->id;
 
        $tbikupilar = tbikupilar::all();
        
        $tbikupilar2 = table_ikk::where('id_etor',4)->get();

        $tbikupilar1 = tbikupilar::all();     
        $ikk = table_kegiatan::where('id_etor',$id_etor)->get();

        $jadwal = jadwal::where('id_io',$idy)->get();

        return view('operator.jadwal', compact(['tbikupilar','tbikupilar']))->with(compact('ikk'))->with(compact('tbikupilar1'))->with(compact('input'))->with(compact('output'))->with(compact('id_io'))->with(compact('id_etor'))->with(compact('no_etor'))->with(compact('tbikupilar2'))->with(compact('jadwal'));
         
    }

    public function update_iku(Request $request)
    {
        $target1=$request->target1;
        $target2=$request->target2;
        $target3=$request->target3;
        $target4=$request->target4;
        $target5=$request->target5;


        if($request->target1=="")
        {
            $target1="-";
        }

        if($request->target2=="")
        {
            $target2="-";
        }

        if($request->target3=="")
        {
            $target3="-";
        }

        if($request->target4=="")
        {
            $target4="-";
        }

        if($request->target5=="")
        {
            $target5="-";
        }

        iku::where('id',$request->id)->update([
            'tahun_awal'=>$request->tahun_awal,
            'keterangan'=>'',
            'target1'=>$target1,
            'target2'=>$target2,
            'target3'=>$target3,
            'target4'=>$target4,
            'target5'=>$target5,
            'id_etor'=>$request->id_etor            
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);


        $id = $request->id_etor;
        echo $id;
        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_iku/'.$id)->with('status2', 'data berhasil diupdate');
        }
        else{
            return redirect('/admin/tambah_iku/'.$id)->with('status2', 'data berhasil diupdate');
        }
                
         
    }

    public function update_ikk2(Request $request)
    {

        $target1="";
        $target2="";
        $target3="";
        $target4="";
        $target5="";
        $ikk="";

        if($request->target1=="")
        {
            $target1="-";
        }

        if($request->target2=="")
        {
            $target2="-";
        }

        if($request->target3=="")
        {
            $target3="-";
        }

        if($request->target4=="")
        {
            $target4="-";
        }

        if($request->target5=="")
        {
            $target5="-";
        }

        if($request->ikk=="")
        {
            $ikk="-";
        }

        table_ikk::where('id',$request->id)->update([
            'tahun_awal'=>$request->tahun_awal,
            'ikk'=>$ikk,
            'target1'=>$request->target1,
            'target2'=>$request->target2,
            'target3'=>$request->target3,
            'target4'=>$request->target4,
            'target5'=>$request->target5,
            'id_etor'=>$request->id_etor,
            'id_kegiatan'=>$request->id_kegiatan            
        ]);

        $id = $request->id_etor;
        //echo $id;

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);

        if(Auth::user()->role == "operator")
        {
            return redirect('/operator/tambah_ikk/'.$id)->with('status2', 'data berhasil diupdate');        
        
        }
        else{
            return redirect('/admin/tambah_ikk/'.$id)->with('status2', 'data berhasil diupdate');
        }
         
    }

    public function update_ikk(Request $request)
    {
        $nama_kegiatan=$request->nama_kegiatan;
        if($request->nama_kegiatan=="")
        {
            $nama_kegiatan="-";
        }

        table_kegiatan::where('id',$request->id)->update([
            'nama_kegiatan'=>$nama_kegiatan,
            'id_etor'=>$request->id_etor            
        ]);
        

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        //echo $request->id."<br>";
        //echo $request->nama_kegiatan."<br>";
        //echo $request->id_etor."<br>";
        $id = $request->id_etor;
      //  echo $request->nama_kegiatan;
    //   if(Auth::user()->role == "operator")
    //    {
    //     return redirect('/operator/tambah_ikk/'.$id)->with('status2', 'data berhasil diupdate');        
    //    }
    //    else{
    //     return redirect('/admin/tambah_ikk/'.$id)->with('status2', 'data berhasil diupdate');
    //    }
    
        echo $request->nama_kegiatan;
    }

    public function update_io(Request $request)
    {
        $input=$request->input;
        $output=$request->output;

        if($request->input=="")
        {
            $input="-";
        }

        if($request->output=="")
        {
            $output="-";
        }


        io::where('id',$request->id)->update([
            'input'=>$request->input,
            'output'=>$request->output,
            'id_etor'=>$request->id_etor            
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //echo $request->id."<br>";
        //echo $request->nama_kegiatan."<br>";
        //echo $request->id_etor."<br>";
        $id = $request->id_etor;
      //  echo $request->nama_kegiatan;
      if(Auth::user()->role == "operator") 
       {
        return redirect('/operator/tambah_io/'.$id)->with('status2', 'data berhasil diupdate');        
      
       }
       else{
        return redirect('/admin/tambah_io/'.$id)->with('status2', 'data berhasil diupdate');        
      
       }  
         
    }

    public function store_kegiatan(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
            $validated = $request->validate([
            'nama_kegiatan' => 'required',
            ]);
        
        table_kegiatan::create([
            'nama_kegiatan'=>$request->nama_kegiatan,
            'id_etor'=>$request->id_etor  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role == "operator")
       {
        return redirect('/operator/tambah_ikk/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }
       else{
        return redirect('/admin/tambah_ikk/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }
       
    }
    
    public function store_io(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
            $validated = $request->validate([
            'input' => 'required',
            'output' => 'required'
        ]);
        
        io::create([
            'input'=>$request->input,
            'output'=>$request->output,
            'id_etor'=>$request->id_etor  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 

       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
     
       if(Auth::user()->role == "operator") 
       {
        return redirect('/operator/tambah_io/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       

       }
       else{
        return redirect('/admin/tambah_io/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       
       }
        
    }


    public function store_detailbelanja(Request $request)
    {
       //     echo  $request->unit_kerja;
      //  dd($request);
        /*    $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);
        */

        $mak=$request->mak;
        $uraian=$request->uraian;
        $vol=$request->vol;
        $satuan=$request->satuan;
        $harga_satuan=$request->harga_satuan;
        $jurusan=$request->jurusan;
        $fakultas=$request->fakultas;
        $hibah=$request->hibah;
        $lainnya=$request->lainnya;
        $universitas=$request->universitas;

        if($request->mak=="")
        {
            $mak="-";
        }

        if($request->uraian=="")
        {
            $uraian="-";
        }

        if($request->vol=="")
        {
            $vol="-";
        }

        if($request->satuan=="")
        {
            $satuan="-";
        }

        if($request->harga_satuan=="")
        {
            $harga_satuan="-";
        }

        if($request->jurusan=="")
        {
            $jurusan="-";
        }

        if($request->fakultas=="")
        {
            $fakultas="-";
        }

        if($request->universitas=="")
        {
            $universitas="-";
        }

        if($request->hibah=="")
        {
            $hibah="-";
        }

        if($request->lainnya=="")
        {
            $lainnya="-";
        }

        detailbelanja::create([
            'mak'=>$mak,
            'uraian'=>$uraian,
            'vol'=>$vol,
            'satuan'=>$satuan,
            'harga_satuan'=>$harga_satuan,
            'jurusan'=>$jurusan,
            'fakultas'=>$fakultas,
            'universitas'=>$universitas,
            'hibah'=>$hibah,
            'lainnya'=>$lainnya,
            'id_io'=>$request->id_io3,
            'id_etor'=>$request->id_etor  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
        
        //return $request; 
       $detailbelanja = detailbelanja::where('id_io',$request->id_io3   )->get();
       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role == "operator")
       {
        return redirect('/operator/tambah_io/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }
       else{
        
        return redirect('/admin/tambah_io/'.$request->id_etor)->with('status', 'data berhasil ditambahkan');
       }
       
       
    }

    public function update_detailbelanja(Request $request)
    {
        $mak=$request->mak;
        $uraian=$request->uraian;
        $vol=$request->vol;
        $satuan=$request->satuan;
        $harga_satuan=$request->harga_satuan;
        $jurusan=$request->jurusan;
        $fakultas=$request->fakultas;
        $hibah=$request->hibah;
        $lainnya=$request->lainnya;
        $universitas=$request->universitas;

        if($request->mak=="")
        {
            $mak="-";
        }

        if($request->uraian=="")
        {
            $uraian="-";
        }

        if($request->vol=="")
        {
            $vol="-";
        }

        if($request->satuan=="")
        {
            $satuan="-";
        }

        if($request->harga_satuan=="")
        {
            $harga_satuan="-";
        }

        if($request->jurusan=="")
        {
            $jurusan="-";
        }

        if($request->fakultas=="")
        {
            $fakultas="-";
        }

        if($request->universitas=="")
        {
            $universitas="-";
        }

        if($request->hibah=="")
        {
            $hibah="-";
        }

        if($request->lainnya=="")
        {
            $lainnya="-";
        }

        detailbelanja::where('id',$request->id)->update([
            'mak'=>$mak,
            'uraian'=>$uraian,
            'vol'=>$vol,
            'mak'=>$mak,
            'satuan'=>$satuan,
            'harga_satuan'=>$harga_satuan,
            'jurusan'=>$jurusan,
            'fakultas'=>$fakultas,
            'universitas'=>$universitas,
            'hibah'=>$hibah,
            'lainnya'=>$lainnya,
            'id_io'=>$request->id_io5,
            'id_etor'=>$request->id_etor  
        ]);

        tbl_etor::where('id',$request->id_etor)->update([
            'dibaca'=>0
        ]);
            //return $request; 
       $detailbelanja = detailbelanja::where('id_io',$request->id_io)->get();
       $tbikupilar = tbikupilar::all();     
       $iku = iku::all();
       //return view('operator.tambah_iku', compact(['tbikupilar','tbikupilar']))->with(compact('iku'))->with('status',"Data Berhasil Ditambahkan");            
       if(Auth::user()->role == "operator")
       {
        return redirect('/operator/tambah_io/'.$request->id_etor)->with('status1', 'data berhasil diupdate');
       }
       else{
            
        return redirect('/admin/tambah_io/'.$request->id_etor)->with('status1', 'data berhasil diupdate');
       }
       
    }


    /*public function view_iku(){

		
        $iku = iku::all();

        return view('operator.tambah_iku', compact('iku'));
	}*/
}
