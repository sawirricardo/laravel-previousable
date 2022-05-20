# Generate previous attributes when saving Eloquent models

### From https://twitter.com/SteveTheBauman/status/1524865758043553816. Credit to Steve Bauman.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-previousable.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-previousable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-previousable/run-tests?label=tests)](https://github.com/sawirricardo/laravel-previousable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-previousable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-previousable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-previousable.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-previousable)

This package provides a trait that will generate previous attributes when saving any Eloquent model.

```php
$model = EloquentModel::create(['name' => 'Awesome application']);
$model->update(['name' => 'New attribute']);

$model->getPrevious(); // ['name' => 'Awesome application']
$model->getPrevious('name'); // 'Awesome application'
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-previousable.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-previousable)

We invest a lot of resources into creating [best in class open source packages](https://github.com/sawirricardo). You can support by donating to

-   [Paypal](https://paypal.me/sawirricardo)
-   BCA 8330123584

I appreciate you if you connect with me on [Twitter](https://twitter.com/RicardoSawir)

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-previousable
```

## Usage

Simply use the `Sawirricardo\Previousable\HasPrevious` trait in your Eloquent Model.

Here's an example of how to implement the trait:

```php
namespace App\Models;

use Sawirricardo\Previousable\HasPreviousable;
use Illuminate\Database\Eloquent\Model;

class EloquentModel extends Model
{
    use HasPreviousable;
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Steve Bauman](https://twitter.com/SteveTheBauman)
-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
