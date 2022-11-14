@extends('components.' . $user . '-layout')
@section('title', 'My orders')
@section('username', $name)
@section('image-path', $image)

@section('body')
    @livewire('orders')
@endsection
