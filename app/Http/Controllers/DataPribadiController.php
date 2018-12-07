<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
    public function form(Request $request){
    	if($request->session()->get('nip') == null){
    		return redirect()->route('login.form');
    	}
    	$data = DB::table('users')->where('nip', $request->session()->get('nip'))->first();
    	return view('menu.datapribadi', ['data' => $data]);
    }

    public function attempt(Request $request){
    	DB::table('users')->where('nip', $request->session()->get('nip'))->update([
    		'nama' => $request->nama,
    		'nip' => $request->nip,
    		'status' => $request->status,
    		'nomor_karpeg' => $request->nomor_karpeg,
    		'nuptk' => $request->nuptk,
    		'nrg' => $request->nrg,
    		'tempat_lahir' => $request->tempat_lahir,
    		'tanggal_lahir' => $request->tanggal_lahir,
    		'gender' => $request->gender,
    		'alamat_rumah' => $request->alamat_rumah,
    		'pendidikan_jenjang' => $request->pendidikan_jenjang,
    		'pendidikan_progdi' => $request->pendidikan_progdi,
    		'mkg_baru_tahun' => $request->mkg_baru_tahun,
    		'mkg_baru_bulan' => $request->mkg_baru_bulan,
    		'mkg_lama_tahun' => $request->mkg_lama_tahun,
    		'mkg_lama_bulan' => $requeset->mkg_lama_bulan,
    		'golongan' => $request->golongan,
    		'pangkat' => $request->pangkat,
    		'jabatan' => $request->jabatan,
    		'tmt_pangkat' => $request->tmt_pangkat,
    		'tmt_jabatan' => $request->tmt_jabatan,
    		'jenis_guru' => $request->jenis_guru,
    		'tugas_sebagai' => $request->tugas_sebagai,
    		'no_peserta_sertifikasi' => $request->no_peserta_sertifikasi,
    		'mapel_sertifikasi' => $request->mapel_sertifikasi,
    		'lokasi_kerja' => $request->lokasi_kerja,
    		'lokasi_kerja_alamat' => $request->lokasi_kerja_alamat,
    	]);
    	return redirect()->route('datapribadi.form');
    }

}
