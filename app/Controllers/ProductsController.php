<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


use App\Models\ProductModel;

class ProductsController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        helper(['url']);
        
        $this->productModel = new ProductModel();
    }

    public function store() {

        helper(['form']);
        $productModel = $this->productModel;

        $rules = [
            'name'   => 'required',
            'title' => 'required',
            'description'   => 'required',
            'category' => 'required',
            'tag'   => 'required',
            'size' => 'required',
            'sku_id'   => 'required',
            'colour' => 'required',
        ];
    
        if ($this->request->getMethod() === 'POST') {
            if ($this->validate($rules)) {
 
                $data = [
                    'name' => $this->request->getPost('name'),
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'category' => $this->request->getPost('category'),
                    'tag' => $this->request->getPost('tag'),
                    'size' => $this->request->getPost('size'),
                    'weight' => $this->request->getPost('weight'),
                    'sku_id' => $this->request->getPost('sku_id'),
                    'colour' => $this->request->getPost('colour'),
                ];

                if ($productModel->save($data))
                {
                    session()->setFlashdata('success', 'Product created successfully.');
                    return redirect()->to(base_url('product/add'));
                }

                session()->setFlashdata('error', 'Failed to save Product data.');
                return redirect()->to(base_url('product/add'));
            }

            // Print validation errors
            $validation = \Config\Services::validation();
            session()->setFlashdata('validation_errors', $validation->getErrors());
        }
    
        return redirect()->to(base_url('product/add'));
    }

    public function add() {
        return view('productAdd');
    }

    public function index() {
        $data['products'] = $this->productModel->findAll();

        return view('product', $data);
    }
}
