# GitHub tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enflow/laravel-dashboard-github-tile.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-dashboard-github-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/enflow/laravel-dashboard-github-tile/run-tests?label=tests)](https://github.com/enflow/laravel-dashboard-github-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/enflow/laravel-dashboard-github-tile.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-dashboard-github-tile)

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

It uses the github API to fetch pull requests. You may filter these in your own dashboard.

## Installation

You can install the package via composer:

```bash
composer require enflow/laravel-dashboard-github-tile
```

## Usage

In your dashboard view you use the `livewire:github` component.

```html
<x-dashboard>
    <livewire:github position="e5:e12" />
</x-dashboard>
```

Add the following command in ```app\Console\Kernel.php``` 
```
$schedule->command(FetchGithubPullRequestsCommand::class)->hourly();
```

## Testing
``` bash
$ composer test
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security related issues, please email michel@enflow.nl instead of using the issue tracker.

## Credits
- [Bart Noordsij](https://github.com/abartn)
- [Michel Bardelmeijer](https://github.com/mbardelmeijer)
- [All Contributors](../../contributors)

## About Enflow
Enflow is a digital creative agency based in Alphen aan den Rijn, Netherlands. We specialize in developing web applications, mobile applications and websites. You can find more info [on our website](https://enflow.nl/en).

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
