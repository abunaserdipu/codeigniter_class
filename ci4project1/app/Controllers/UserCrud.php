<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $userObj = new UserModel();

        $data['myusers'] = $userObj->orderBy('id')->findAll();
        // echo "<pre>";
        // print_r($data);
        return view('user_display', $data);
    }

    public function create()
    {
        return view('user_create');
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'name' => 'required',
            'email' => 'required'
        ];
        if ($this->validate($rules)) {
            $userObj = new UserModel();
            $data['name'] = $this->request->getVar('name');
            $data['email'] = $this->request->getVar('email');
            $userObj->insert($data);
            $this->response->redirect('/users');
        } else {
            $data['validation'] =  $this->validator;
            return view('user_create', $data);
        }
    }

    public function delete($id)
    {
        $userObj = new UserModel();
        $userObj->where('id', $id)->delete($id);
        $this->response->redirect('/users');
    }

    public function edit($id)
    {
        $userObj = new UserModel();
        $data['user'] = $userObj->find($id);
        return view('user_edit', $data);
    }

    public function update()
    {
        $userObj = new UserModel();
        $id = $this->request->getVar('u_id');
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        $userObj->update($id, $data);
        $this->response->redirect('/users');
    }
}
