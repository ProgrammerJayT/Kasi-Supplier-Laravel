@extends('components.' . $user . '-layout')

@section('title', 'Shopping')
@section('username', $name)
@section('image-path', $image)

@section('body')
    @livewire('shopping', [
        'user' => $user,
    ])
@endsection
