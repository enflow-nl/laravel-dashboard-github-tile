<?php

namespace Enflow\Dashboard\Tile\Github;

use Livewire\Component;

class GithubComponent extends Component
{
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('dashboard-github::tile', [
            'items' => GithubStore::make()->pullRequests(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.github.refresh_interval_in_seconds') ?? 60,
        ]);
    }
}
