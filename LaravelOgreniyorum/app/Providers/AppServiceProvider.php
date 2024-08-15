<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Blade::directive("auresMethod", function ($value=null){
            $value=str_replace('"', '',$value);
            $value=str_replace("'","",$value);
            $value=strtoupper($value);

            $methods=['DELETE','PUT','PATCH'];
            if(!in_array($value,$methods)){
                return "";
            }
            //else
            $element='<input type="hidden" value="'.$value.'">';
            return $element;
        });
    }
}
/*Directive oluşturmak için Providerlarımız var
AppServiceProvider uygulamamız ayağa kalktıgında çalısan ana alanlardan bir tanesidir
App Applicationdan gelir
Herhangi bir servis kaydedilmek istendiğinde register() kullanılır
Herhangi bir servis hazırlanırken de boot() function kullanılır*/
