<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shum's Cafe serves coffee, fresh bakes, and Filipino comfort food in Poblacion Uno, Pagsanjan.">
    <title>{{ $title ?? "Shum's Café | Crafted Coffee & Artisanal Bakes" }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        window.storeStatus = () => ({
            isOpen: false,
            label: '',
            refresh() {
                const now = new Date();
                const day = now.getDay();
                const openingMinutes = day === 0 || day === 6 ? 7 * 60 : 6 * 60 + 30;
                const closingMinutes = day === 0 || day === 6 ? 21 * 60 : 20 * 60;
                const currentMinutes = now.getHours() * 60 + now.getMinutes();
                const formatTime = (minutes) => {
                    const hours = Math.floor(minutes / 60);
                    const suffix = hours >= 12 ? 'PM' : 'AM';
                    const displayHour = hours % 12 || 12;
                    return `${displayHour}:${String(minutes % 60).padStart(2, '0')} ${suffix}`;
                };

                this.isOpen = currentMinutes >= openingMinutes && currentMinutes < closingMinutes;
                this.label = this.isOpen
                    ? `Open Now · Closes at ${formatTime(closingMinutes)}`
                    : `Closed · Opens at ${formatTime(openingMinutes)}`;
            },
            init() {
                this.refresh();
                window.setInterval(() => this.refresh(), 60000);
            }
        });

        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        espresso: '#2A1E17',
                        crema: '#FDFBF7',
                        amber: '#9A4F2B',
                        terracotta: '#C86D44',
                        sage: '#65745B',
                        oat: '#F4E8D2'
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        sans: ['DM Sans', 'sans-serif']
                    },
                    boxShadow: {
                        soft: '0 18px 50px rgba(68, 42, 25, 0.12)'
                    }
                }
            }
        };
    </script>
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @stack('head')
</head>
<body x-data="{ viewMode: 'auto', modes: ['auto', 'desktop', 'tablet', 'mobile'], cycleView() { this.viewMode = this.modes[(this.modes.indexOf(this.viewMode) + 1) % this.modes.length] } }" class="overflow-x-hidden bg-crema font-sans text-espresso antialiased">
    <div class="min-h-screen min-w-0 overflow-x-hidden transition-all duration-500" :class="{
        'w-full': viewMode === 'auto',
        'mx-auto max-w-[1440px] shadow-2xl': viewMode === 'desktop',
        'mx-auto max-w-[768px] shadow-2xl': viewMode === 'tablet',
        'mx-auto max-w-[390px] shadow-2xl': viewMode === 'mobile'
    }">
        {{ $slot ?? '' }}
        @yield('content')
        @stack('scripts')
    </div>
</body>
</html>
