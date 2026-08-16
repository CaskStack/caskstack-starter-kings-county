@php
    $b = $block ?? $data ?? [];
@endphp
<section class="py-12 px-4 sm:px-6 lg:px-8 border-b border-kings-border bg-kings-deep">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        @foreach ($b['awards'] ?? [] as $award)
            <div class="p-4 rounded border border-kings-border bg-kings-surface/50 space-y-1">
                <i class="fa-solid fa-medal text-kings-copper text-lg"></i>
                <h4 class="font-cormorant text-lg font-bold text-kings-parchment">{{ $award['title'] }}</h4>
                <p class="text-[10px] font-mono text-kings-muted uppercase">{{ $award['org'] }}</p>
            </div>
        @endforeach
    </div>
</section>
