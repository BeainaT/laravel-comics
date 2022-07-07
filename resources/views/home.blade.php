@extends('layout.base-home')

@section('title')
    DC Comics
@endsection

@section('main-content')
@dump($cards)
@include('partials.main-links')
@endsection
