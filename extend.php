<?php

/*
 * This file is part of cadiducho/sketchfab.
 *
 * Copyright (c) 2022 Cadiducho.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Cadiducho\Sketchfab;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[sketchfab]{TEXT1}[/sketchfab]',
                '<iframe allow="autoplay; fullscreen; xr-spatial-tracking" frameborder="0" width="640" height="480" mozallowfullscreen="true" webkitallowfullscreen="true" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/{TEXT1}/embed"></iframe>'
            );
        }),
];
