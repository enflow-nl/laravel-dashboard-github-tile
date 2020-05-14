<?php

namespace Enflow\Dashboard\Tile\Github\Console\Commands;

use Enflow\Dashboard\Tile\Github\GithubStore;
use Enflow\Dashboard\Tile\Github\Services\GithubApi;
use Illuminate\Console\Command;

class FetchGithubPullRequestsCommand extends Command
{
    protected $signature = 'dashboard:fetch-github-pull-requests';

    protected $description = 'Fetch Github pull requests';

    public function handle()
    {
        $this->info('Fetching Github pull requests');

        try {
            $items = GithubApi::pullRequests();
        } catch (RuntimeException $e) { // in case repo or user is incorrect, just return nothing
            $items = [];
        }

        GithubStore::make()->setPullRequests($items);

        $this->info('All done!');
    }
}
