<?php

namespace App\Controllers;
use App\Models\PersonModel;
use App\Models\EmpModel;
class Person extends BaseController
{
    protected $PersonModel;
    protected $EmpModel;
    function __construct(){
        $this->PersonModel = new PersonModel();
        $this->EmpModel = new EmpModel();
    }
    public function index()
    {
        $findperson = $this->PersonModel->find();
        $findemp = $this->EmpModel->find();
  
        $data = [
            'title' => 'Person',
            'datapers' => $findperson
        ];
        return view('Person/Data',$data);
    }



    public function Create(){
        $data = [
            'title' => 'Person Create',
        ];
        return view('Person/Create',$data);
    }


    public function Save(){

        helper(['form']);
        $rules = [
            'FirstName' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Harus di isi',
                    'min_length' => 'min length 3'
                ]
            ],

            'LastName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ];

        if ($this->validate($rules)) {

            //cek
           $check =  $this->request->getvar('FirstName');
           $result = $this->PersonModel->where('FirstName', $check)->findAll();

                 if ($result > 0) {
                    return 'data tersedia';
                 }else {
                    return 'data belum tersedia';
                 }
 die();
            $data = [
                'FirstName' => $this->request->getvar('FirstName'),
                'LastName' => $this->request->getvar('LastName'),
                'address' => $this->request->getvar('address')
            ];

            $this->PersonModel->ignore(true)->insert($data);
            session()->setFlashdata('mesages','saving succces');
             return redirect()->to('/Persons');

        }else {
            $data['validation'] = $this->validator;
            $data['title'] = 'Titles';
            return view('Person/Create',$data);
        }
    }
}
