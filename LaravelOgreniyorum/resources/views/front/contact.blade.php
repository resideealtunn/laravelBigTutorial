@extends("layouts.front")
@section("css")
@endsection

@section("icerik")
    İletişim Sayfası
    <hr>
    <div class="col-8 mx-auto">
    <form action="{{route("contact")}}" method="POST">
        @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
{{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        <input type="text" class="form-control" name="fullname">
        <br>
        <input type="email" class="form-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
    </div>


    <hr>
    <div class="col-8 mx-auto">
        İletişim Sayfası 2
        <hr>
        <form action="{{route("user" , ['id'=>5 , 'name'=> "malhatun", 'cepno'=>45] )}}" method="POST">
            @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>

    <hr>
    <div class="col-8 mx-auto">
        Support Form
        <hr>
        <form action="{{route('support-form.support')}} ">
            @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>

    <hr>
    <div class="col-8 mx-auto">
        User Controller Form
        <hr>
        <form action="{{route('user.update' , ['id'=>9])}} method="POST">
            @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            @method('PATCH')
{{--            <input type="hidden" name="_method" value="PATCH">--}}
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>


    <hr>
    <div class="col-8 mx-auto">
        PUT Kullanımı
        <hr>
        <form action="{{route('user.updateAll' , ['id'=>9])}} " method="POST">
            @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            @method('PUT')
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>

    <hr>
    <div class="col-8 mx-auto">
        Delete Kullanımı
        <hr>
        <form action="{{route('user.delete',['id'=>5])}} " method="POST">
            @csrf      {{--benzersiz token oluşturur, güvenlik için--}}
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            @method('DELETE')
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>
@endsection

@section("js")
@endsection


{{--@ ile başlayan şeylere directory denir--}}
