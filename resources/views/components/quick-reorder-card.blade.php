<article x-data="{
    editOpen: false,
    adding: false,
    added: false,
    cartCount: 0,
    selectedItem: 'Iced milk tea',
    sugar: 'Regular',
    ice: 'Regular',
    side: 'No side',
    items: {
        'Iced milk tea': 95,
        'Hot coffee': 85,
        'Chicken Curry': 180
    },
    get total() {
        return this.items[this.selectedItem] + (this.side === 'Extra bihon' ? 35 : 0);
    },
    addToOrder() {
        this.adding = true;
        this.added = false;
        window.setTimeout(() => {
            this.adding = false;
            this.added = true;
            this.cartCount++;
            window.setTimeout(() => this.added = false, 2200);
        }, 700);
    }
}" class="relative rounded-[1.35rem] border border-espresso/10 bg-white p-5 shadow-soft sm:p-6">
    <div class="flex items-center justify-between border-b border-espresso/10 pb-5">
        <span class="font-display text-2xl font-bold tracking-tight">Shum's</span>
        <span class="flex items-center gap-2 rounded-full bg-sage/15 px-3 py-1 text-sm font-semibold text-sage">
            <span class="h-2 w-2 animate-pulse rounded-full bg-sage" aria-hidden="true"></span>
            Open
        </span>
    </div>

    <div class="mt-6 flex items-center justify-between gap-3">
        <p class="flex-1 text-xs font-semibold uppercase leading-5 tracking-[0.12em] text-espresso/55 sm:text-sm">Good morning, Alex</p>
        <span x-show="cartCount > 0" x-cloak class="shrink-0 rounded-full bg-amber px-3 py-2 text-xs font-bold leading-4 text-white shadow-sm" x-text="`${cartCount} in cart`"></span>
    </div>

    <button type="button" @click="editOpen = !editOpen" class="group mt-4 block w-full rounded-2xl bg-oat p-5 text-left transition duration-300 hover:-translate-y-0.5 hover:bg-[#f1dfbf] hover:shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber" :aria-expanded="editOpen.toString()" aria-controls="quick-order-options">
        <span class="text-sm text-espresso/60">Your usual</span>
        <span class="mt-1 block text-lg font-semibold" x-text="selectedItem"></span>
        <span class="mt-2 block font-bold text-amber" x-text="`₱${total}`"></span>
        <span class="mt-3 flex items-center justify-between text-xs font-semibold text-amber"><span x-text="editOpen ? 'Hide quick edit' : 'Tap to customize your order'"></span><span class="text-base transition group-hover:translate-x-1" aria-hidden="true">→</span></span>
    </button>

    <div id="quick-order-options" x-show="editOpen" x-cloak class="mt-3 rounded-xl border border-espresso/10 bg-crema p-4">
        <div class="grid gap-3 sm:grid-cols-2">
            <label class="text-xs font-bold uppercase tracking-wider text-espresso/55 sm:col-span-2">
                Item
                <select x-model="selectedItem" class="mt-2 w-full rounded-lg border-espresso/15 bg-white text-sm focus:border-amber focus:ring-amber">
                    <template x-for="item in Object.keys(items)" :key="item"><option :value="item" x-text="item"></option></template>
                </select>
            </label>
            <label class="text-xs font-bold uppercase tracking-wider text-espresso/55">
                Sugar
                <select x-model="sugar" class="mt-2 w-full rounded-lg border-espresso/15 bg-white text-sm focus:border-amber focus:ring-amber">
                    <option>Regular</option>
                    <option>Less</option>
                    <option>None</option>
                </select>
            </label>
            <label class="text-xs font-bold uppercase tracking-wider text-espresso/55">
                Ice
                <select x-model="ice" class="mt-2 w-full rounded-lg border-espresso/15 bg-white text-sm focus:border-amber focus:ring-amber">
                    <option>Regular</option>
                    <option>Less</option>
                    <option>None</option>
                </select>
            </label>
            <label class="text-xs font-bold uppercase tracking-wider text-espresso/55">
                Side
                <select x-model="side" class="mt-2 w-full rounded-lg border-espresso/15 bg-white text-sm focus:border-amber focus:ring-amber">
                    <option>No side</option>
                    <option>Extra bihon</option>
                </select>
            </label>
        </div>
        <p class="mt-3 text-xs text-espresso/55"><span x-text="sugar"></span> sugar · <span x-text="ice"></span> ice · <span x-text="side"></span></p>
    </div>

    <button type="button" @click="addToOrder" :disabled="adding" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-espresso px-4 py-3 font-bold text-white transition duration-200 hover:bg-terracotta active:scale-[0.97] disabled:cursor-wait disabled:opacity-80 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber focus-visible:ring-offset-2">
        <svg x-show="adding" x-cloak class="h-4 w-4 animate-spin" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle class="opacity-25" cx="12" cy="12" r="9" stroke="currentColor" stroke-width="3"></circle><path class="opacity-90" fill="currentColor" d="M21 12a9 9 0 0 1-9 9v-3a6 6 0 0 0 6-6h3Z"></path></svg>
        <span x-text="adding ? 'Adding...' : (added ? 'Added to order' : 'Add to order')">Add to order</span>
    </button>
</article>
