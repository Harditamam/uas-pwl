<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\Models\catatan;
use App\Models\User;
use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Mapel;
use App\Models\tb_uraian;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.home');
    }

    public function guru()
    {
        $gurus = Guru::all();
        return view('admin.guru', compact('gurus'));
    }

    public function mapel()
    {
        $mapels = Mapel::all();
        return view('admin.mapel', compact('mapels'));
    }

    public function nilai()
    {
        // Mengambil data nilai dengan relasi siswa, guru, dan mapel
        $dataNilai = Nilai::with(['user', 'guru', 'mapel'])->get();

        // Mengirimkan data ke view
        return view('admin.nilai', compact('dataNilai'));
    }
    

    public function tambahakun_admin()
    {
        return view('admin.tambahakun_admin');
    }

    public function tambah_guru()
    {
        return view('admin.tambah_guru');
    }

    public function tambah_mapel()
    {
        return view('admin.tambah_mapel');
    }

    public function tambah_nilai()
    {
        $siswa = User::all();
    $guru = Guru::all();
    $mapel = Mapel::all();

    return view('admin.tambah_nilai', compact('siswa', 'guru', 'mapel'));
    }

    public function store_guru(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255']
        ]);

        Guru::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp
        ]);

        return redirect('/admin/guru')->with('status', 'data berhasil ditambahkan');
        
    }

    public function store_mapel(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255']
        ]);

        Mapel::create([
            'nama'=>$request->nama
        ]);

        return redirect('/admin/mapel')->with('status', 'data berhasil ditambahkan');
        
    }

    public function store_nilai(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'siswa_id' => 'required|exists:users,id', // Pastikan siswa_id ada di tabel siswas
            'guru_id' => 'required|exists:gurus,id',  // Pastikan guru_id ada di tabel gurus
            'mapel_id' => 'required|exists:mapels,id', // Pastikan mapel_id ada di tabel mapels
            'nilai' => 'required|numeric|min:0|max:100', // Validasi nilai antara 0 - 100
        ]);

        // Simpan data ke tabel nilai
        Nilai::create([
            'user_id' => $validated['siswa_id'],
            'guru_id' => $validated['guru_id'],
            'mapel_id' => $validated['mapel_id'],
            'nilai' => $validated['nilai'],
        ]);

        // Redirect ke halaman data nilai dengan pesan sukses
        return redirect('/admin/nilai')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    public function edit_guru($id){
		$users = Guru::find($id);
        //echo $data->email;

        return view('admin.edit_guru', compact('users'));
	}

    public function edit_mapel($id){
		$users = Mapel::find($id);
        //echo $data->email;

        return view('admin.edit_mapel', compact('users'));
	}

    public function edit_nilai($id)
    {
        // Cari data nilai berdasarkan ID
        $nilai = Nilai::with(['user', 'guru', 'mapel'])->findOrFail($id);

        // Ambil data siswa, guru, dan mapel untuk dropdown
        $siswa = User::all();
        $guru = Guru::all();
        $mapel = Mapel::all();

        // Return view edit dengan data terkait
        return view('admin.edit_nilai', compact('nilai', 'siswa', 'guru', 'mapel'));
    }

    public function update_guru($id, Request $request)
    {
     //   $data = User::find($id);
    //    $data->delete();

        //echo $id;

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'no_hp' => ['required']
        ]);


        Guru::where('id',$id)->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp         
        ]);

        return redirect('/admin/guru')->with('status', 'data berhasil update'); 
    }

    public function update_nilai(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'siswa_id' => 'required|exists:users,id',
        'guru_id' => 'required|exists:gurus,id',
        'mapel_id' => 'required|exists:mapels,id',
        'nilai' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data nilai berdasarkan ID
    $nilai = Nilai::findOrFail($id);

    // Update data
    $nilai->update([
        'user_id' => $validated['siswa_id'],
        'guru_id' => $validated['guru_id'],
        'mapel_id' => $validated['mapel_id'],
        'nilai' => $validated['nilai'],
    ]);

    // Redirect dengan pesan sukses
    return redirect('/admin/nilai')->with('success', 'Data nilai berhasil diperbarui.');
}


    public function update_mapel($id, Request $request)
    {
     //   $data = User::find($id);
    //    $data->delete();

        //echo $id;

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255']
        ]);


        Mapel::where('id',$id)->update([
            'nama'=>$request->nama
        ]);

        return redirect('/admin/mapel')->with('status', 'data berhasil update'); 
    }

    public function tambahakun_fakultas()
    {
        return view('admin.tambahakun_fakultas');
    }
    
    public function tambahakun_verifikator()
    {
        return view('admin.tambahakun_verifikator');
    }
    
    public function printpdf($id_etor)
    {
        $data = User::all();

        $etor = tbl_etor::where('id',$id_etor)->get();
        $kegiatan = table_kegiatan::where('id_etor',$id_etor)->get();
        $iku = iku::where('id_etor',$id_etor)->get();
        $table_ikk = table_ikk::where('id_etor',$id_etor)->get();
        $jadwal = jadwal::where('id_etor',$id_etor)->get();
        
        $data1['users'] = $data;
        $data1['etors'] = $etor;
        $data1['kegiatans'] = $kegiatan;
        $data1['ikus'] = $iku;
        $data1['table_ikks'] = $table_ikk;
        $data1['jadwals'] = $jadwal;

        $io = io::where('id_etor',$id_etor)->get();
        $data1['io'] = $io;

        $pdf = PDF::loadView('admin.welcome', $data1)->setPaper('a4', 'landscape');
     //   $pdf->set_paper('letter', 'landscape');
        return $pdf->download('user.pdf');
    }

    public function printexcel($id_etor)
    {
        $data = User::all();

        $etor = tbl_etor::where('id',$id_etor)->get();
        $kegiatan = table_kegiatan::where('id_etor',$id_etor)->get();
        $iku = iku::where('id_etor',$id_etor)->get();
        $table_ikk = table_ikk::where('id_etor',$id_etor)->get();
        $jadwal = jadwal::where('id_etor',$id_etor)->get();
        
        $data1['users'] = $data;
        $data1['etors'] = $etor;
        $data1['kegiatans'] = $kegiatan;
        $data1['ikus'] = $iku;
        $data1['table_ikks'] = $table_ikk;
        $data1['jadwals'] = $jadwal;


        $io = io::where('id_etor',$id_etor)->get();
        $data1['io'] = $io;
        //$pdf = PDF::loadView('admin.welcome', $data1)->setPaper('a4', 'landscape');
     //   $pdf->set_paper('letter', 'landscape');
        //return $pdf->download('user.pdf');
        return view('admin.welcome2', $data1);
        
    }

    public function ceketor($id_etor)
    {
        $data = User::all();

        $etor = tbl_etor::where('id',$id_etor)->get();
        $kegiatan = table_kegiatan::where('id_etor',$id_etor)->get();
        $iku = iku::where('id_etor',$id_etor)->get();
        $table_ikk = table_ikk::where('id_etor',$id_etor)->get();
        $jadwal = jadwal::where('id_etor',$id_etor)->get();
        
        $data1['users'] = $data;
        $data1['id_etor'] = $id_etor;
        $data1['etors'] = $etor;
        $data1['kegiatans'] = $kegiatan;
        $data1['ikus'] = $iku;
        $data1['table_ikks'] = $table_ikk;
        $data1['jadwals'] = $jadwal;
        $io = io::where('id_etor',$id_etor)->get();
        $data1['io'] = $io;

        tbl_etor::where('id',$id_etor)->update([
            'dibaca'=>1
        ]);

        //$pdf = PDF::loadView('admin.welcome', $data1)->setPaper('a4', 'landscape');
     //   $pdf->set_paper('letter', 'landscape');
        //return $pdf->download('user.pdf');
        return view('admin.welcome3', $data1);
        
    }

    public function akun()
    {
        $users = User::all();
        return view('admin.akun', compact('users'));
    }

    public function view_detail_akun($id){
		$users = User::find($id);

        $id_x = $users->code;

        //echo $id_x;

      //  echo $id_x;

        $tb_uraiansx = tb_uraian::find($id_x);
        $nam="";
        if($users->role=="operator")
        {
            $nam = $tb_uraiansx->code_unit.".".$tb_uraiansx->code_jenjang.".".$tb_uraiansx->code_uraian;

        }
        

       // echo $tb_uraiansx->code_unit;
        $tb_uraians = tb_uraian::all();


        return view('admin.view_detail_akun', compact(['users','tb_uraians']))->with('title1',$nam);
        //return view('admin.view_detail_akun', compact('users','tb_uraiansx'));
        
        
        //echo $data->email;

        
	}


    public function edit_akun_admin($id){
		$users = User::find($id);

        //echo $data->email;

        return view('admin.edit_akun_admin', compact('users'));
	}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required']

        ]);

        User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'role' => 'admin',
            'password' => Hash::make($request->password),
            'nis'=>'',
            'kelas'=>'',
            'phone'=>''
        ]);

        return redirect('/admin/akun')->with('status', 'data berhasil ditambahkan');
        
    }

    public function store_catatan(Request $request)
    {

        catatan::create([
            'catatan'=>$request->catatan,
            'id_etor'=>$request->id_etor
        ]);

        return redirect('/verifikator/ceketor/'.$request->id_etor)->with('status', 'Catatan berhasil ditambahkan');
        
    }

    public function update_catatan(Request $request)
    {

        catatan::where('id',$request->id)->update([
            'catatan'=>$request->catatan,
            'id_etor'=>$request->id_etor
        ]);

        return redirect('/verifikator/ceketor/'.$request->id_etor)->with('status', 'Catatan berhasil diupdate');
        
    }

    public function store_oke(Request $request)
    {

        if($request->oke=="1")
        {
            tbl_etor::where('id',$request->id_etor)->update([
                'oke'=>2
            ]);
        }
        else{
            tbl_etor::where('id',$request->id_etor)->update([
                'oke'=>1
            ]);
        }
        
        if($request->oke=="2")
        {
            return redirect('/verifikator/ceketor/'.$request->id_etor)->with('status', 'TOR telah terfevifikasi');
        }
        else{
            return redirect('/verifikator/ceketor/'.$request->id_etor)->with('status3', 'TOR Revision');
        }
        
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/akun')->with('status1', 'data berhasil dihapus'); 
    }

    public function destroy_guru($id)
    {
        $data = Guru::find($id);
        $data->delete();

        return redirect('/admin/guru')->with('status1', 'data berhasil dihapus'); 
    }

    public function destroy_mapel($id)
    {
        $data = Mapel::find($id);
        $data->delete();

        return redirect('/admin/mapel')->with('status1', 'data berhasil dihapus'); 
    }

    public function destroy_nilai($id)
    {
        $data = Nilai::find($id);
        $data->delete();

        return redirect('/admin/nilai')->with('status1', 'data berhasil dihapus'); 
    }


    public function update_akun_admin($id, Request $request)
    {
     //   $data = User::find($id);
    //    $data->delete();

        //echo $id;

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255']
        ]);


        User::where('id',$id)->update([
            'name'=>$request->nama,
            'email'=>$request->email         
        ]);

        return redirect('/admin/akun')->with('status', 'data berhasil update'); 
    }

    //fakulatas pimpinan
    public function edit_akun_fakultas($id){
		$users = User::find($id);

        //echo $data->email;

        return view('admin.edit_akun_fakultas', compact('users'));
	}

    public function store_fakultas(Request $request)
    {

        $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);

        User::create([
            'name'=>$request->nama,
            'nip'=>$request->nip,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'code' => 'yyy',
            'role' => 'manager',
            'password' => Hash::make($request->password)
        ]);

       // return $request; 

        return redirect('/admin/akun')->with('status', 'data berhasil ditambahkan');
        
    }

    public function destroy_fakultas($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/akun')->with('status1', 'data berhasil dihapus'); 
    }


    public function update_akun_fakultas($id, Request $request)
    {
     //   $data = User::find($id);
    //    $data->delete();

        //echo $id;

        $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['min:8|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);


        User::where('id',$id)->update([
            'name'=>$request->nama,
            'email'=>$request->email,
            'nip'=>$request->nip,
            'jabatan'=>$request->jabatan,
            'code' => 'yyy',
            'role' => 'manager',
            'password' => Hash::make($request->password)            
        ]);

        return redirect('/admin/akun')->with('status', 'data berhasil update'); 
    }



    //verfiikator
    public function edit_akun_verifikator($id){
		$users = User::find($id);

        //echo $data->email;

        return view('admin.edit_akun_verifikator', compact('users'));
	}

    public function store_verifikator(Request $request)
    {

        $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['min:8|required_with:password_confirmation|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);


        User::create([
            'name'=>$request->nama,
            'nip'=>$request->nip,
            'email'=>$request->email,
            'code' => 'xxx',
            'role' => 'verifikator',
            'password' => Hash::make($request->password)
        ]);

      //  return $request; 

        return redirect('/admin/akun')->with('status', 'data berhasil ditambahkan');
        
    }

    public function deletecatatan($id, $id_etor)
    {
        $data = catatan::find($id);
        $data->delete();

        return redirect('/verifikator/ceketor/'.$id_etor)->with('status1', 'Catatan berhasil dihapus');
        
    }

    public function destroy_verifikator($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/akun')->with('status1', 'data berhasil dihapus'); 
    }


    public function update_akun_verifikator($id, Request $request)
    {
     //   $data = User::find($id);
    //    $data->delete();

        //echo $id;

        $validated = $request->validate([
            'nip' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['min:8|same:password_confirmation'],
            'password_confirmation' => 'min:8'
        ]);


        User::where('id',$id)->update([
            'name'=>$request->nama,
            'email'=>$request->email,
            'nip'=>$request->nip,
            'code' => 'xxx',
            'role' => 'verifikator',
            'password' => Hash::make($request->password)            
        ]);

        return redirect('/admin/akun')->with('status', 'data berhasil update'); 
    }


    //operator
    public function edit_akun_operator($id){
		$users = User::find($id);
        return view('admin.edit_akun_operator', compact('users'));
	}

    public function store_operator(Request $request)
    {   
            User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role' => 'siswa',
            'password' => Hash::make($request->password),
            'nis' =>$request->nis,
            'kelas'=>$request->kelas 
        ]);

        echo $request->nis;
        echo $request->kelas;
        echo $request->phone;
      //  return $request; 

        return redirect('/admin/akun')->with('status', 'data berhasil ditambahkan');
        
    }

    public function destroy_operator($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/akun')->with('status1', 'data berhasil dihapus'); 
    }

    public function update_akun_operator($id, Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'kelas' => 'required',
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
           
        ]);

        User::where('id',$id)->update([
            'name'=>$request->nama,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'kelas'=>$request->kelas,
            'nis'=>$request->nis            
        ]);

        return redirect('/admin/akun')->with('status', 'data berhasil update'); 
    }


    public function tambahakun()
    {
        $tb_uraians = tb_uraian::all();        
        return view('admin.tambahakun', compact('tb_uraians'));
        
    }

}
