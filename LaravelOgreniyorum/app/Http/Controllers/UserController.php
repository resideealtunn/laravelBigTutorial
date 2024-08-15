<?php

namespace App\Http\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function update(Request $request)
    {
        dd($request->all());
    }
    public function updateAll(Request $request)
    {
        dd($request->all());
    }
    public function delete(Request $request){
        dd("Silinecek User İd:".$request->id);
    }
    public function show(Request $request,$id){
        dd($id);
    }
    public function showName(Request $request,$name){
        dd($name);
    }
    public function roleCheck($role){
        dd($role);
    }
}
