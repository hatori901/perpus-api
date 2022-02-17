<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jabatan' => 'admin',
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Register successfully',
            'data' => $user
        ]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json([
                'success' => false,
                'message' => 'Login failed!',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Login successfully',
            'data' => $user,
            'token' => $user->createToken('authToken')->accessToken,
        ]);
    }
    public function callback(Request $request){
        $validator = Validator::make($request->all(),[
            'nis' => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $presensi = Anggota::where('nis',$request->nis)->update([
            'kehadiran' => DB::raw('kehadiran+1')
        ]);
    }
}
