<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContentDay extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('content-day')
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->placeholder('Title...')
                ->helperText('Displayed as the title.'),

            TextInput::make('title_extension')
                ->label('Title extension')
                ->placeholder('Extension...')
                ->helperText('Displayed to the right of the title.'),

            Textarea::make('paragraph')
                ->label('Paragraph')
                ->placeholder('Paragraph...')
                ->helperText('Something about your business.'),

            TextInput::make('label')
                ->label('Button label')
                ->placeholder('Button label...')
                ->helperText('Text displayed on the button.'),

            CuratorPicker::make('image')
                ->label('Image')
                ->lazyLoad(false)

           ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}