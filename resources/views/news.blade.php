@extends('layouts.app')

@section('content')
    @guest
    News for users that are not logged in. TBA.
    @else
    News for users that are logged in. TBA.
    @endguest
@endsection