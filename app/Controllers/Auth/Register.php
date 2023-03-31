<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;

class Register extends BaseController
{

    protected $configs;

    public function __construct()
    {
        $this->configs = config('Blog');
    }

    public function index()
    {
        $model = model('CountriesModel');

        return view('Auth/register',[
            'countries'=> $model->findAll()
        ]);
    }

    public function store()
    {

        $data = [
            'email' => 'b.lizzars.jf@gmail.com',
            'password' => '123456',
            'name' => 'jhonatan',
            'surname' => 'flores',
            'id_country' => 1
        ];

        $user = new User($data);
        $user->generateUsername();


        $model = model('UserModel');
        $model->withGroup($this->configs->defaultGroupUser);

        $userInfo = new UserInfo($data);
        $model->addInfoUser($userInfo);

        $model->save($user);

        return view('Auth\register');
    }
}
