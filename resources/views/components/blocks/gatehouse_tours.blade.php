@php
    $b = $block ?? $data ?? [];
@endphp
<section id="gatehouse-tours" class="py-24 px-4 sm:px-6 lg:px-8 bg-kings-dark relative">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-6 space-y-6">
            <span class="text-xs font-mono uppercase tracking-widest text-kings-copper font-bold">Brooklyn Tasting Room & Bar</span>
            <h2 class="font-cormorant text-3xl sm:text-5xl font-bold text-kings-parchment leading-tight">
                {{ $b['headline'] ?? 'The Gatehouse at the Brooklyn Navy Yard' }}
            </h2>
            <p class="text-sm text-kings-muted leading-relaxed">
                {{ $b['subheadline'] ?? '' }}
            </p>

            <div class="space-y-3 pt-2 text-xs font-mono text-kings-muted border-t border-kings-border">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-location-dot text-kings-copper text-sm w-4"></i>
                    <span>{{ $b['address'] ?? '299 Sands Street, Building 121, Brooklyn, NY 11205' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-phone text-kings-copper text-sm w-4"></i>
                    <span>{{ $b['phone'] ?? '(347) 529-6040' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-clock text-kings-copper text-sm w-4"></i>
                    <span>{{ $b['hours'] ?? 'Daily: 12:00 PM – 10:00 PM' }}</span>
                </div>
            </div>
        </div>

        <div class="lg:col-span-6 space-y-4">
            @foreach ($b['tour_options'] ?? [] as $tour)
                <div class="rounded-xl bg-kings-surface border border-kings-border p-6 space-y-3 hover:border-kings-copper transition shadow-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-cormorant text-2xl font-bold text-kings-parchment">{{ $tour['title'] }}</h3>
                            <span class="text-xs font-mono text-kings-muted">Duration: {{ $tour['duration'] }}</span>
                        </div>
                        <span class="font-cormorant text-2xl font-bold text-kings-copper">{{ $tour['price'] }}</span>
                    </div>

                    <p class="text-xs text-kings-muted leading-relaxed">{{ $tour['desc'] }}</p>

                    <button @click="alert('Booking tour slot for {{ addslashes($tour['title']) }}')" class="w-full py-2.5 rounded bg-kings-copper hover:bg-kings-copper-hover text-zinc-950 font-mono text-xs font-bold uppercase tracking-wider transition">
                        Book Tour Slot
                    </button>
                </div>
            @endforeach
        </div>

    </div>
</section>
