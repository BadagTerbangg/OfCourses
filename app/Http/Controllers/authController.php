<?php
namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Http\Request;
use illuminate\support\Facades\Hash;

 function user(Request $request){
    return response()->json($request->user());
}

 function login(Request $request){
    $request->validate([
        'email' => 'required|string|string|email',
        'password' => 'required|string',
    ]);
}