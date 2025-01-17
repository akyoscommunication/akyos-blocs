<?php

namespace Akyos\Blocks\Acf\Fields;

use App\Acf\Fields\Title;
use Extended\ACF\Fields\Group;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Tab;
use Extended\ACF\Fields\WYSIWYGEditor;

class AkyB_Content3
{
    public static function make(string $label, string $id, $layout = 'table')
    {
        return Group::make($label, $id)->fields([
            Tab::make("Contenu"),
            Title::make('Titre', 'title')
                ->required(),
            WYSIWYGEditor::make('Contenu', 'content'),
            AkyB_Button::make('Bouton', 'button'),
            Repeater::make('Images', 'images')
                ->fields([
                    Image::make('Image', 'image')
                        ->format('id'),
                ])
        ])->layout($layout);
    }
}
