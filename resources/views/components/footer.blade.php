<footer id="contact" class="bg-espresso text-white">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-14 sm:grid-cols-2 lg:grid-cols-[1.4fr_0.8fr_1fr_1.2fr] lg:px-8">
        <div class="flex flex-col sm:min-h-[15rem]">
            <a href="#home" class="flex items-center gap-3 font-display text-2xl font-bold"><img src="{{ asset('images/logo.jpg') }}" alt="Shum's Cafe official logo" class="h-12 w-12 rounded-full object-cover">Shum's Cafe</a>
            <p class="mt-4 max-w-xs leading-7 text-white/60">A family-owned restaurant in Poblacion Uno serving affordable Filipino food, coffee, milk tea, and mixed drinks.</p>
            <div class="mt-6 flex gap-3" aria-label="Social media links">
                <a href="#instagram" aria-label="Instagram" class="grid h-9 w-9 place-items-center rounded-full border border-white/20 transition hover:border-amber hover:text-amber"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/></svg></a>
                <a href="#facebook" aria-label="Facebook" class="grid h-9 w-9 place-items-center rounded-full border border-white/20 transition hover:border-amber hover:text-amber"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 8h3V4h-3c-3.31 0-5 1.69-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.67.33-1 1-1Z"/></svg></a>
                <a href="#messenger" aria-label="Messenger" class="grid h-9 w-9 place-items-center rounded-full border border-white/20 transition hover:border-amber hover:text-amber"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3C6.48 3 3 6.72 3 11.5c0 2.5 1.12 4.72 3 6.2V21l3.1-1.7c.9.25 1.87.4 2.9.4 5.52 0 9-3.72 9-8.5S17.52 3 12 3Z"/><path d="m7 14 3-3 2 2 3-3"/></svg></a>
            </div>
        </div>
        <div class="sm:min-h-[15rem]">
            <h2 class="font-semibold">Explore</h2>
            <ul class="mt-4 space-y-3 text-sm text-white/60"><li><a href="#features" class="hover:text-amber">Our story</a></li><li><a href="#menu" class="hover:text-amber">Menu & pricing</a></li><li><a href="#testimonials" class="hover:text-amber">Community notes</a></li></ul>
        </div>
        <div class="sm:min-h-[15rem]" x-data="storeStatus()">
            <h2 class="font-semibold">Hours</h2>
            <div class="mt-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold" :class="isOpen ? 'text-[#b9d5a7]' : 'text-white/60'" role="status" aria-live="polite">
                <span class="h-2 w-2 rounded-full" :class="isOpen ? 'bg-[#9bc184] animate-pulse' : 'bg-white/35'"></span>
                <span x-text="label">Checking status...</span>
            </div>
            <p class="mt-4 text-sm leading-7 text-white/60">Mon–Fri: 6:30 AM–8 PM<br>Sat–Sun: 7 AM–9 PM<br>Kitchen closes 30 min early</p>
            <p class="mt-4 text-sm leading-7 text-white/60"><strong class="text-white">Established:</strong> 2022<br><strong class="text-white">Owner:</strong> Daniel Shum<br><strong class="text-white">Manager &amp; Chef:</strong> Charmz Castro</p>
        </div>
        <div class="sm:min-h-[15rem]">
            <h2 class="font-semibold">Come say hello</h2>
            <div class="mt-4 grid gap-2 text-sm text-white/60">
                <p><strong class="text-white">Address</strong><br>Poblacion Uno, Pagsanjan, Laguna 4008</p>
                <p><strong class="text-white">Phone</strong><br><a href="tel:09674095338" class="transition hover:text-amber">0967 409 5338</a></p>
                <p><strong class="text-white">Messenger</strong><br>Shum's Cafe</p>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10"><div class="mx-auto flex max-w-7xl flex-col gap-2 px-5 py-5 text-xs text-white/45 sm:flex-row sm:items-center sm:justify-between lg:px-8"><p>&copy; {{ date('Y') }} Shum's Café. Crafted with care.</p><p>Privacy &middot; Accessibility</p></div></div>
</footer>
