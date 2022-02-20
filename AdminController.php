<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pemesan;
use App\Models\ruangan;

class AdminController extends Controller
{
	public function home()
    {
        return view('admin.home');
    }
	public function terpakai()
    {
        return view('admin.terpakai');
    }
	public function ruangan()
    {
        $ruangan = ruangan::all();
        return view('admin.ruangan',['ruangan'=>$ruangan]);
    }
	public function mendata()
    {
        return view('admin.mendata');
    }
	public function PenggunaRuangan()
    {
        $pemesan = pemesan::all();
    	return view('admin.PenggunaRuangan', ['pemesan' => $pemesan]);
    }
    public function proses(Request $request)
    {
        DB::table('data_ruangan')->insert([
            'ruangan' => $request->ruangan,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
            'gambar' => $request->gambar,
            'fasilitas' => $request->fasilitas
        ]);
        $file = $request->file('gambar');
 
		$gambar = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar';
		$file->move($tujuan_upload,$gambar);
    	return redirect('ruangan');
    }
	public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('data_ruangan')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/ruangan');
}
	public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_ruangan = DB::table('data_ruangan')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('admin.edit',['data_ruangan' => $data_ruangan]);
 
}
public function update(Request $request)
    {
        DB::table('data_ruangan')->update([
            'ruangan' => $request->ruangan,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
            'gambar' => $request->gambar,
            'fasilitas' => $request->fasilitas
        ]);
        $file = $request->file('gambar');
 
		$gambar = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar';
		$file->move($tujuan_upload,$gambar);
    	return redirect('ruangan');
    }
	
}
