<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([

                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Title...')
                    ->helperText('Displayed as the title.'),

                TextInput::make('title_extension')
                    ->label('Title extension')
                    ->placeholder('Extension...')
                    ->helperText('Displayed to the right of the title.'),

                RichEditor::make('paragraph')
                    ->label('Paragraph')
                    ->placeholder('Paragraph...')
                    ->helperText('Something about your business.'),

                TextInput::make('label')
                    ->label('Button label')
                    ->placeholder('Button label...')
                    ->helperText('Text displayed on the button.'),

                Checkbox::make('alternative')
                    ->label('Alternative image placement')
                    ->helperText('Display image on the left.'),

                Checkbox::make('accent')
                    ->label('Display accent')
                    ->helperText('Include page accent.'),

                CuratorPicker::make('image')
                    ->label('Image')
                    ->lazyLoad(false),

                Select::make('img_class')
                    ->options([
                        'object-contain' => 'Contain',
                        'object-cover' => 'Cover',
                        'object-fill' => 'Fill',
                        'object-none' => 'None',
                        'object-scale-down' => 'Scale',
                    ])
                    ->label('Image fit type')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}