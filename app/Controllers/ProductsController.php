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

    public function create() {
        return view('products/create');
    }

    public function store() {

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

        $this->productModel->save($data);

        return redirect()->to('/products');
    }

    public function add() {
        return view('productAdd');
    }

    public function index() {
        $data['products'] = $this->productModel->findAll();

        return view('product', $data);
    }
}
