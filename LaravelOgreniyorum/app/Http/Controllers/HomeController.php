<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Add this line

class HomeController extends Controller
{
    public function index(){
        //Controller'dan view'e veri gönderme
        $age=28;

        $person= new \stdClass();   //php'de obje oluşturma şekli
        $person->age=$age;
        return view("front.index",compact('person'));


        return view("front.index",["age"=>$age]);
        /*return view("front.index", compact("age"));
        return view("front.index")->with("age",$age)->with("reshide","altun");
        return view("front.index")->with(['age'=>$age , 'reshide'=>"altun"]);*/
    }
    public function about()
    {
        //return redirect(route("contact"));      //redirect:yönlendirme
        //return redirect()->route("contact");
        return Redirect::route("contact");

    }
    public function contact(){
        return view("front.contact");
    }
}




