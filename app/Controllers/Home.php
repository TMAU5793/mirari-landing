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

    public function save()
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
                return redirect()->to('')->with('register','success');
                //print_r($model->errors());
            }else{
                $data['validation'] = $this->validator;
                echo view('landing',$data);
            }
        }else{
            return redirect()->to('');
        }
    }

    public function register()
    {
        helper(['form']);
        $request = service('request');

        $post = $request->getPost();
        if($post){
            $model = new LandingModel();            
            $rules = [
                'txt_account' => [
                    'rules' => 'required',
                    'errors' =>  [
                        'required' => '*กรุณากรอกบัญชีผู้ใช้'
                    ]
                ],
                'txt_password' => [
                    'rules' => 'required',
                    'errors' =>  [
                        'required' => '*กรุณากรอกรหัสผ่าน'
                    ]
                ]
            ];

            $data = [];
            if($this->validate($rules)){
                $user = 'mirari';
                $pwd = 'Mirari@0000';
                if($post['txt_account']==$user && $post['txt_password']==$pwd){
                    $data = [
                        'info' => $model->orderBy('created_at DESC')->paginate(25),
                        'pager' => $model->pager,
                    ];

                    session()->set('logindata',TRUE);
                }else{
                    $data['loginfail'] = 'fail';
                }
            }else{
                $data['validation'] = $this->validator;                
            }
            return view('register',$data);
        }else{
            return view('register');
        }        
    }

    public function logout()
    {
        session()->remove('logindata');
		return redirect()->to('customer');
    }
}
