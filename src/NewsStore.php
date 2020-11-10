<?php

namespace RBibby\NewsTile;

use Spatie\Dashboard\Models\Tile;

class NewsStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("news");
    }

    public function setArticles(array $data): self
    {
        $this->tile->putData('articles', $data);

        return $this;
    }

    public function getArticles(): array
    {
        return $this->tile->getData('articles') ?? [];
    }
}
