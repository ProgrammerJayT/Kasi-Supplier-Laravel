@extends('components.vendor-layout')
@section('username', $name)
@section('image-path', $image)

@section('title', 'My products')

@section('body')
    @livewire('edit-item')
@endsection
