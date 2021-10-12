<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Validation;
use App\User;
use App\Travel;
use Hash;
use Auth;

class HomeController extends Controller
{
 
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        return view('fe.index');
    }

    public function Detailtravel()
    {
        $data = Travel::all();
        return view('fe.travel', compact($data));
    }

    public function join()
    {
        return view('fe.join');
    }

    public function login()
    {
        return view('fe.login');
    }

    public function prosesLogin(Request $req)
    {
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];

        Auth::attempt($data);
        
        if(Auth()->user()->level=="admin"){
            // echo "Masuk Admin";
            return redirect('/admin');
        }elseif(Auth()->user()->level=="user"){
            // echo "Masuk User";
            return redirect('/home');
        } else{
            echo "Email atau password salah";
        }

    }

    public function logout()
    {
       Auth::logout();
       return redirect('/');
    }


    public function register()
    {
        return view('fe.register');
    }

    public function prosesRegister(Request $req)
    {
        // return $req;
        // $req->validation([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|match'
        // ]);

        $data = new User;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $data->level = "user";
        $data->save();

        Alert::success('Success', 'Registrasi Success');
        return redirect('/login');

    }


}
