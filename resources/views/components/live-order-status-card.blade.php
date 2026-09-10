<div x-data="{ open: false, status: 'Ready', statusIndex: 1, statuses: ['Preparing', 'Ready', 'Picked Up'], updatedAt: '10:15 AM', simulateUpdate() { this.statusIndex = (this.statusIndex + 1) % this.statuses.length; this.status = this.statuses[this.statusIndex]; this.updatedAt = new Date().toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' }); } }" @keydown.escape.window="open = false">
    <button type="button" @click="open = true" class="group relative flex min-h-[20rem] w-full flex-col rounded-[1.35rem] bg-espresso p-5 text-left text-white shadow-soft transition duration-300 hover:-translate-y-1 hover:shadow-2xl focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber focus-visible:ring-offset-4 focus-visible:ring-offset-oat sm:min-h-[23.5rem] sm:p-7" aria-haspopup="dialog">
        <div class="flex items-center justify-between">
            <span class="flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-terracotta">
                <span class="relative flex h-2.5 w-2.5"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-terracotta opacity-60"></span><span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-terracotta"></span></span>
                <span x-text="status === 'Picked Up' ? 'Completed' : 'Pickup ready'"></span>
            </span>
            <span class="text-white/55" x-text="updatedAt"></span>
        </div>
        <div class="my-auto text-center">
            <div class="mx-auto grid h-16 w-16 place-items-center rounded-full bg-amber transition group-hover:scale-105">
                <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 8h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8Z"/><path d="M17 10h1a3 3 0 0 1 0 6h-2M7 4c0 1 1 1 1 2M11 4c0 1 1 1 1 2"/></svg>
            </div>
            <p class="mt-5 font-display text-2xl font-bold">Chicken Curry</p>
            <p class="mt-2 text-sm text-white/55">At the Poblacion Uno counter</p>
        </div>
        <div class="border-t border-white/10 pt-4 text-center text-sm text-white/55">Order #SHU-2048</div>
    </button>

    <div x-show="open" x-cloak x-transition.opacity class="fixed inset-0 z-[60] grid place-items-center bg-espresso/70 p-5 backdrop-blur-sm" role="presentation">
        <div x-show="open" x-transition @click.outside="open = false" @click.stop role="dialog" aria-modal="true" aria-labelledby="order-status-title" class="max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-2xl bg-crema p-6 text-espresso shadow-2xl sm:p-8">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.16em] text-terracotta">Live order status</p>
                    <h2 id="order-status-title" class="mt-2 font-display text-3xl font-bold">Order #SHU-2048</h2>
                </div>
                <button type="button" @click="open = false" class="grid h-9 w-9 shrink-0 place-items-center rounded-full border border-espresso/15 text-xl transition hover:bg-oat" aria-label="Close order details">&times;</button>
            </div>

            <div class="mt-6 rounded-xl bg-oat p-4">
                <div class="flex items-center justify-between"><span class="font-semibold">Chicken Curry</span><span class="font-bold text-amber">₱180</span></div>
                <div class="mt-2 flex items-center justify-between text-sm text-espresso/60"><span>Pickup at Poblacion Uno counter</span><span>10:15 AM</span></div>
            </div>

            <ol class="mt-7 space-y-5" aria-label="Order progress">
                <template x-for="(step, index) in statuses" :key="step"><li class="flex gap-3" :class="index > statusIndex ? 'opacity-45' : ''"><span class="grid h-7 w-7 shrink-0 place-items-center rounded-full text-sm font-bold text-white" :class="index <= statusIndex ? 'bg-amber' : 'border border-espresso/20 text-espresso'" x-text="index <= statusIndex ? '✓' : index + 1"></span><span><strong x-text="step"></strong><small class="mt-1 block text-espresso/55" x-text="index === statusIndex ? 'Latest update just now.' : index < statusIndex ? 'Completed.' : 'Waiting for the café team.'"></small></span></li></template>
            </ol>

            <div class="mt-7 grid gap-3 sm:grid-cols-2">
                <a href="https://www.google.com/maps/search/?api=1&query=Poblacion+Uno+Pagsanjan+Laguna" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center rounded-xl bg-espresso px-4 py-3 text-sm font-bold text-white transition hover:bg-terracotta focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber">Get directions</a>
                <button type="button" @click="simulateUpdate" class="rounded-xl border border-espresso/20 px-4 py-3 text-sm font-bold transition hover:border-amber hover:text-amber active:scale-[0.97] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber">Simulate update</button>
            </div>
        </div>
    </div>
</div>
