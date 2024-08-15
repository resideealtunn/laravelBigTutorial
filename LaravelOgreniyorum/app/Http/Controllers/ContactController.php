<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showForm()
    {
        return view("front.contact");
    }

    public function contact(Request $request)
    {
        //dd($request->all());            //class kullanarak bilgi alma
        /*        dd($request->fullname);
                dd($request->email);*/

//        yardımcı fonksiyon kullanarak da alınabilir
//        dd(\request()->get("fullname"));
    }

    public function user(Request $request , int $id , int $cepno=456)        //eğer id'ye int dısında değer verilirse hata verir
    {
//        eğer opsiyonel değişken function pm olarak verilcekse bir default değer atanmak zorundadır
        //dd(gettype($id));
        dd($request->name);   //ile alınabilir

        dd($request->all());

        //    eğer id değeri fonksiyona pm olarak verilmezse
        dd($request->id);   //ile alınabilir

        //    pm olarak verilirse direkt
        // dd($id);            //ile yazılabilir
    }
}
