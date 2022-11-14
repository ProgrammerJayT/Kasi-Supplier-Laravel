@extends('components.' . $user . '-layout')
@section('image-path', $image)
@section('username', $name)
@section('title', 'Checkout')

@section('body')
    @livewire('checkout')
@endsection
