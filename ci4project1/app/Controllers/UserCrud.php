<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $userObj = new UserModel();

        $data['myusers'] = $userObj->orderBy('id', 'DESC')->findAll();

        return view('user_display', $data);
    }
}
