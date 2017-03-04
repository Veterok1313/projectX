@extends('layouts.app')
@section('page_content')
    <div class="page-container">
        @include('tree::breadcrumbs')

        <h1 class="page-title">@yield('h1', @$meta->h1)</h1>

         @yield('content')
    </div>
@endsection