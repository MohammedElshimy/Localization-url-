<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends BackEndController
{
    public function index(){
        $users = User::paginate(10);
        return view('back-end.users.index', compact('users'));
    }

    public function create(){
        return view('back-end.users.create');
    }

    public function store(store $request){
        $requestArray = $request->all();
        $requestArray ['password'] = Hash::make($requestArray ['password']);
        User::create($requestArray);

        return redirect()->route('users.index');
    }

    public function edit($id){
        $users = User::findOrfail($id);
        return view('back-end.users.edit',  compact('users'));
    }

    public function update($id, update $request){
        $users = User::findOrfail($id);
        $requestArray = $request->all();

        if(isset($requestArray ['password']) && $requestArray ['password'] != '' ){
            $requestArray ['password'] = Hash::make($requestArray ['password']); 
        }else {
            unset($requestArrey['password']);
        }

        $users->update($requestArray);
        return redirect()->route('users.index');
    }

    public function destroy($id){
        User::findOrfail($id)->delete();
        return redirect()->route('users.index');
    }
}
