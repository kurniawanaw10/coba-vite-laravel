<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();

        if($barang->count() > 0){
            return response()->json([
                'status' => 200,
                'barang' => $barang
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found'
            ], 404);
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|string|max:16|unique:barang',
            'nama_barang' => 'required|string',
            'jumlah' => 'required|integer',
            'satuan' => 'required|string',
            'harga' => 'required|integer'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => '422',
                'errors' => $validator->messages()
            ], 422);
        }else{
            $barang = Barang::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'jumlah' => $request->jumlah,
                'satuan' => $request->satuan,
                'harga' => $request->harga,
            ]);

            if($barang){
                return response()->json([
                    'status' => 200,
                    'message' => "Barang Created Successfully!",
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong!",
                ], 500);
            }
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
        $barang = Barang::find($id);
        if($barang){
            return response()->json([
                'status' => 200,
                'barang' => $barang
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found!",
            ], 404);
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
        $barang = Barang::find($id);
        if($barang){
            return response()->json([
                'status' => 200,
                'barang' => $barang
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found!",
            ], 404);
        }
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
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|string|max:16|unique:barang',
            'nama_barang' => 'required|string',
            'jumlah' => 'required|integer',
            'satuan' => 'required|string',
            'harga' => 'required|integer'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => '422',
                'errors' => $validator->messages()
            ], 422);
        }else{
            $barang = Barang::find($id);
            
            if($barang){
                $barang->update([
                    'kode_barang' => $request->kode_barang,
                    'nama_barang' => $request->nama_barang,
                    'jumlah' => $request->jumlah,
                    'satuan' => $request->satuan,
                    'harga' => $request->harga,
                ]);
    
                return response()->json([
                    'status' => 200,
                    'message' => "Barang Updated Successfully!",
                ], 200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => "Data Not Found!",
                ], 404);
            }
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
        $barang = Barang::find($id);
        if($barang){
            $barang->delete();
            return response()->json([
                'status' => 200,
                'message' => "Barang Delete Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Data Not Found!"
            ], 404);
        }
    }
}
