@props(['title', 'price', 'description' => '', 'popular' => false, 'features' => [], 'featured' => null, 'items' => null])

@php
    $isPopular = $featured ?? $popular;
    $featureList = $items ?? $features;
@endphp

<article class="relative flex h-full flex-col rounded-2xl border p-7 {{ $isPopular ? 'border-amber bg-espresso text-white shadow-soft' : 'border-espresso/10 bg-white' }}">
    @if ($isPopular)
        <span class="absolute right-6 top-6 rounded-full bg-amber px-3 py-1 text-xs font-bold uppercase tracking-wider text-white">Most loved</span>
    @endif
    <p class="text-sm font-bold uppercase tracking-[0.16em] {{ $isPopular ? 'text-amber' : 'text-terracotta' }}">{{ $title }}</p>
    <p class="mt-5 font-display text-4xl font-bold">{{ $price }}<span class="font-sans text-sm font-medium opacity-60"> / package</span></p>
    <p class="mt-4 min-h-14 leading-7 {{ $isPopular ? 'text-white/65' : 'text-espresso/60' }}">{{ $description }}</p>
    <ul class="mt-6 space-y-3 border-t pt-6 text-sm {{ $isPopular ? 'border-white/15' : 'border-espresso/10' }}">
        @foreach ($featureList as $item)
            <li class="flex gap-3"><svg class="mt-0.5 h-4 w-4 shrink-0 text-amber" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="m5 12 4 4L19 6"/></svg><span>{{ $item }}</span></li>
        @endforeach
    </ul>
    <x-button href="#order" variant="{{ $isPopular ? 'primary' : 'outline' }}" class="mt-8 w-full">Choose package</x-button>
</article>
