@extends('layout.base-home')

@section('main-content')
@include('partials.card-selected')

{{-- <x-single-card :title="{{$card['title']}}" :price="{{$card['price']}}"/> <--BUGGED COMPONENT --}}

@endsection