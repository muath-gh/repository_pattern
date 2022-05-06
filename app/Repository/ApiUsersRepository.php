<?php

namespace App\Repository;

use App\RepositoryInterface\UsersRepositoryInterface;
use Illuminate\Support\Facades\Http;

class ApiUsersRepository implements UsersRepositoryInterface
{

    private $url = "http://localhost:3000/";

    public function all()
    {
      $response = Http::get($this->url ."allUsers");
      $users = $response->body();
      $users = json_decode($users);
      return $users;
    }

    public function create($attributes)
    {
        $response = Http::post($this->url."createUser",$attributes);
        $user = $response->body();
        $user = json_decode($user);
        return $user;
    }
}
