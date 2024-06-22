<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\MediaModel;

class MediaController extends BaseController
{
    private $mediaModel;

    public function __construct()
    {
        helper(['url']);
        
        $this->mediaModel = new MediaModel();
    }

    public function create() {
        return view('media/create');
    }

    public function store() {

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
        ];

        $this->mediaModel->save($data);

        return redirect()->to('/media');
    }

    public function index() {
        $data['media'] = $this->mediaModel->findAll();

        return view('media/index', $data);
    }
}
