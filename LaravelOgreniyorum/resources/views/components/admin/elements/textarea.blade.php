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
    <textarea
        cols="{{$cols ?? '30'}}"
        rows="{{$rows ?? '10'}}"
        id="{{$id}}"
        class="form-control {{ $inputclasses ?? '' }}"
        placeholder="{{ isset($placeholder) ? $placeholder : (isset($label) ? $label : '') }}"
        {{isset($isDisabled)&& $isDisabled ? "disabled" : ""}}
        style="{{$style??''}}"
    >
        {{$defaultValue ?? ''}}</textarea>

    @if(isset($isLabelAfter) && $isLabelAfter)
        @isset($label)
            <label for="{{$id}}" class="mb-2 {{ $labelClasses ?? '' }}"> {{$label}}</label>
        @endisset
    @endif
</div>
