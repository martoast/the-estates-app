{{-- The Estates lockup (fence emblem + wordmark + "at Real del Mar").
     $variant: 'white' (default, for dark backgrounds) | 'auto' (nav: swaps
     white→ink when the bar turns solid/open). $class = height utilities. --}}
@php $variant = $variant ?? 'white'; $h = $class ?? 'h-12'; @endphp

@if ($variant === 'auto')
    <span class="relative block {{ $h }}" role="img" aria-label="The Estates at Real del Mar">
        <img src="{{ asset('images/the-estates-logo-white.png') }}" alt="" aria-hidden="true"
            class="{{ $h }} w-auto transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-0' : 'opacity-100'">
        <img src="{{ asset('images/the-estates-logo-ink.png') }}" alt="" aria-hidden="true"
            class="absolute inset-0 {{ $h }} w-auto transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-100' : 'opacity-0'">
    </span>
@else
    <img src="{{ asset('images/the-estates-logo-white.png') }}" alt="The Estates at Real del Mar"
        class="{{ $h }} w-auto">
@endif
