<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (auth()->loggedIn())
        {
            $user = auth()->user();

            // Pass user data to view
            $data = [
                'userId' => $user->user_id,
                'userName' => $user->username,
            ];

            return view('dashboard', $data);
        } else {
            // User is not logged in, redirect to login
            return redirect()->to(base_url('login'));
        }
    }
}
