@extends("layouts.admin")
@section("css")
    .cmb_st1{
    display: block;
    width: 100%;
    height: 45px;
    }
@endsection

@section("icerik")
<x-admin.layouts.card class="w-50">

    <x-slot name="title">
        Yeni Makale Ekle
    </x-slot>


    <x-slot name="content">
        <form action="" class="w-100 text-start">
{{--        <div>
                <label for="name" class="mb-2"> Makale Adı</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Makale Adı">
            </div>--}}
            <x-admin.elements.input
                :labelClasses="'text-danger'"
                :id="'name'"
                :name="'name'"
                :inputclasses="''"
                :placeholder="'article name'"
                :isDisabled="false"
                :defaultValue="'Makale Adı'"
                :type="'submit'"
                :parentClass="''">

                <x-slot:label>
                    Makale Adı
                </x-slot:label>
            </x-admin.elements.input>


            @php
            $options=['-1'=>'Kategori Seçin',
                            '1'=>'PHP',
                            '2'=>'C#'];
             @endphp
            <x-admin.elements.select
                :labelClasses="'mb-2'"
                :id="'category'"
                :name="'category'"
                :isDisabled="false"
                :parentClass="'mt-3'"
                :options="$options"
{{--                :options="['-1'=>'Kategori Seçin'
                            '1'=>'PHP'
                            '2'=>'C#']"
                :defaultValue="'2'"--}}>
                <x-slot:label>
                    Makale Kategori
                </x-slot:label>
            </x-admin.elements.select>


            <x-admin.elements.textarea
                :labelClasses="''"
                :id="'articleContent'"
                :name="'articleContent'"
                :inputclasses="''"
                :placeholder="'Makale İçerik'"
                :isDisabled="false"
                :parentClass="'mt-3'"
                :rows="'20'"
                :style="'resize:none'">
            >
                <x-slot:label>
                    Makale İçerik
                </x-slot:label>
            </x-admin.elements.textarea>




            <x-admin.elements.input
                :type="'checkbox'"
                :name="'status'"
                :id="'status'"
                :input-classes="'me-3'"
                :default-value="'1'"
                :label-classes="'mb-2'"
                :parent-classes="'mt-3'"
                :isLabelAfter="false">          {{--chechkbox labelin sagında mı solunda mı olsun--}}
                {{--                    parent-classes ile parentClasses aynı kullanımdır--}}
                <x-slot name="label">
                    Makale Yayınlansın Mı?
                </x-slot>

                {{--                        <x-slot:labelClasses>
                                            mb-2
                                        </x-slot:labelClasses>                  bu şekilde de değişken ataması yapılabilir--}}
            </x-admin.elements.input>
            <hr>
            <x-admin.elements.input
{{--                :labelClasses="'text-danger'"--}}
                :id="'btnSave'"
{{--                :name="'name'"--}}
                :inputclasses="'btn btn-success w-100'"
{{--                :placeholder="'article name'"--}}
{{--                :isDisabled="false"--}}
                :defaultValue="'Kaydet'"
                :type="'submit'"
                :parentClass="'mt-3'">

            </x-admin.elements.input>

            <hr>

        </form>
    </x-slot>



    <x-slot name="footer">
        Lorem ipsum dolor.
    </x-slot>
</x-admin.layouts.card>
@endsection

@section("js")
@endsection
