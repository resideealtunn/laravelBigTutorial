{{--eğer kontollere ihityaç varsa class kullanmak mantıklıdır.--}}
{{--<input text="{{$type ?? 'text'}}" placeholder="{{$placeholder ?? ''}}" {{$attributes}}>--}}
{{--bu blade'in çağrımını index.blade içinde yaptık--}}

{{--bu ekrana da class içinde kullanılan şartlar yazılabilir ancak class kullanmka daha düzenli bir sistem oluştururken classız kullnım daha düzensizdir--}}
{{--@php
$types=["radio", "text"];
if(in_array($type,$types))
    {

    }
@endphp--}}


{{--merge işlemi
<input type="{{$type ?? 'text'}}" placeholder="{{$placeholder ?? ''}}" {{$attributes->merge(['class'=>$attributes['class'].$color])}}>--}}
{{--example 2   şart ile merge--}}
<input type="{{$type ?? 'text'}}" placeholder="{{$placeholder ?? ''}}" {{$attributes->class(['bg-success'=>$error, "text-white"=> $error])}}>
