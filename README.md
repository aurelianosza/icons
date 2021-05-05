# Introduction

This library creates basic components blade icons based in [heroicons](https://heroicons.com/) icons library. 

## Installation

Access your laravel source and install following library.

```bash
composer require aurelianosza/icons --dev
```

Now run artisan command to copy blade files to your components path.

```
php artisan icons:install
```


## Usage

In your vies blade will be possible to call icons components by follow component.

```php
<x-icons.heroicons.outline.chart-pie />
```

The icon `chart-pie` from outline section of Heroicons library will be show in your laravel application view.


## Customization

If you use [tailwindcss](https://tailwindcss.com/) will may use customizations classes to customize your icons in applications.


### Examples
```php
<x-icons.heroicons.outline.chart-bar class="text-red-500" />
```

The icon `chart-bar` from outline section fill with `red-500` color from tailiwndcss.

```php
<x-icons.heroicons.solid.clipboard-check class="text-green-300 w-56" />
```

The icon 'clipboard-check' from solid section fill with `green-300` color and with width `56` from tailwindcss.



## License
[MIT](https://choosealicense.com/licenses/mit/)
