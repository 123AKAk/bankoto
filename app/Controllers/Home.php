<?php

namespace App\Controllers;

use Config\Services;

use App\Models\MediaModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (auth()->loggedIn())
        {
            $productModel = new ProductModel();
            $mediaModel = new MediaModel();

            $user = auth()->user();

            // Pass user data to view
            $data = [
                'userId' => $user->user_id,
                'userName' => $user->username,
                'product_count' => $productModel->countAllResults(),
                'media_count' => $mediaModel->countAllResults(),
                'product_views' => 0,
                'downloads' => 0,
            ];

            return view('dashboard', $data);
        } else {
            // User is not logged in, redirect to login
            return redirect()->to(base_url('login'));
        }
    }
}
