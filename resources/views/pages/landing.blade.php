@extends('layouts.app')

@section('content')
    <x-navbar />

    <main>
        <x-hero />

        <section id="features" class="bg-white py-14 sm:py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">
                <div class="max-w-2xl"><p class="text-sm font-bold uppercase tracking-[0.2em] text-terracotta">Why locals stay awhile</p><h2 class="mt-3 break-words font-display text-3xl font-bold tracking-tight sm:text-5xl">More than a cup of coffee.</h2><p class="mt-5 leading-7 text-espresso/60">Every detail is designed to make your everyday ritual feel a little more considered.</p></div>
                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $features = [
                            ['title' => 'Filipino Comfort Food', 'description' => 'Affordable home-style dishes made with familiar flavors and generous servings.', 'icon' => 'coffee'],
                            ['title' => 'Local Favorites', 'description' => 'Adobo, Malaysian Bihon, Chicken Curry, milk tea, and snacks locals return for.', 'icon' => 'bake'],
                            ['title' => 'Warm Hospitality', 'description' => 'A welcoming neighborhood atmosphere rooted in traditional Filipino hospitality.', 'icon' => 'wifi'],
                            ['title' => 'Easy Pickup', 'description' => 'Message Shum\'s Cafe ahead for a quick, convenient pickup in Poblacion Uno.', 'icon' => 'pickup'],
                            ['title' => 'Freshly Prepared', 'description' => 'Coffee, milk tea, mixed drinks, and savory plates prepared with care each day.', 'icon' => 'eco'],
                            ['title' => 'Owner-Supervised Service', 'description' => 'Daniel Shum and Charmz Castro keep quality, service, and guest care personal.', 'icon' => 'heart'],
                        ];
                    @endphp
                    @foreach ($features as $feature)
                        <x-feature-card :title="$feature['title']" :description="$feature['description']" :icon="$feature['icon']" />
                    @endforeach
                </div>
            </div>
        </section>

        <section id="specials" class="bg-oat/45 py-14 sm:py-20 lg:py-28">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 lg:grid-cols-2 lg:px-8">
                <div><p class="text-sm font-bold uppercase tracking-[0.2em] text-terracotta">Made for your rhythm</p><h2 class="mt-3 break-words font-display text-3xl font-bold tracking-tight sm:text-5xl">Order in a few taps. Savor the extra minutes.</h2><p class="mt-5 max-w-xl leading-7 text-espresso/60">Save your favorites, customize your order, and choose a pickup time that fits your day. Your coffee will be ready when you are.</p><ul class="mt-8 space-y-4 text-sm font-semibold"><li class="flex items-center gap-3"><span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-amber text-white">1</span>Choose your coffee and fresh bake</li><li class="flex items-center gap-3"><span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-amber text-white">2</span>Select a pickup time</li><li class="flex items-center gap-3"><span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-amber text-white">3</span>Grab, go, and enjoy</li></ul><x-button href="#menu" class="mt-8">Explore the menu</x-button></div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <x-quick-reorder-card />
                    <x-live-order-status-card />
                </div>
            </div>
        </section>

        <section id="menu" class="bg-crema py-14 sm:py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8"><div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><p class="text-sm font-bold uppercase tracking-[0.2em] text-terracotta">Good value, great taste</p><h2 class="mt-3 break-words font-display text-3xl font-bold tracking-tight sm:text-5xl">Make your ritual a little richer.</h2></div><p class="max-w-sm text-sm leading-6 text-espresso/60">Flexible packages for daily regulars, weekend wanderers, and everyone in between.</p></div><div class="mt-10 grid gap-5 lg:mt-12 lg:grid-cols-3">
                <x-pricing-card title="Daily Drink Pass" price="₱299" description="Five café drinks for your workweek or daily neighborhood routine." :items="['5 coffee or milk tea drinks', 'Valid for 30 days', 'Save up to ₱76']" />
                <x-pricing-card title="Merienda Bundle" price="₱249" description="A filling local favorite paired with a refreshing drink." :items="['Adobo or Malaysian Bihon', 'Choice of milk tea or coffee', 'Best for 1 person']" featured />
                <x-pricing-card title="Family Sharing Set" price="₱599" description="A generous spread for a relaxed meal with family or friends." :items="['3 Filipino main dishes', '4 cups of rice', 'Good for 3 to 4 people']" />
            </div></div>
        </section>

        <section id="testimonials" class="bg-white py-14 sm:py-20 lg:py-28"><div class="mx-auto max-w-7xl px-5 lg:px-8"><div class="mx-auto max-w-2xl text-center"><p class="text-sm font-bold uppercase tracking-[0.2em] text-terracotta">Poblacion Uno community notes</p><h2 class="mt-3 break-words font-display text-3xl font-bold tracking-tight sm:text-5xl">Loved by our neighbors in Pagsanjan.</h2></div><div class="mt-10 grid gap-5 lg:mt-12 lg:grid-cols-3"><x-testimonial-card name="Jayson Mendoza" type="Poblacion Uno, Pagsanjan" review="Hands down the best go-to spot in Poblacion Uno for affordable home-style cooking. The Adobo and Malaysian Bihon are unmatched in flavor, and the serving sizes are great for the price." /><x-testimonial-card name="Clarisse Dela Cruz" type="Poblacion Uno, Pagsanjan" review="Shum's Cafe gives you that true warm Filipino hospitality. Love stopping by after work for their milk tea and Chicken Curry. Very cozy atmosphere!" /><x-testimonial-card name='Ramon "Mon" Soriano' type="Poblacion Uno, Pagsanjan" review="A hidden gem right in our neighborhood. Quality Filipino dishes, friendly staff, and owner supervision that really shows in the service." /></div></div></section>

        <section id="order" class="bg-terracotta py-14 text-white sm:py-20 lg:py-24"><div class="mx-auto flex max-w-5xl flex-col items-start justify-between gap-8 px-5 sm:flex-row sm:items-center lg:px-8"><div><p class="text-sm font-bold uppercase tracking-[0.2em] text-oat">A little thank-you from us</p><h2 class="mt-3 max-w-2xl break-words font-display text-3xl font-bold leading-tight sm:text-5xl">Join the Shum's Loyalty Club & Get Your First Cup Free</h2><p class="mt-5 max-w-xl leading-7 text-white/75">Earn points, hear about fresh bakes first, and start your membership with a cup on us.</p></div><x-button href="#signup" variant="light" size="lg" class="shrink-0">Join the club</x-button></div></section>
    </main>

    <x-footer />
@endsection
