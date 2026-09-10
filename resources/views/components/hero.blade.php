<section id="home" class="overflow-hidden bg-crema">
    <div class="mx-auto grid max-w-7xl items-center gap-8 px-5 py-12 sm:gap-12 sm:py-20 lg:grid-cols-[1fr_0.9fr] lg:px-8 lg:py-24">
        <div class="max-w-2xl">
            <p class="mb-5 text-sm font-bold uppercase tracking-[0.22em] text-terracotta">Your neighborhood ritual</p>
            <h1 class="max-w-xl break-words font-display text-4xl font-bold leading-[1.08] tracking-tight sm:text-6xl lg:text-7xl">Crafted Coffee, <span class="text-amber">Artisanal Bakes,</span> Warm Moments</h1>
            <p class="mt-7 max-w-xl text-lg leading-8 text-espresso/65">Established in 2022, Shum's Cafe serves affordable Filipino comfort food, coffee, milk tea, and mixed drinks with the warm hospitality of a true neighborhood table.</p>
            <div class="mt-9 flex flex-wrap items-center gap-3">
                <x-button href="#menu" size="lg">Order Online</x-button>
                <x-button href="#specials" variant="outline" size="lg">View Daily Menu</x-button>
            </div>
            <div class="mt-10 grid max-w-xl gap-3 border-t border-espresso/10 pt-6 text-sm text-espresso/65 sm:grid-cols-2">
                <p><strong class="text-espresso">Daniel Shum</strong><br>Restaurant Owner</p>
                <p><strong class="text-espresso">Charmz Castro</strong><br>Manager &amp; Chef</p>
            </div>
            <div class="mt-6 flex items-center gap-4 text-sm text-espresso/60">
                <div class="flex -space-x-2" aria-label="Happy customer avatars">
                    <img src="{{ asset('images/food.jpg') }}" alt="Shum's Cafe meal" class="h-9 w-9 rounded-full border-2 border-crema object-cover">
                    <img src="{{ asset('images/menu.jpg') }}" alt="Shum's Cafe milk tea" class="h-9 w-9 rounded-full border-2 border-crema object-cover">
                    <img src="{{ asset('images/coffee.jpg') }}" alt="Shum's Cafe branded coffee" class="h-9 w-9 rounded-full border-2 border-crema object-cover">
                </div>
                <span><strong class="text-espresso">4.9/5</strong> from our café community</span>
            </div>
        </div>
        <div class="relative min-w-0">
            <div class="absolute inset-x-5 top-5 h-[88%] rounded-[2.75rem] border border-amber/10 bg-oat/80 sm:inset-x-8"></div>
            <article x-data="{ favorite: false, added: false }" class="group relative z-10 mx-auto w-full max-w-[34rem] overflow-hidden rounded-[2.25rem] bg-white shadow-soft ring-1 ring-espresso/10 sm:w-[86%]">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/food.jpg') }}" alt="Fresh Malaysian Bihon and toast at Shum's Cafe" class="h-full w-full object-cover object-[center_52%] saturate-[0.92] contrast-[1.04] transition duration-700 group-hover:scale-[1.04]">
                    <span class="absolute left-5 top-5 rounded-full bg-white/95 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.16em] text-amber shadow-sm">Fresh today</span>
                    <button type="button" @click="favorite = !favorite" class="absolute right-5 top-5 grid h-10 w-10 place-items-center rounded-full bg-white/95 text-amber shadow-sm transition hover:scale-105 active:scale-95 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber" :aria-label="favorite ? 'Remove from favorites' : 'Add to favorites'" :aria-pressed="favorite">
                        <svg class="h-5 w-5" :class="favorite ? 'fill-amber' : 'fill-none'" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20.84 8.61a5.5 5.5 0 0 0-9.78-3.39L12 6.17l.94-.95a5.5 5.5 0 0 1 7.9 7.65L12 21.35l-8.84-8.48a5.5 5.5 0 0 1 7.9-7.65L12 6.17"/></svg>
                    </button>
                </div>
                <div class="p-5 sm:p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-terracotta">Local favorite</p>
                            <h2 class="mt-1 font-display text-2xl font-bold text-espresso">Malaysian Bihon</h2>
                        </div>
                        <span class="shrink-0 text-lg font-bold text-amber">₱145</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between gap-3">
                        <p class="text-sm leading-6 text-espresso/60">Savory noodles, fresh vegetables, and a generous serving.</p>
                        <button type="button" @click="added = true" class="shrink-0 rounded-xl bg-espresso px-4 py-2.5 text-xs font-bold text-white transition hover:bg-terracotta active:scale-[0.97] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber" x-text="added ? 'Added' : 'Add to order'"></button>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
