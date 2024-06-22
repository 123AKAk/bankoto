<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLoginController;

class AuthController extends ShieldLoginController
{
    public function index()
    {
        //
    }

    public function register() {
        return view('auth/register');
    }

    public function registerSubmit() {
        $users = auth()->getProvider();

        $result = $users->register([
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ]);

        if ($result->hasError()) {
            return redirect()->back()->withInput()->with('errors', $result->getErrors());
        }

        return redirect()->to('/login');
    }

    public function login() {
        return view('auth/login');
    }

    public function loginSubmit() {
        $credentials = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        $result = auth()->attempt($credentials);

        if (! $result->isOK()) {
            return redirect()->back()->withInput()->with('errors', "Unable to Login");
        }

        return redirect()->to('/dashboard');
    }

    public function logout() {
        auth()->logout();
        return redirect()->to('/login');
    }
}
