# Toasts for Laravel Livewire with Bootstrap 5 

This package allows you to dynamically show Bootstrap toasts via Laravel Livewire components.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pleshkovpa/toasts-livewire.svg?style=flat-square)](https://packagist.org/packages/pleshkovpa/toasts-livewire)
[![Total Downloads](https://img.shields.io/packagist/dt/pleshkovpa/toasts-livewire.svg?style=flat-square)](https://packagist.org/packages/pleshkovpa/toasts-livewire)
[![License](https://img.shields.io/packagist/l/pleshkovpa/toasts-livewire.svg?style=flat-square)](https://packagist.org/packages/pleshkovpa/toasts-livewire)

## Documentation

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Showing Toasts](#showing-toasts)
    - [Emitting Events](#emitting-events)
- [Publishing Assets](#publishing-assets)
    - [Custom Config](#custom-config)
    - [Custom View](#custom-view)

## Requirements

- Bootstrap 5 must be installed via webpack first

## Installation

Require the package:

```console
composer require pleshkovpa/toasts-livewire
```

Add the `livewire:toasts` component to your app layout view:

```html
<livewire:toasts/>
<livewire:scripts/>
<script src="{{ asset('js/app.js') }}"></script>
```

Require `../../vendor/pleshkovpa/toasts-livewire/resources/js/toasts` in your app javascript file:

```javascript
require('@popperjs/core');
require('bootstrap');
require('../../vendor/pleshkovpa/toasts-livewire/resources/js/toasts');
```

## Usage

### Showing Toasts

Show a toast by emitting the `showToast` event with the color & message:

```php
public function save()
{
    $this->validate();

    $this->user->update([
        'name' => $this->name,
        'email' => $this->email,
    ]);

    $this->emit('showToast', 'success', __('User updated!'));
}
```

The color should be a Bootstrap color name e.g. `success`, `danger`, `info`.

### Emitting Events

You can emit events inside your views:

```html
<button type="button" wire:click="$emit('showToast', 'danger', 'Closing!')">
    {{ __('Close') }}
</button>
```

Or inside your components, just like any normal Livewire event:

```php
public function save()
{
    $this->validate();

    // save the record

    $this->emit('showToast', 'info', __('Record saved!'));
}
```

## Publishing Assets

### Custom Config

Customize the toasts configuration by publishing the config file:

```console
php artisan vendor:publish --tag=toasts-livewire:config
```

Now you can easily change things like the hide delay and error message.

### Custom View

Use your own toasts view by publishing the view file:

```console
php artisan vendor:publish --tag=toasts-livewire:views
```

Now edit the view file inside `resources/views/vendor/toasts-livewire`. The package will use this view to render the component.
