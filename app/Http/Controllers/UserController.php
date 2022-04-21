<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) 
    {
        return $this->userRepository = $userRepository;
    }

    public function register(request $request) {
        return $this->userRepository->register($request);
    }

    public function login(Request $request){
       return $this->userRepository->login($request);
    }
}

