<?php

namespace Raistlfiren\FAIconFieldType;

use Raistlfiren\FAIconFieldType\Field\FAIconPickerField;
use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class FAIconFieldTypeExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new FAIconPickerField()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }

    protected function registerAssets()
    {
        $style = (new Stylesheet('css/fontawesome-iconpicker.min.css'))
            ->setZone(Zone::BACKEND);
        $js = (new JavaScript('js/fontawesome-iconpicker.min.js'))
            ->setZone(Zone::BACKEND);

        return [
            $style,
            $js
        ];
    }
}
