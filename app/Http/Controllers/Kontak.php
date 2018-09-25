<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKontak;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelKontak::all();
        return view('kontak',compact('data'));
    }

    public function isAdmin()
    {
        $data = ModelKontak::all();
        return $this->admin; 
    }

    public function indexAPI()
    {
    //
    $data = \App\ModelKontak::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
        return response($res);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kontak_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $data = new ModelKontak();
       $data->nama = $request->nama;
       $data->nik = $request->nik;
       $data->tempat = $request->tempat;
       $data->lahir = $request->lahir;
       $data->umur = $request->umur;
       $data->alamat = $request->alamat;
       $data->save();
       return redirect()->route('kontak.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    public function storeAPI(Request $request)
    {
        $nama = $request->input('nama');
        $nik = $request->input('nik');
        $tempat = $request->input('tempat');
        $lahir = $request->input('lahir');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        $data = new \App\ModelKontak();
        $data->nama = $nama;
        $data->nik = $nik;
        $data->tempat = $tempat;
        $data->lahir = $lahir;
        $data->umur = $umur;
        $data->alamat = $alamat;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
        return response($res);
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

    public function showAPI($id)
    {
        $data = \App\ModelKontak::where('id',$id)->get();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
        return response($res);
        }
        else{
            $res['message'] = "Failed!";
        return response($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = ModelKontak::where('id',$id)->get();

        return view('kontak_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = ModelKontak::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->tempat = $request->tempat;
        $data->lahir = $request->lahir;
        $data->umur = $request->umur;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
    }

    public function updateAPI(Request $request, $id)
    {
        //
        $nama = $request->input('nama');
        $nik = $request->input('nik');
        $tempat = $request->input('tempat');
        $lahir = $request->input('lahir');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        $data = \App\ModelKontak::where('id',$id)->first();
        $data->nama = $nama;
        $data->nik = $nik;
        $data->tempat = $tempat;
        $data->lahir = $lahir;
        $data->umur = $umur;
        $data->alamat = $alamat;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
        return response($res);
        }
        else{
            $res['message'] = "Failed!";
        return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = ModelKontak::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyAPI($id)
    {
        $data = \App\ModelKontak::where('id',$id)->first();

        if($data->delete()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
        return response($res);
        }
        else{
            $res['message'] = "Failed!";
        return response($res);
        }
    }

    public function ImportCSV(Request $request)
    {
        if($request->file('imported-file'))
      {
        $path = $request->file('imported-file')->getRealPath();
        $data = \Excel::load($path, function($reader)
        {
            })->get();

        if(!empty($data) && $data->count())
        {
          foreach ($data->toArray() as $row)
          {
                if(!empty($datas))
                {
                    ModelKontak::insert($datas);
                return back();
                }
          }
        }
      }
    }

    public function exportCSV()
    {
      $datas = ModelKontak::all();
      $data = \Excel::create('kontak', function($excel) use($datas) {
          $excel->sheet('ExportFile', function($sheet) use($datas) {
              $sheet->fromArray($datas);
          });
      })->export('xls');


    }

}
