{{--<input type="text", placeholder="Ad Soyad">--}}
{{--<input type="{{$type}}" placeholder="Ad Soyad">--}}

{{--biz artık type diye bi değişken oluşturduk->inputtext render ve index.blade sayesinde burada bunun kullanımını gördük--}}

{{--{{$placeholder ?? "yok"}}--}}

<input text="{{$type ?? 'text'}}" placeholder="{{$placeholder ?? ''}}" {{$attributes}}>
