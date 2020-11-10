<?php

namespace RBibby\NewsTile;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchDataFromApiCommand extends Command
{
    protected $signature = 'dashboard:fetch-data-from-news-api';

    protected $description = 'Fetch data for news tile';

    public function handle()
    {
        $this->info('Fetching latest news...');

        $newsArticles = Http::withHeaders([
            'Authorization' => config('dashboard.tiles.news.api-key'),
        ])->get('https://newsapi.org/v2/top-headlines?' . http_build_query([
            'country' => config('dashboard.tiles.news.country-code'),
            'pageSize' => config('dashboard.tiles.news.number-of-articles', 5),
        ]))->json();

        NewsStore::make()->setData($newsArticles);

        $this->info('All done!');
    }
}
