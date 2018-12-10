<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'telp' => 'required|string|max:255',
            'password' => 'required|string|min:6|',
        ]);

        DB::table('users')->insert(
            array(
                'name' => $request->input('name'),
                'username' =>  $request->input('username'),
                'telp' =>  $request->input('telp'),
                'password' => Hash::make( $request->input('password'))
            )
        );
        return redirect('admin/user');
    }
}
