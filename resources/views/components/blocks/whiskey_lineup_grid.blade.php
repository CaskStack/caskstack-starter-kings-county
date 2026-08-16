@php
    $b = $block ?? $data ?? [];
@endphp
<section id="whiskey-lineup" class="py-24 px-4 sm:px-6 lg:px-8 border-b border-kings-border bg-[#001A70]" x-data="{ activeCategory: 'all' }">
    <div class="max-w-7xl mx-auto space-y-12">
        
        <!-- Header & Category Tabs -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-2">
                <span class="text-xs font-mono uppercase tracking-widest text-kings-copper font-bold">Handcrafted Portfolio</span>
                <h2 class="font-cormorant text-3xl sm:text-5xl font-bold text-kings-parchment">{{ $b['headline'] ?? 'Our Handcrafted Whiskey Portfolio' }}</h2>
                <p class="text-xs sm:text-sm text-kings-muted max-w-xl">{{ $b['subheadline'] ?? 'Direct from the Brooklyn Navy Yard barrel rooms to your glass. Filter by spirit style below.' }}</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-2 font-mono text-xs">
                <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'bg-kings-copper text-zinc-950 font-bold' : 'bg-kings-surface text-kings-muted hover:text-kings-parchment border border-kings-border'" class="px-3.5 py-1.5 rounded transition">
                    All Whiskeys
                </button>
                @foreach ($b['categories'] ?? [] as $cat)
                    <button @click="activeCategory = '{{ $cat['slug'] }}'" :class="activeCategory === '{{ $cat['slug'] }}' ? 'bg-kings-copper text-zinc-950 font-bold' : 'bg-kings-surface text-kings-muted hover:text-kings-parchment border border-kings-border'" class="px-3.5 py-1.5 rounded transition">
                        {{ $cat['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Whiskey Bottles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($b['products'] ?? [] as $prod)
                <div x-show="activeCategory === 'all' || activeCategory === '{{ $prod['category_slug'] ?? '' }}'" x-transition class="rounded-xl bg-kings-surface border border-kings-border overflow-hidden flex flex-col justify-between hover:border-kings-copper/60 transition-all shadow-xl group">
                    <div>
                        <!-- Bottle Image Container -->
                        <div class="aspect-4/3 w-full overflow-hidden bg-kings-deep relative border-b border-kings-border">
                            <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 left-3 text-[10px] font-mono font-bold uppercase px-2.5 py-1 rounded bg-kings-deep/90 backdrop-blur-xs text-kings-copper border border-kings-copper/40">
                                {{ $prod['badge'] }}
                            </span>
                        </div>

                        <!-- Card Typewriter Info -->
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between text-xs font-mono">
                                <span class="text-kings-muted">{{ $prod['category'] }}</span>
                                <span class="text-kings-copper font-bold">{{ $prod['proof'] }}</span>
                            </div>

                            <h3 class="font-cormorant text-2xl font-bold text-kings-parchment leading-snug">{{ $prod['name'] }}</h3>

                            <!-- Typewriter Mashbill Strip -->
                            <div class="p-3 rounded bg-kings-deep border border-kings-border font-typewriter text-[11px] text-kings-muted">
                                <span class="text-kings-copper font-bold">MASHBILL:</span> {{ $prod['mashbill'] ?? '100% NY State Grain' }}
                            </div>

                            <p class="text-xs text-kings-muted leading-relaxed">{{ $prod['description'] }}</p>

                            <!-- Tasting Notes -->
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                @foreach ($prod['tasting_notes'] ?? [] as $note)
                                    <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-kings-card text-kings-parchment/90 border border-kings-border">
                                        ✦ {{ $note }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Footer & Price -->
                    <div class="p-6 pt-0 border-t border-kings-border/50 flex items-center justify-between gap-4 mt-4">
                        <span class="text-xl font-cormorant font-bold text-kings-parchment">{{ $prod['price'] }}</span>
                        <button @click="cartCount++; alert('Added {{ addslashes($prod['name']) }} to Cart (Speakeasy / Vinoshipper Direct Connect)')" class="px-4 py-2 rounded bg-kings-copper hover:bg-kings-copper-hover text-zinc-950 font-mono text-xs font-bold transition flex items-center gap-1.5">
                            <i class="fa-solid fa-cart-shopping text-[10px]"></i>
                            <span>Purchase</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
