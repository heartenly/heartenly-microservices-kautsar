<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){return Account::where('gender',0)->get();}

    public function show($id){return Account::find($id);}
    public function store(Request $request){return Account::create($request->all());}
    public function update(Request $request, $id){
        $account = Account::findOrFail($id);
        $account->update($request->all());
        return $account;
    }

    public function delete(Request $request,$id){
        $account = Account::findOrFail($id);
        $account->delete();
        return 204;
        }
}
