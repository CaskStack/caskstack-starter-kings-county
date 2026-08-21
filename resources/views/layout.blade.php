<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#001A70] text-[#FBF9F5] antialiased selection:bg-[#EE7A41] selection:text-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Kings County Distillery — Premier NYC Craft Whiskey' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'New York City oldest craft whiskey distillery in the Brooklyn Navy Yard Paymaster Building.' }}">

    <!-- Google Fonts: Cormorant Garamond, Jost, Space Grotesk, Courier Prime -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Courier+Prime:ital,wght@0,400;0,700;1,400&family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Standalone Tailwind Configuration -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cormorant: ['"Cormorant Garamond"', 'serif'],
                        heading: ['"Cormorant Garamond"', 'serif'],
                        serif: ['"Cormorant Garamond"', 'serif'],
                        jost: ['Jost', 'sans-serif'],
                        sans: ['Jost', 'sans-serif'],
                        typewriter: ['"Courier Prime"', '"Space Grotesk"', 'monospace'],
                        mono: ['"Space Grotesk"', 'monospace'],
                    },
                    colors: {
                        kings: {
                            navy: '#001A70',
                            dark: '#001457',
                            deep: '#000E3D',
                            surface: '#0A2580',
                            card: '#0D2D99',
                            border: '#1E3EAF',
                            copper: '#EE7A41',
                            'copper-hover': '#F58A54',
                            parchment: '#FBF9F5',
                            cream: '#F4EFE6',
                            muted: '#9CB2E8',
                            brick: '#8B3A2B',
                        }
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Zero-Config Native SEO & Meta Architecture -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA">
    <meta name="audience" content="21+ only, Adults">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Kings County Distillery">
    <meta property="og:title" content="{{ $title ?? "Kings County Distillery — New York City\'s Premier Craft Whiskey" }}">
    <meta property="og:description" content="{{ $meta_description ?? "Kings County Distillery is NYC\'s oldest, largest, and premier whiskey distillery, handcrafting award-winning bourbon, peated bourbon, and Empire Rye in the Brooklyn Navy Yard." }}">
    <meta property="og:image" content="{{ $hero_image ?? "https://caskstack.com/images/og-default.jpg" }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? "Kings County Distillery — New York City\'s Premier Craft Whiskey" }}">
    <meta name="twitter:description" content="{{ $meta_description ?? "Kings County Distillery is NYC\'s oldest, largest, and premier whiskey distillery, handcrafting award-winning bourbon, peated bourbon, and Empire Rye in the Brooklyn Navy Yard." }}">

    <!-- Compliance-First Data Moat Signals -->
    <meta name="caskstack:compliance" content="TTB-21-Plus-Direct-Connect">
    <meta name="caskstack:architecture" content="Flat-File-Worker-Runtime">

    <!-- Structured Data (JSON-LD) Schema.org Graph -->
    <script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@graph": [
        {
            "@@type": "Organization",
            "@@id": "#organization",
            "name": "Kings County Distillery",
            "description": "Kings County Distillery is NYC's oldest, largest, and premier whiskey distillery, handcrafting award-winning bourbon, peated bourbon, and Empire Rye in the Brooklyn Navy Yard.",
            "foundingDate": "2010",
            "knowsAbout": [
                "Artisanal Fermentation",
                "Small Batch Distillation",
                "Direct-to-Consumer Alcohol Compliance"
            ]
        },
        {
            "@@type": "Distillery",
            "@@id": "#facility",
            "name": "Kings County Distillery",
            "description": "Kings County Distillery is NYC's oldest, largest, and premier whiskey distillery, handcrafting award-winning bourbon, peated bourbon, and Empire Rye in the Brooklyn Navy Yard.",
            "isFamilyFriendly": false,
            "typicalAgeRange": "21+",
            "priceRange": "$$$",
            "paymentAccepted": "Cash, Credit Card, Apple Pay, Google Pay",
            "currenciesAccepted": "USD",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "299 Sands Street, Building 121, Brooklyn, NY 11205",
                "addressCountry": "US"
            },
            "telephone": "(347) 529-6040",
            "openingHours": "Daily: 12:00 PM \u2013 10:00 PM (Tours Wed - Sun)"
        }
    ]
}
    </script>
