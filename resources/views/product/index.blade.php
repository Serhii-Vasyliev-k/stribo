@extends('layouts.app')

@section('content')

    @include('category._navigate')

<div class="main__products">

    <div class="title__block">
        <h3>{{ $currentCategory->title }}</h3>
        <h3>{{ $currentCategory->vendor }}</h3>
    </div>

    <div class="image__block">
        <img class="image" src="{{ asset('images/' . $currentCategory->image) }}" alt="">
        <div class="image__vendor">

            <div class="h3">
                {{ $currentCategory->vendor }}
            </div>

        </div>

    </div>


    <div class="chart__block">
        <div class="picture_drawing">
            <img class="drawing" src="{{ asset('drawing/' . $currentCategory->image) }}" alt="">
        </div>
    </div>
{{--    <div class="color__selector">--}}
{{--        <div class="item"></div>--}}
{{--        <div class="item"></div>--}}
{{--        <div class="item"></div>--}}
{{--    </div>--}}

    <table class="table">
        <tr>
            <td>Артикул</td>
            <td>Цена</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->vendor }}
                </td>
                <td>
                    {{ $product->price->getValue() }}
                </td>
            </tr>
        @endforeach
    </table>





    {{--From this point, the display of all product characteristics tables begins--}}
    @foreach($attributesByGroups as $tableName => $attributes)
    <table class="table">
        <caption>{{ __($tableName) }}</caption>
        <tr>
            <td>
                {{ __('Vendor') }}
            </td>
            @foreach($attributes as $attribute)
                <td>
                    {{ $attribute->name }}
                </td>
            @endforeach
        </tr>

        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->vendor }}
                </td>
                @foreach($attributes as $attribute)
                    <td>
                        @if($product->getAttributeValueById($attribute->id))
                            {{ $product->getAttributeValueById($attribute->id) }}
                        @else
                            -
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
    @endforeach



</div>

@endsection

