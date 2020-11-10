<x-dashboard-tile :position="$position">
    <div class="grid grid-rows-auto-1 gap-2 h-full">
        <div class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums">
            Latest News
        </div>
        <div wire:poll.{{ $refreshIntervalInSeconds }}s class="self-center | divide-y-2">
            @foreach($articles as $article)
                <p>
                    {{ $article->title }}
                    <br>
                    <span class="text-sm">{{ $article->source->name }} | {{ $article->publishedAt }}</span>
                </p>
                @if (!$loop->last)
                    <hr class="my-4">
                @endif
            @endforeach
        </div>
    </div>
</x-dashboard-tile>
