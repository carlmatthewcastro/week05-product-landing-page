@props(['title', 'description', 'icon' => 'coffee'])

<article class="group rounded-2xl border border-espresso/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-soft">
    <div class="mb-5 grid h-12 w-12 place-items-center rounded-2xl bg-oat text-amber transition group-hover:bg-amber group-hover:text-white">
        @switch($icon)
            @case('coffee')
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 8h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8Z"/><path d="M17 10h1a3 3 0 0 1 0 6h-2M7 4c0 1 1 1 1 2M11 4c0 1 1 1 1 2"/></svg>
                @break
            @case('bake')
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 11h14v7H5zM7 11V8a5 5 0 0 1 10 0v3M8 15h8M9 18v2M15 18v2"/></svg>
                @break
            @case('wifi')
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 9a15 15 0 0 1 18 0M6 13a10 10 0 0 1 12 0M9 17a5 5 0 0 1 6 0M12 21h.01"/></svg>
                @break
            @case('pickup')
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 6h11v11H3zM14 10h4l3 3v4h-7zM7 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM18 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>
                @break
            @case('eco')
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M19 4C9 4 5 8 5 14c0 3 2 5 5 5 6 0 9-5 9-15Z"/><path d="M5 20c2-5 5-8 10-10"/></svg>
                @break
            @default
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10Z"/><path d="M12 7v6M9 10h6"/></svg>
        @endswitch
    </div>
    <h3 class="font-display text-xl font-bold">{{ $title }}</h3>
    <p class="mt-3 leading-7 text-espresso/60">{{ $description }}</p>
</article>
