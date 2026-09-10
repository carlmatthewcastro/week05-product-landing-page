@props(['name', 'type', 'review'])

@php
    $initials = collect(preg_split('/\s+/', trim($name)))
        ->filter()
        ->take(2)
        ->map(fn ($part) => strtoupper(substr($part, 0, 1)))
        ->implode('');
@endphp

<article class="flex min-h-0 flex-col rounded-[1.35rem] border border-espresso/10 bg-white/75 p-5 shadow-sm backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-amber/30 hover:shadow-soft sm:min-h-[18rem] sm:p-7">
    <div class="flex items-center gap-3">
        <span class="grid h-12 w-12 shrink-0 place-items-center rounded-full bg-oat font-display text-lg font-bold text-amber ring-4 ring-oat/60" aria-hidden="true">{{ $initials }}</span>
        <div>
            <h3 class="font-semibold">{{ $name }}</h3>
            <p class="text-sm text-espresso/55">{{ $type }}</p>
        </div>
        <span class="ml-auto flex items-center gap-0.5 text-amber" aria-label="5 out of 5 stars">
            @for ($star = 0; $star < 5; $star++)
                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 2.78 5.63 6.22.9-4.5 4.39 1.06 6.2L12 17.2l-5.56 2.92 1.06-6.2L3 9.53l6.22-.9L12 3Z"/></svg>
            @endfor
        </span>
    </div>
    <blockquote class="mt-5 leading-7 text-espresso/70">&ldquo;{{ $review }}&rdquo;</blockquote>
</article>
