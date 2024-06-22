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

    public function store() {

        helper(['form']);
        $mediaModel = $this->mediaModel;

        $rules = [
            'name'   => 'required',
            'description' => 'required',
            'category' => 'required',
            'image'   => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
        ];
    
        if ($this->request->getMethod() === 'POST') {
            if ($this->validate($rules)) {
                $imageFile = $this->request->getFile('image');
    
                if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                    $imageName = $imageFile->getRandomName();
                    $imageFile->move(ROOTPATH  . 'public/uploads', $imageName);

                    $data = [
                        'name' => $this->request->getPost('name'),
                        'description' => $this->request->getPost('description'),
                        'category' => $this->request->getPost('category'),
                        'image'   => $imageName,
                    ];
    
                    if ($mediaModel->save($data))
                    {
                        session()->setFlashdata('success', 'Media created successfully.');
                        return redirect()->to(base_url('media'));
                    }

                    session()->setFlashdata('error', 'Failed to save Media data.');
                    return redirect()->to(base_url('media'));

                }
                
                session()->setFlashdata('error', 'Failed to upload file.');
                return redirect()->to(base_url('media'));
            }

            // Print validation errors
            $validation = \Config\Services::validation();
            session()->setFlashdata('validation_errors', $validation->getErrors());
        }
    
        return redirect()->to(base_url('media'));
    }

    public function index() {
        $data['media'] = $this->mediaModel->findAll();

        return view('media', $data);
    }
}
