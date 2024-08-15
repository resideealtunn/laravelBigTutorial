<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Inputtext extends Component
{
    /**
     * Create a new component instance.
     */
    public const TYPES= ['text','checkbox','submit'];           //const değişken tanımlarken $ işareti kullanmıyoruz
    public function __construct(public string $type, public string $placeholder)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string           //string ifadesi html dönmekten gelir
    {
        if(in_array($this->type,self::TYPES)){
            return view('components.inputtext');
        }
        return "";
        //dd($this->type);
        //render: oluşturma süreci
//        return "<div>reshide</div>";      render edilirken istenirse html kodu da dönülebilir
        //return view('components.inputtext');
    }
}
