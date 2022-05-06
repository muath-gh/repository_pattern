<?php 
namespace App\Repository;

use App\Models\User;
use App\RepositoryInterface\UsersRepositoryInterface;

class DBUsersRepository implements UsersRepositoryInterface{

     public function all()
     {
         return User::all();
     }

     public function create($attributes)
     {
         return User::create($attributes);
     }

}