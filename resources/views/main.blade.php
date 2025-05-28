@extends('layout')

@section('content')
    <main class="main">
        @include('components.navbar')   
        @include('components.stats')
        @include('components.charts-LP')
    </main>
@endsection