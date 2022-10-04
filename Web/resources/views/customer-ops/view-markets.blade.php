@extends('components.customer-layout')

@section('title', 'Marketplace')

@section('body')

    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="padding: 20px;">
            <h2 class="text-light mb-0"
                style="color: var(--white-color);font-size: 32px;font-family: 'Alegreya Sans', sans-serif;">Markets
            </h2>
        </div>
    </div>

    @livewire('customer-market')
