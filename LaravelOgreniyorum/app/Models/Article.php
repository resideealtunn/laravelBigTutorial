<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';      //eğer sınıf adı tablo adyla aynı oluştutulmamışsa bu kod ile hangi tabloyla ilgili oldugu kesin verilir,
    protected $fillable = ['title', 'body','is_active','category_id','slug_name'];
    //protected $guarded=[];
    //guarded ve fillabledan biri kullanılmak zorundadır, fillable işlem yapılacak sütunları belirtmeye,
    //guarded işlem yapılmayacak sütunları bildirmeye yarar.
    public $timestamps=false;           //yazılırsa created_at ve updated_at oluşmaz
    protected $visible=['id','title','body','is_active','category_id','slug_name'];         //örneğin APİ'lerde gösterlmek istenen, karşıya verilen değişkenler visible özelliğine sahip olmalıdır
    //protected $hidden=['created_at','updated_at'];          //karşı tarafına gösterilmek istenmyeen password gibi şeyler saklanmalıdır
    //eğer tüm değişkenler kullanılabilir olsun isteniyorsa guarded=[] boş dizi tanımlanmalıdır



}
