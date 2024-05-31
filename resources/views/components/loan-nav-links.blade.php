@props(['currentScheme'])

@php
$loanSchemes = config('loan_schemes');
@endphp

@foreach ($loanSchemes as $scheme => $sections)
    @if ($scheme === $currentScheme)
        @foreach ($sections as $section)
            <x-nav-link :href="route('loan.view', ['scheme' => $scheme, 'view' => $section['slug']])" :active="request()->routeIs($scheme . '.*')">
                {{ __($section['name']) }}
            </x-nav-link>
        @endforeach
    @endif
@endforeach
