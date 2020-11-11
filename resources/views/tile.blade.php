<x-dashboard-tile :position="$position">
    <div class="grid grid-rows-auto-1 gap-2 h-full">
        <div class="font-medium text-dimmed text-sm uppercase tracking-wide text-center">
            Latest News
        </div>
        <div wire:poll.{{ $refreshIntervalInSeconds }}s class="self-center | divide-y-2">
            @foreach($articles as $article)
                <p class="mb-3 pt-3 text-sm">
                    {{ explode(' - ', $article['title'])[0] }}
                    <br>
                    <span class="text-xs">{{ $article['source']['name'] }} | {{ (new DateTime($article['publishedAt']))->format('d/m/Y h:i') }}</span>
                </p>
            @endforeach
        </div>
    </div>
</x-dashboard-tile>
