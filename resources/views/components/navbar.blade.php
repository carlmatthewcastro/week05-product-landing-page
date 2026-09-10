<header x-data="{ open: false }" class="sticky top-0 z-50 border-b border-espresso/10 bg-crema/90 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8" aria-label="Main navigation">
        <a href="#home" class="flex items-center gap-3" aria-label="Shum's Café home">
            <img src="{{ asset('images/logo.jpg') }}" alt="Shum's Cafe official logo" class="h-12 w-12 rounded-full object-cover ring-2 ring-oat">
            <span class="hidden font-display text-xl font-bold tracking-tight sm:inline">Shum's Cafe</span>
        </a>
        <div class="hidden items-center gap-7 text-sm font-medium md:flex">
            <a href="#home" class="transition hover:text-amber">Home</a>
            <a href="#menu" class="transition hover:text-amber">Menu</a>
            <a href="#specials" class="transition hover:text-amber">Specials</a>
            <a href="#menu" class="transition hover:text-amber">Pricing</a>
            <a href="#testimonials" class="transition hover:text-amber">Reviews</a>
            <a href="#contact" class="transition hover:text-amber">Contact</a>
        </div>
        <div class="flex items-center gap-2 sm:gap-3">
            <button type="button" @click="cycleView" class="inline-flex max-w-[4.8rem] items-center justify-center truncate rounded-xl border border-espresso/15 px-2 py-2 text-[11px] font-semibold capitalize transition hover:border-amber hover:text-amber active:scale-95 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber sm:max-w-none sm:px-3 sm:text-xs" aria-label="Change preview view"><span class="hidden sm:inline">View: </span><span class="text-amber" x-text="viewMode"></span></button>
            <button type="button" @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-menu" class="grid h-10 w-10 place-items-center rounded-xl border border-espresso/15 text-espresso md:hidden" aria-label="Toggle navigation menu">
                <svg x-show="!open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                <svg x-show="open" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
            <div class="hidden items-center gap-2 sm:flex">
                <x-button href="#signin" variant="secondary" size="sm">Sign In</x-button>
                <x-button href="#menu" size="sm">Order Ahead</x-button>
            </div>
        </div>
    </nav>
    <div id="mobile-menu" x-show="open" x-cloak x-transition @click.outside="open = false" class="border-t border-espresso/10 bg-white md:hidden">
        <div class="mx-auto grid max-w-7xl gap-1 px-5 py-4">
            <a @click="open = false" href="#home" class="rounded-lg px-3 py-2 text-sm font-semibold hover:bg-oat">Home</a>
            <a @click="open = false" href="#menu" class="rounded-lg px-3 py-2 text-sm font-semibold hover:bg-oat">Menu</a>
            <a @click="open = false" href="#specials" class="rounded-lg px-3 py-2 text-sm font-semibold hover:bg-oat">Specials</a>
            <a @click="open = false" href="#testimonials" class="rounded-lg px-3 py-2 text-sm font-semibold hover:bg-oat">Reviews</a>
            <a @click="open = false" href="#contact" class="rounded-lg px-3 py-2 text-sm font-semibold hover:bg-oat">Contact</a>
            <div class="mt-2 grid grid-cols-2 gap-2 sm:hidden">
                <x-button href="#signin" variant="secondary" size="sm">Sign In</x-button>
                <x-button href="#menu" size="sm">Order Ahead</x-button>
            </div>
        </div>
    </div>
</header>
