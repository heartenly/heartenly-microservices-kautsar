<?php

namespace App\Http\Controllers;

use App\Account;
use App\DetailProfile;
use Illuminate\Http\Request;

class DetailProfileController extends Controller
{
    public function index($idUser){
        $dp = DetailProfile::where('id_account',$idUser)->get();
        $data = Account::where('id',$idUser)->get();
        $merge = array(
            "detail"    => $dp,
            "user"      => $data
        );
        return response()->json($merge);
    }
    public function show($id){return DetailProfile::find($id);}
    public function store(Request $request){return DetailProfile::create($request->all());}
    public function update(Request $request, $id){
        $account = DetailProfile::findOrFail($id);
        $account->update($request->all());
        return $account;
    }

    public function delete(Request $request,$id){
        $account = DetailProfile::findOrFail($id);
        $account->delete();
        return 204;
    }
}
