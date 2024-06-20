<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }
    public function all(){
        $users=User::all();

        return view('users.all',[
            'users'=>$users,
        ]);
    }

    public function edit($id){

        $authUser = Auth::user();
        $user=User::find($id);
        $role = $user->roles[0]->pivot->role_id;

        if($authUser->roles[0]->title=='Admin' || $authUser->id==$user->id){
            return view('users.edit',[
                'user'=>$user,
                'role'=>$role,
            ]);
        }
        else{
            return redirect('/users/error');
        }

       
    }

    public function update($id)
    {
        $user = User::find($id);
        
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save(); 
        $user->roles()->sync([request('role_id')]);

        return redirect('/users/all');
    }

    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();

        return redirect('/users/all');
    
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    
    }

    public function error()
    {
        return view('pages.error');
    
    }
}
