@extends('components.' . $user . '-layout')
@section('title', 'Wishlist')
@section('username', $name)
@section('image-path', $image)

@section('body')
    @livewire('wishlist')
@endsection
