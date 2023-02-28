@extends('layouts.main')

@section('title','Página principal - Blog')

@section('css')
@endsection


@section('content')
    <!-- Hero Content -->
    @include('partials.hero')
    <!-- END Hero Content -->

    <!-- Page Content -->
    @include('partials.content')
    <!-- END Page Content -->

    <!-- Get Started -->
    @include('partials.started')
    <!-- END Get Started -->
@endsection

@section('scripts')
@endsection
