<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User ;
use App\Exports\UsersExport ;
use App\Imports\UsersImport;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.index' , ['users'=>$users]);
    }
    public function export(Request $request)
    {
        // return Excel::download(new ProductsExport(), 'products-'.date('Y-m-d').'.pdf', \Maatwebsite\Excel\Excel::MPDF);
        return Excel::download(new UsersExport(), 'users-'.date('Y-m-d').'.xlsx', \Maatwebsite\Excel\Excel::XLSX);
        
    }
    public function create(){
        return view('users.create');
    }
    public function store()
    {
        return redirect()->route('users.index');

    }
    public function destroy($user) 
    {
        // $user = User::find($user);
        // $user->delete();
        User::where('id', $user)->delete();
        return redirect()->route('users.index');
    }
    public function import(Request $request) 
    {
        $file = $request->file('users');

        Excel::import(new UsersImport,  $file);
        
        return redirect('/')->with('success', 'All good!');
    }
}
