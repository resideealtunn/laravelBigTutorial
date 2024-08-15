@extends("layouts.front")

@section("css")

@endsection

@section("icerik")

{{--    1-18 ARASI VİDEO NOTLARI--}}

{{--    <form action="" method="POST">
        @csrf
        --}}{{--        @method('DELETE')--}}{{--
        @auresMethod("delete")      --}}{{--yeni ekklediğimiz bu metodun renginin beyaz olmaması için settings->php->blade->directive->+ --}}{{--
        --}}{{--        appserviceprovider'da upper yaptık--}}{{--
        <input type="text" name="fullname">
        <button type="submit">Gönder</button>
    </form>
    <hr>
    İçerik Alanı
    <hr>
    --}}{{--Controllerdan viewe veri aktarımı--}}{{--
    Gelen Yaş Değeri : {{$age ?? "yaş değeri gönderilmedi"}} --}}{{-- {{}} bunun içine yazılan echo ile yazdırma gibidir--}}{{--
    --}}{{--    ?? ile if else yapısı oluşturulmuştur--}}{{--
    <hr>
    Gelen 2.Değer : {{$reshide ?? "değer gelmedi"}}
    <hr>
    Gelen 3. Değer : {{ $age ?? @$person->age }};
    <hr>
    Gelen 4. Değer : {{$reshide ?? @$person->age}};     --}}{{--bu satırda kullanılan @ hatayı göstermeden try catch gibi davranıyor--}}{{--
    <hr>
    @if(isset($person)&& isset($person->age))
        --}}{{--Directive İf}}             --}}{{--isset: varsa anlamındadır--}}{{--
        @switch($person->age)
            @case(10)
                cocuk
                @break
            @case(20)
                genc
                @break
            @default
                yaslandın
        @endswitch
    @else
        gelmedi
    @endif
    <hr>--}}


{{-- 19 - VİDEOLAR --}}

{{--<hr>
component çağrılırken x yapısı kullanılır
--}}{{--<x-input-text></x-input-text>    bu ifadenin orijinali budur, biz burada böyle kullanmicaz direkt kapatcaz--}}{{--
--}}{{--    <x-input-text :type="'submit'"  />--}}{{--

@php                    //<?php bu görevi görür
$placeholder="Ad Soyad Giriniz";
$color="danger";
@endphp
<x-inputtext :type="'text'" :placeholder="$placeholder" class="bg-warning"/>
<x-inputtext2 :type="'text'" :placeholder="$placeholder" class="bg-" :color="$color"  :error="true"/>

--}}{{--class oluşturulmadan yani app/view/components/inputtext.php oluşturulmadan component kullanılabilir. input-text-2 örnektir--}}{{--

<hr>--}}


{{--component oluşturmaktaki amaç kod tekrarından kurtulmak ve bir yapıyı tekrar tekrar kullanabilmektir
<x- yapısı component çağrılırken kullanılır--}}

{{--<x-article>
    <x-slot name="title">Makale 1</x-slot>
    <hr>
    --}}{{--slot un 2. bi kullanımı da şöyledir; --}}{{--
    <x-slot:title2>Makale 2</x-slot:title2>
    <hr>
    <x-slot name="content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eum fugiat impedit optio possimus, quas quibusdam rerum sequi ut voluptate?
    </x-slot>
</x-article>--}}

@endsection

@section("js")
    {{--    /*içerik bolumu*/--}}
@endsection
