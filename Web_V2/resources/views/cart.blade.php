@extends('components.' . $user . '-layout')
@section('title', ucfirst($user) . ' cart')
@section('username', $name)
@section('image-path', $image)

@section('body')
    @livewire('cart', [
        'user' => $user,
    ])
@endsection
