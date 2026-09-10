@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'a',
])

@php
    $variants = [
        'primary' => 'bg-amber text-white shadow-lg shadow-amber/20 hover:bg-terracotta focus-visible:ring-amber',
        'secondary' => 'border border-espresso/15 bg-white text-espresso hover:border-amber hover:text-amber focus-visible:ring-amber',
        'dark' => 'bg-espresso text-white shadow-lg shadow-espresso/20 hover:bg-terracotta focus-visible:ring-espresso',
        'light' => 'bg-white text-espresso shadow-lg shadow-espresso/10 hover:bg-oat focus-visible:ring-white',
        'outline' => 'border border-espresso/20 bg-transparent text-espresso hover:border-amber hover:text-amber focus-visible:ring-amber',
    ];
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-5 py-3 text-sm',
        'lg' => 'px-6 py-3.5 text-base',
    ];
    $classes = 'inline-flex items-center justify-center rounded-xl font-semibold tracking-wide transition duration-200 hover:-translate-y-0.5 active:scale-[0.97] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

@if ($type === 'button')
    <button type="button" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@endif
