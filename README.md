# Piko UI

Provides JQuery and Bootstrap asset bundles for Piko based projects.

## Installation

```bash
composer require piko/ui
```

## Use

In view template :

```php
use piko\ui\BootstrapAsset;

/* @var $this \piko\View */

BootstrapAsset::register($this);
```
