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
        $this->tile = Tile::firstOrCreateForName("newsTileName");
    }

    public function setData(array $data): self
    {
        $this->tile->putData('key', $data);

        return $this;
    }

    public function getData(): array
    {
        return$this->tile->getData('key') ?? [];
    }

    public function artiles(): array
    {
        return $this->tile->getData('articles') ?? [];
    }
}
