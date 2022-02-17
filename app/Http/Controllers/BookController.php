<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index(){
        $data = Book::with('rak')->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    public function available(){
        $data = Book::with('rak')->where('stok', '>','0')->get();

        return response()->json([
            'success' => true,
            'total' => $data->count(),
            'data' => $data
        ]);
    }
    public function get_buku($id){
        $data = Book::with(['rak'])->where('id',$id)->first();
        if(!$data){
            return response()->json([
                'success' => false,
                'messagge' => 'Data not found'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    public function get_rak(){
        $data = Rak::get();

        $buku = [];
        $i = 0;
        foreach($data as $book){
            $buku[$i] = $book;
            $jumlah =  Book::where('rak_id',$book->id)->count();
            $buku[$i]['jumlah'] = $jumlah;
            $i++;
        }
        return response()->json([
            'success' => true,
            'total' => $data->count(),
            'data' => $buku
        ]);
    }
    public function get_rak_available($id){
        $data = Book::with(['rak'])->where('rak_id',$id)->where('stok','>','0')->get();
        return response()->json([
            'success' => true,
            'total' => $data->count(),
            'data' => $data
        ]);
    }
    public function rak($id){
        $data = Book::with(['rak'])->where('rak_id',$id)->get();

        return response()->json([
            'success' => true,
            'total' => $data->count(),
            'data' => $data
        ]);
    }
    public function get_book($id){
        $data = Book::with(['rak'])->where('id',$id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'kode' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'rak_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }


        $data = Book::create([
            'kode' => $request->kode,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok,
            'rak_id' => $request->rak_id
        ]);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'code' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'rak_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors);
        }

        $update = Book::where('id',$id)->update([
            'code' => $request->code,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok,
            'rak_id' => $request->rak_id
        ]);

        return response()->json([
            'success' => true,
            'data' => $update
        ]);
    }
    public function delete($id){
        $data = Book::findOrFail($id);

        $data->delete();
        return response()->json([
            'success' => true
        ]);
    }
}
