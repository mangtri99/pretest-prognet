<?php

namespace App\Http\Controllers;
use App\Siswa;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_siswa')
        ->get();
        return view('siswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validate = \Validator::make($req->all(),[
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
        if($validate->fails()){
            $siswas = Siswa::get();
            return redirect()->action("CrudController@create")->with('alert','Formulir Harap Dilengkapi!');
        }
        $nis=$req->nis;
        $ambildata = Siswa::where(['nis'=>$nis])->first();
        if($ambildata){
            return redirect()->back()->with('alert','NIS telah terdaftar');
        }
        else{
        $nama = $req->input('nama');
        $nis = $req->input('nis');
        $nisn = $req->input('nisn');
        $no_hp = $req->input('no_hp');
        $alamat=$req->input('alamat');

        DB::table('tb_siswa')->insert(
            [
            'nama' => $nama, 
            'nis' => $nis,
            'nisn' => $nisn,
            'no_hp' => $no_hp,
            'alamat' => $alamat
            ]
        );

        return redirect('siswa')->with('alert-success','Berhasil Menambahkan Data');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = DB::table('tb_siswa')
        ->where(['id'=>$id])
        ->get();
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $nama = $req->input('nama');
        $nis = $req->input('nis');
        $nisn = $req->input('nisn');
        $no_hp = $req->input('no_hp');
        $alamat=$req->input('alamat');

        DB::table('tb_siswa')
        ->where('id',$id)
        ->update(
            [
                'nama' => $nama, 
                'nis' => $nis,
                'nisn' => $nisn,
                'no_hp' => $no_hp,
                'alamat' => $alamat
            ]
        );

        return redirect('siswa')->with('alert-success','Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Siswa::find($id);
        $hapus->delete();
        return redirect('siswa')->with('success','Data Berhasil Dihapus');
    }
}
