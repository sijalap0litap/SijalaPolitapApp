<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
*
*/
class AuthController extends Controller
{
	public function login(){
		return view ('login');
	}

	public function LoginProses(){
		if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {

			return redirect('dashboard')->with('success', 'Login Berhasil');
		}

        if (auth()->guard('data_mahasiswa')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dashboard_mahasiswa')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('data_dosen')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dashboard_dosen')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('dataka_lab')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dashboard_ketua_lab')->with('success', 'Login Berhasil');
        }

		return redirect('login');
	}

	public function logout(){
		auth()->logout();
        auth()->guard('data_mahasiswa')->logout();
        auth()->guard('data_dosen')->logout();
        auth()->guard('dataka_lab')->logout();
		
		return redirect('login');
	}

	function test(){
		$user= new user;
		$user->nama= 'Super Admin';
		$user->username= 'admin';
		$user->password=bcrypt('admin');
		$user->save();

		return "Berhasil";
	}

}
