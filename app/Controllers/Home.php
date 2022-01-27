<?php

namespace App\Controllers;
use App\Models\LandingModel;

class Home extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('landing');
    }

    public function register()
    {
        helper(['form']);
        $request = service('request');
        $model = new LandingModel();

        $post = $request->getPost();
        if($post){
            $rules = [
                'txt_name' => [
                    'rules' => 'required',
                    'errors' =>  [
                        'required' => '*กรุณากรอก ชื่อ - นามสกุล'
                    ]
                ],
                'txt_phone' => [
                    'rules' => 'required',
                    'errors' =>  [
                        'required' => '*กรุณากรอกเบอร์โทร'
                    ]
                ],
                'txt_email' => [
                    'rules' => 'required|valid_email',
                    'errors' =>  [
                        'required' => '*กรุณากรอกอีเมล',
                        'valid_email' => '*รูปแบบอีเมลไม่ถูกต้อง'
                    ]
                ]
            ];

            if($this->validate($rules)){
                $data = [
                    'name' => $post['txt_name'],
                    'phone' => $post['txt_phone'],
                    'email' => $post['txt_email']
                ];
                $model->save($data);
                return redirect()->to('');
                //print_r($model->errors());
            }else{
                $data['validation'] = $this->validator;
                echo view('landing',$data);
            }
        }else{
            return redirect()->to('');
        }
    }
}
