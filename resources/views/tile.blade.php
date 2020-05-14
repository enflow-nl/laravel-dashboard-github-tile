<x-dashboard-tile :position="$position">
    <div class="h-full">
        <h1 class="text-2xl text-center">Github</h1>
        <div wire:poll.{{ $refreshIntervalInSeconds }}s class="self-center | divide-y-2">
            <ul class="github__pull-requests">
                @foreach($items as $row)
                    <li class="pull-request">
                        <div><div class="inline-block pull-request__title" >{{ $row['title'] ?? null }}</div></div>
                        <div class="">
                            <span class="pull-request__date">{{ ($row['created_diff']) }}</span>
                            <span class="pull-request__number">({{ $row['number'] ?? null }})</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-dashboard-tile>

<style>
    .pull-request {
        margin-top: 0.25rem;
        padding: 0.25rem;
    }

    .pull-request__title {
        letter-spacing: .05em;
        font-weight: 600;
    }

    .pull-request__date {
        color: var(--brand-primary);
    }

</style>
