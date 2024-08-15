<?php

use App\Http\Controllers\ArticleControllers;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*Route::get('/', function () {
    return view('front.index');
});


Route::get('/home', function () {
    return view('index');
});
Route::get( '/anasayfa' , [\App\Http\Controllers\HomeController::class, "index"]); bunu bu şekilde yazabiliriz yada \App\Http|Controllers\HomeController bu kısmı use ile yukarıda tanımlayabilirz
Route::get('/anasayfa'  ,"HomeController@index");*/



/*Route::get('/' , function(){return view("front.index");})->name("home");
Route::get('/about' , function(){
    return view("front.about");
})->name("about");*/


/*Route::get('/', "HomeController@index")->name("home");
Route::get("/about", "HomeController@about")->name("about");
Route::get("/contact", "HomeController@contact")->name("contact");*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/contact',[ContactController::class, 'showForm'])->name('contact');
Route::post("/contact",[ContactController::class, 'contact']);
//Route::post("/user/{id}" ,[ContactController::class ,'user'])->name("user")->where("id","[0-9]+") ;
//zorunlu pm ataması , where içi 0-9 arası değer kabul edebilir demek, aksi halde hata verir
Route::post("/user/{id}/{name}/{cepno?}" ,[ContactController::class ,'user'])->name("user")->where(["id"=>"[0-9]+","name"=>"[a-z]+"]) ;
//eğer opsiyonel değişken atanıyorsa ? ile atanır cepno değişkeni gibi

Route::match(['get','post'],"/support-form" ,[\App\Http\Controllers\SupportFormController::class, 'support'])->name('support-form.support');
//post ile çekmek istediğimizde dolu form gönderilmek zorunludur, eğer get yada post kullanımı uyumuysa match ile cekilebilir

Route::patch("/users/{id}/guncelle", [UserController::class,'update'])->name("user.update");
Route::put("/users/{id}/tumunu-guncelle", [UserController::class,'updateAll'])->name("user.updateAll");
Route::delete('users/{id}/sil',[UserController::class,'delete'])->name("user.delete");
/*patch->kullanıcının sadece bir bilgisi güncellenmek istendiğinde kullanılır
put->tüm bilgiler güncellenmek istendiğinde kullanılır*/


Route::any(/**
 * @return void
 */ "hersey", function (){
    dd("any metodu icine get post vs herseyi alabilir");
});

Route::resource("article",'ArticleControllers');
//~~~Terminal Komutu~~~ php artisan make:controller ArticleControllers --resource
Route::apiResource("api/article",'Api/ArticleController');
//~~~Terminal Komutu~~~ php artisan make:controller Api/ArticleController  --api


Route::get("/users/{id}", [UserController::class,'show'])->name("user.show")->whereNumber("id");
//whereNumber fonksiyonu içindeki argümanın değerinin sadece int olabileceği durumlar içindir

Route::get("/users/{name}", [UserController::class,'showName'])->name("user.showName")->whereAlpha("name");
//whereAlpha fonksiyonu içindeki argümanın değerinin sadece harflerden olabileceği durumlar içindir
//whereAlphaNumeric ile hem sayı hem harf alabileceği durumlarda kullanılır

Route::get("/user/{role}",[UserController::class,"roleCheck"])->name("user.roleCheck")->whereIn('role',['admin','user','reshide']);
//role değeri için ya admin ya user ya reshide geçerlidir, başka bir değer girilirse kabul etme

Route::prefix("admin")->group(function (){
    Route::get("/create-article" , [ArticleControllers::class,"create"])->name("admin.create");
    Route::get("/edit-article",[ArticleControllers::class,"edit"])->name("admin.articleEdit");
    Route::get("/article/{id}/delete",[ArticleControllers::class,"destroy"])->name("admin.articleDestroy");
});

Route::controller(\UserController::class)->prefix("reshide")->group(function (){
    Route::get("/get-user" , "getUser");
    Route::get("/delete-user", "deleteUser");
});

/*Eğer bir dosyanın daha hızlı okunması isteniyorsa cache'leme yapılır.
cache yani önbellek ramin üstündedir ve php (harddiskte)den daha hızlı okunur
route'u cache'lemek için
php artisan route:cache komutu kullanılır
cache'lenen dosyanın cache işlemini iptal etmek için php artisan:clear kullanılır
php artisan route:clear ile route'un cache'i clearlanır
php artisan view:clear
php artisan optimize ->kodun tamamını optimize eder
php artisan config:clear -> configurasyon dosyalarını, laravelin arkaplanda değiştirdiği yerleri temizler
*/



