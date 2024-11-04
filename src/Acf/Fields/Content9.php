<?php

namespace Akyos\Blocks\Acf\Fields;

use App\Acf\Fields\Title;
use Extended\ACF\Fields\Group;
use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Select;
use Extended\ACF\Fields\Tab;
use Extended\ACF\Fields\WYSIWYGEditor;

class Content9
{
    public static function make(string $label, string $id, $layout = 'table')
    {
        return Group::make($label, $id)->fields([
            Tab::make("Contenu"),
            Repeater::make('Contenu', 'contents')
                ->fields([
                    Title::make('Titre', 'title'),
                    WYSIWYGEditor::make('Contenu', 'content'),
                    Image::make('Image', 'image')
                        ->format('id'),
                    Select::make('Position', 'order')
                        ->choices([
                            'left' => 'Gauche',
                            'right' => 'Droite',
                        ])->default('left'),
                ])->layout('block')->collapsed('title'),
        ])->layout($layout);
    }
}