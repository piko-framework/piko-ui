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

class JQueryAsset extends AssetBundle
{
    public $name = 'jquery';

    public $sourcePath = '@app/vendor/bower-asset/jquery/dist';

    public $js = [
        'jquery.min.js',
    ];
}
