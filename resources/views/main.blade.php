@extends('layout')

@section('content')
    <main class="main">
        @include('components.navbar')   
        @include('components.card-main')
        @include('components.charts')
    </main>
@endsection