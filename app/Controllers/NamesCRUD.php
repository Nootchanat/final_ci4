<?php
namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller {
    // show names list
    public function index() {
        $NameModel = new NameModel();
        $data['users'] = $NameModel->orderBy('id', 'ASC')->findAll();
        return view('namelist', $data);
    }

    // add name form
    public function create() {
        return view('addname');
    }

    // add data 
    public function store() {
        $NameModel = new NameModel();
        $data = [
            'fname' => $this->request->getVar('fname'),
            'lname' => $this->request->getVar('lname'),
            'email' => $this->request->getVar('email'),
            'time' => $this->request->getVar('time'),
            'time_n' => $this->request->getVar('time_n'),
            'time_d' => $this->request->getVar('time_d')
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/namelist'));
    }
}