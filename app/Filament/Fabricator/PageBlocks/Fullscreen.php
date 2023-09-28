<?php

namespace App\Filament\Fabricator\PageBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Fullscreen extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('fullscreen')
            ->schema([
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