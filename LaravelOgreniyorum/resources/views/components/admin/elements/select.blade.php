@php
    if(empty($id))          /*hem isset'i, yani olup olmadıgını hem de bos mu diye kontrol eder*/
    {
        $id=uniqid('input-');         /*uniq id oluşturmaya yarar. eşsiz id kullanılmak istendiğinde kullanılır*/
    }
@endphp


<div class="{{$parentClass ?? ''}}">
    @if((isset($isLabelAfter) && !$isLabelAfter) || !isset($isLabelAfter))
        @isset($label)
            <label for="{{$id}}" class="mb-2 {{ $labelClasses ?? '' }}"> {{$label}}</label>
        @endisset
    @endif
        <select
        class="cmb_st1">
            name="{{$name ?? ''}}"
            id="{{$id}}"
            class="form-control{{ $inputclasses ?? '' }}"
            {{isset($isDisabled)&& $isDisabled ? "disabled" : ""}}>
            @foreach($options as $key => $value)
                <option {{isset($defaultValue) && $defaultValue==$key ? "selected" : ""}}value="{{$key}}">{{$value}}</option>
            @endforeach

        </select>


        @if(isset($isLabelAfter) && $isLabelAfter)
            @isset($label)
                <label for="{{$id}}" class="mb-2 {{ $labelClasses ?? '' }}"> {{$label}}</label>
            @endisset
        @endif
</div>
