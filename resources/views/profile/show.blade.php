<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app')

@section('content')
<div>
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->profile->bio }}</p>
    <a href="{{ $user->profile->website }}">{{ $user->profile->website }}</a>
</div>
@endsection
