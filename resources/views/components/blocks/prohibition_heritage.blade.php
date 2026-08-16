@php
    $b = $block ?? $data ?? [];
@endphp
<section id="about" class="py-24 px-4 sm:px-6 lg:px-8 border-b border-kings-border bg-kings-deep relative">
    <div class="max-w-7xl mx-auto space-y-16">
        
        <!-- Section Header -->
        <div class="max-w-3xl space-y-4">
            <span class="text-xs font-mono uppercase tracking-widest text-kings-copper font-bold">
                {{ $b['eyebrow'] ?? 'The History & The Yard' }}
            </span>
            <h2 class="font-cormorant text-3xl sm:text-5xl font-bold text-kings-parchment leading-tight">
                {{ $b['headline'] ?? "Reclaiming New York City's Historic Whiskey Legacy" }}
            </h2>
            <div class="space-y-4 text-kings-muted text-base leading-relaxed pt-2">
                <p>{{ $b['story_p1'] ?? '' }}</p>
                <p>{{ $b['story_p2'] ?? '' }}</p>
            </div>
        </div>

        <!-- 4 Pillars Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($b['pillars'] ?? [] as $pillar)
                <div class="rounded-xl bg-kings-surface border border-kings-border p-6 space-y-3 hover:border-kings-copper/50 transition shadow-lg">
                    <div class="w-12 h-12 rounded bg-kings-deep border border-kings-border text-kings-copper flex items-center justify-center text-xl">
                        <i class="{{ $pillar['icon'] ?? 'fa-solid fa-award' }}"></i>
                    </div>
                    <h3 class="font-cormorant text-xl font-bold text-kings-parchment">{{ $pillar['title'] }}</h3>
                    <p class="text-xs text-kings-muted leading-relaxed">{{ $pillar['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
