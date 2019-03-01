<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function importUsers(UsersRequest $request)
    {
//        $request->validated();

        dd($request->all());
        dd(111);
    }
}
