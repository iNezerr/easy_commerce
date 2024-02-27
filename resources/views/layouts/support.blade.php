@extends('layouts.app')

@section('content')

{{--    @include('partials.overlay')--}}

    <!--
      - HEADER
    -->

    @include('partials.head')

    <!--
      - MAIN
    -->
    <main>
    @yield('main-content')
    </main>





    <!--
      - FOOTER
    -->

    @include('partials.foot')


@endsection
