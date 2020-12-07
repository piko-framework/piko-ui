<?php
/**
 * This file is part of Piko UI
 *
 * @copyright 2020 Sylvain PHILIP.
 * @license MIT; see LICENSE.txt
 * @link https://github.com/piko-framework/piko-datatable
 */
namespace piko\ui;

use piko\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $name = 'bootstrap';

    public $sourcePath = '@app/vendor/bower-asset/bootstrap/dist';

    public $js = [
        'js/bootstrap.min.js',
    ];

    public $css = [
        'css/bootstrap.min.css'
    ];

    public $dependencies = [
        'piko\ui\JQueryAsset'
    ];
}