</head>
<body class="flex min-h-full flex-col font-jost bg-[#001A70] text-[#FBF9F5] antialiased" x-data="{ mobileMenuOpen: false, cartOpen: false, cartCount: 0 }">

    <!-- WCAG 2.4.1: Bypass Blocks Skip Link -->
    <a href="#storefront-main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-amber-400 focus:text-black focus:font-bold focus:rounded-xl focus:shadow-2xl focus:outline-none">
        Skip to content
    </a>

    <!-- Top Navy Yard Marquee Bar -->
    <div class="bg-gradient-to-r from-kings-deep via-kings-navy to-kings-deep border-b border-kings-border px-4 py-2 text-center text-xs font-mono tracking-widest flex items-center justify-center gap-3">
        <span class="inline-block w-2 h-2 rounded-full bg-kings-copper animate-ping"></span>
        <span>BROOKLYN NAVY YARD • PAYMASTER BUILDING 121 • NEW YORK CITY OLDEST DISTILLERY SINCE PROHIBITION</span>
        <span class="text-kings-copper font-bold hidden sm:inline">✦ 100% NY STATE GRAIN</span>
    </div>

    <!-- Main Navigation Header -->
    <header role="banner" class="sticky top-0 z-40 w-full border-b border-kings-border bg-[#001A70]/95 backdrop-blur-md transition-all">
        <div class="max-w-7xl mx-auto flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
            
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3.5 group">
                <div class="w-11 h-11 rounded-lg bg-kings-parchment text-kings-navy font-typewriter font-black text-xl flex items-center justify-center shadow-lg border border-kings-copper/30 group-hover:scale-105 transition-transform">
                    KCD
                </div>
                <div class="flex flex-col">
                    <span class="font-cormorant text-2xl font-bold tracking-tight text-kings-parchment group-hover:text-kings-copper transition">
                        {{ $brand_name ?? 'Kings County Distillery' }}
                    </span>
                    <span class="text-[9px] font-mono tracking-widest text-kings-muted uppercase -mt-0.5">
                        Brooklyn Navy Yard • Est. 2010
                    </span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav aria-label="Main Navigation" class="hidden md:flex items-center space-x-8 text-xs font-mono uppercase tracking-widest text-kings-muted">
                <a href="#about" class="hover:text-kings-copper transition">Paymaster Heritage</a>
                <a href="#whiskey-lineup" class="hover:text-kings-copper transition">Whiskeys</a>
                <a href="#whiskey-lineup" class="hover:text-kings-copper transition">Bourbon & Rye</a>
                <a href="#gatehouse-tours" class="hover:text-kings-copper transition">The Gatehouse</a>
                <a href="#gatehouse-tours" class="hover:text-kings-copper transition">Tours & Flights</a>
            </nav>

            <!-- Header Actions -->
            <div class="flex items-center gap-4">
                <a href="#gatehouse-tours" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-md bg-kings-copper hover:bg-kings-copper-hover text-zinc-950 font-mono text-xs font-bold transition shadow-md">
                    <i class="fa-solid fa-ticket text-[11px]"></i>
                    <span>Book Tour</span>
                </a>

                <button @click="cartOpen = true" type="button" class="relative p-2 text-kings-parchment hover:text-kings-copper transition cursor-pointer" aria-label="Open Cellar Cart">
                    <i class="fa-solid fa-whiskey-glass text-lg"></i>
                    <span x-show="cartCount > 0" x-text="cartCount" class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-kings-copper text-zinc-950 font-mono text-[9px] font-extrabold flex items-center justify-center">0</span>
                </button>

                <!-- Mobile Menu Toggle -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" aria-label="Toggle Navigation Menu" class="md:hidden p-2 text-kings-parchment hover:text-kings-copper cursor-pointer">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Nav Drawer -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-kings-border bg-kings-surface px-6 py-4 space-y-3 font-mono text-xs uppercase tracking-wider">
            <a href="#about" @click="mobileMenuOpen = false" class="block py-1 hover:text-kings-copper">Paymaster Heritage</a>
            <a href="#whiskey-lineup" @click="mobileMenuOpen = false" class="block py-1 hover:text-kings-copper">Whiskeys</a>
            <a href="#gatehouse-tours" @click="mobileMenuOpen = false" class="block py-1 text-kings-copper font-bold">Gatehouse Tours & Flights</a>
        </div>
    </header>

    <!-- Content Slot -->
    <main id="storefront-main-content" tabindex="-1" role="main" class="flex-1">
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <!-- Global Footer -->
    <footer role="contentinfo" class="border-t border-kings-border bg-kings-deep pt-16 pb-12 text-kings-muted text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
            
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-kings-parchment text-kings-navy font-typewriter font-bold flex items-center justify-center">KCD</div>
                    <span class="font-cormorant text-xl font-bold text-kings-parchment">Kings County Distillery</span>
                </div>
                <p class="text-xs leading-relaxed">
                    {{ $tagline ?? 'New York City’s oldest, largest, and premier craft whiskey distillery. Handcrafted in the Brooklyn Navy Yard.' }}
                </p>
                <div class="flex items-center gap-4 text-sm text-kings-parchment">
                    <a href="https://instagram.com/kingscountydistillery" target="_blank" rel="noopener" class="hover:text-kings-copper transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com/kingscountydistillery" target="_blank" rel="noopener" class="hover:text-kings-copper transition"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>

            <div class="space-y-2 font-mono">
                <h4 class="font-bold text-kings-parchment uppercase tracking-wider text-xs">Distillery Sections</h4>
                <ul class="space-y-1.5 text-xs">
                    <li><a href="#about" class="hover:text-kings-copper transition">The Paymaster Building</a></li>
                    <li><a href="#whiskey-lineup" class="hover:text-kings-copper transition">Straight Bourbon</a></li>
                    <li><a href="#whiskey-lineup" class="hover:text-kings-copper transition">World-First Peated Bourbon</a></li>
                    <li><a href="#whiskey-lineup" class="hover:text-kings-copper transition">Certified Empire Rye</a></li>
                    <li><a href="#gatehouse-tours" class="hover:text-kings-copper transition">Gatehouse Tasting Flights</a></li>
                </ul>
            </div>

            <div class="space-y-2 font-mono">
                <h4 class="font-bold text-kings-parchment uppercase tracking-wider text-xs">Brooklyn Navy Yard</h4>
                <p class="text-kings-parchment font-bold">The Gatehouse & Distillery</p>
                <p>299 Sands St, Building 121</p>
                <p>Brooklyn, NY 11205</p>
                <p class="pt-2 text-kings-copper font-bold">(347) 529-6040</p>
                <p>info@kingscountydistillery.com</p>
            </div>

            <div class="space-y-3">
                <h4 class="font-bold text-kings-parchment uppercase tracking-wider font-mono text-xs">21+ Compliance Notice</h4>
                <p class="text-[11px] leading-relaxed">
                    Government Warning: (1) According to the Surgeon General, women should not drink alcoholic beverages during pregnancy because of the risk of birth defects. (2) Consumption of alcoholic beverages impairs your ability to drive a car or operate machinery.
                </p>
                <div class="pt-2 text-[10px] font-mono text-kings-copper">
                    ✦ PROUD MEMBER OF THE EMPIRE STATE DISTILLERS GUILD
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 mt-8 border-t border-kings-border/50 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] font-mono">
            <p>© {{ date('Y') }} Kings County Distillery. All rights reserved. Powered by CaskStack.</p>
            <p>100% NY State Grain • Scottish Copper Pot Distillation</p>
        </div>
    </footer>

</body>
</html>
