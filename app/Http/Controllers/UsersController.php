<?php

namespace App\Http\Controllers;

use App\RepositoryInterface\UsersRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    private $userRepository;

    public function __construct(UsersRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){
        $users = $this->userRepository->all();
        return view('welcome',['users'=>$users]);
    }

    public function store(Request $request){
        $user = $this->userRepository->create($request->all());
        return redirect()->back()->with('success_message','User has been saved successfully');
    }
}
