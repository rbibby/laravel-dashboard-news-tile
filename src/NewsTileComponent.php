<?php

namespace RBibby\NewsTile;

use Livewire\Component;

class NewsTileComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('dashboard-news-tile::tile', [
            'articles' => NewsStore::make()->articles(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.news.refresh_interval_in_seconds') ?? 60,
        ]);
    }
}
