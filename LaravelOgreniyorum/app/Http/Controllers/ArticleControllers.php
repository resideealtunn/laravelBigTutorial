<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //genelde listeleme iişlemi için
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formu ekrana göstermek için
        return view("admin.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //bir tane veri kaydetmek
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //herhangi bir veriyi göstermek istediğimiz zaman
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id="0")
    {
        //formun içinde veriyi görmek için
        return view("admin.articles.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //edit fonksiyonunda gelen veriyi guncelleme
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //silme işlemi
        dd("$id değeri silindi");
    }
}
