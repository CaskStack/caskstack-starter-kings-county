@php
    $b = $block ?? $data ?? [];
@endphp
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-20 px-4 sm:px-6 lg:px-8 border-b border-kings-border bg-gradient-to-b from-kings-navy via-kings-dark to-kings-navy">
    <div class="relative max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left 7 Cols: Distiller Story & Headline -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <div class="flex flex-wrap items-center gap-3">
                <span class="px-3.5 py-1 rounded text-xs font-mono font-bold tracking-widest uppercase bg-kings-copper/20 text-kings-copper border border-kings-copper/40">
                    ★ {{ $b['badge'] ?? 'NYC First Distillery Since Prohibition' }}
                </span>
                <span class="px-3 py-1 rounded text-xs font-mono text-kings-parchment bg-kings-surface border border-kings-border">
                    {{ $b['badge_callout'] ?? 'Brooklyn Navy Yard • Est. 2010' }}
                </span>
            </div>

            <h1 class="font-cormorant text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-kings-parchment leading-[1.08]">
                {{ $b['headline'] ?? 'Handcrafted Whiskey in the Brooklyn Navy Yard' }}
            </h1>

            <p class="text-base sm:text-lg text-kings-muted max-w-2xl leading-relaxed">
                {{ $b['subheadline'] ?? 'Founded in 2010 in the historic 123-year-old Paymaster Building, Kings County Distillery makes award-winning handmade bourbon, peated bourbon, and Empire Rye using 100% New York State organic grains and traditional Scottish pot stills.' }}
            </p>

            <!-- Metrics Matrix Strip -->
            <div class="grid grid-cols-3 gap-4 pt-4 border-t border-kings-border">
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-cormorant text-kings-copper">1899</span>
                    <span class="block text-[10px] font-mono uppercase text-kings-muted">Paymaster Building</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-cormorant text-kings-parchment">100%</span>
                    <span class="block text-[10px] font-mono uppercase text-kings-muted">NY Organic Grain</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-cormorant text-kings-copper">#1</span>
                    <span class="block text-[10px] font-mono uppercase text-kings-muted">Distillery in NYC</span>
                </div>
            </div>

            <!-- Action CTAs -->
            <div class="flex flex-wrap items-center gap-4 pt-4">
                <a href="{{ $b['cta_primary_url'] ?? '#whiskey-lineup' }}" class="px-6 py-3.5 rounded bg-kings-copper hover:bg-kings-copper-hover text-zinc-950 font-mono text-xs font-extrabold uppercase tracking-wider transition shadow-xl flex items-center gap-2">
                    <span>{{ $b['cta_primary'] ?? 'Shop Whiskeys' }}</span>
                    <i class="fa-solid fa-arrow-down text-[10px]"></i>
                </a>
                <a href="{{ $b['cta_secondary_url'] ?? '#gatehouse-tours' }}" class="px-6 py-3.5 rounded bg-kings-surface hover:bg-kings-card text-kings-parchment border border-kings-border font-mono text-xs font-bold uppercase tracking-wider transition flex items-center gap-2">
                    <span>{{ $b['cta_secondary'] ?? 'Gatehouse Tours' }}</span>
                </a>
            </div>
        </div>

        <!-- Right 5 Cols: Heritage Image Showcase -->
        <div class="lg:col-span-5 relative">
            <div class="rounded-2xl overflow-hidden border border-kings-border bg-kings-surface shadow-2xl relative aspect-4/5 group">
                <img src="{{ $b['hero_image'] ?? 'https://images.unsplash.com/photo-1527061011665-3652c757a4d4?auto=format&fit=crop&w=1600&q=80' }}" alt="Kings County Whiskey Aging" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-kings-deep via-transparent to-transparent flex flex-col justify-end p-8">
                    <span class="text-xs font-mono uppercase text-kings-copper tracking-widest font-bold">Brooklyn Navy Yard</span>
                    <h3 class="font-cormorant text-2xl font-bold text-kings-parchment">Building 121 (Paymaster)</h3>
                    <p class="text-xs text-kings-muted pt-1">Double pot distilled in traditional Scottish copper stills on the East River.</p>
                </div>
            </div>
        </div>

    </div>
</section>
