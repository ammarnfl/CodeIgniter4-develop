<?php
namespace App\Controllers;
use App\Models\Account;
class RegisterController extends BaseController
{
    public function register()
    {
        return view('register'); // Menampilkan form register
    }
    
    public function register_action()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $fullname = $this->request->getPost('fullname');
    
        // Cek apakah username sudah ada
        $accountModel = new Account();
        if ($accountModel->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username sudah digunakan.');
        }
    
        // Simpan ke database dengan hashing MD5
        $accountModel->insert([
            'username' => $username,
            'password' => md5($password),
            'fullname' => $fullname,
        ]);
    
        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }
}
