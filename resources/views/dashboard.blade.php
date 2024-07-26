@extends('shared.layout')
@section('pageContent')
        @include('dashboardElements.flashMessage')
        @include('dashboardElements.shareBox')
        <hr>
        @include('dashboardElements.ideas')
@endsection
