<?php

namespace Enflow\Dashboard\Tile\Github\Services;

use Carbon\Carbon;
use Github\Client;
use Illuminate\Support\Str;

class GithubApi
{
    public static function pullRequests(string $repo = 'laravel', $user = 'framework')
    {
        return collect((new Client())->api('pull_request')->all($repo, $user, ['state' => 'all']))
            ->reject(function ($pullRequest) {
                return Str::contains(Str::lower($pullRequest['title']), 'styleci');
            })
            ->filter(function ($pullRequest) {
                return ($pullRequest['merged_at']);
            })->map(function ($pullRequest) {
                $pullRequest['created_diff'] = Carbon::make($pullRequest['created_at'])->diffForHumans();

                return $pullRequest;
            });
    }
}
