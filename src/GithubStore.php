<?php

namespace Enflow\Dashboard\Tile\Github;

use Spatie\Dashboard\Models\Tile;

class GithubStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('github');
    }

    public function setPullRequests(Iterable $pullRequests): self
    {
        $this->tile->putData('pullRequests', $pullRequests);

        return $this;
    }

    public function pullRequests(): Iterable
    {
        return $this->tile->getData('pullRequests') ?? [];
    }
}
