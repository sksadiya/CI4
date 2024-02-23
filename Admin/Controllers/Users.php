<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    private  UserModel $model;

    public function __construct() {
        $this->model =new UserModel;
    }
    public function index()
    {
        $users =$this->model->orderBy('created_at')->paginate(1);

        return view("Admin\Views\Users\index" ,[
            'users' => $users,
            'pager' =>$this->model->pager
        ]);
    }
}
