<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Otoritas;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function login(Request $request){
        
    
     if( Auth::attempt([
            'username'=>$request->username ,
            'password' =>$request->password,
        ])){
            return redirect('/home')->with('success','Login Berhasil');
        }
        else{
           
            return back()->withErrors([
                'loginError' => 'The provided credentials do not match our records.',
            ]);
        }
        
        
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('dashboard');
        // }
        // echo($request->username);
        // $credentials=$request->validate(['username','password']);
        // $auth=Auth::attempt($credentials);
        // var_dump($auth);
        // die;
        // //$pengguna = Otoritas::all();
        // $pengguna = User::Where('nama','nandra maulana')->get();

       
        
        // foreach($pengguna as $us){
           
        //     echo "Nama : ".$us->nama;
        //     echo "<br>id_otoritas : ".$us->id_otoritas;
        //    // var_dump($us);
        //     echo $us->otoritas->implode('nama_otoritas');
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
