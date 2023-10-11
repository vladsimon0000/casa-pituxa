<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Filament\Resources\SettingsResource\RelationManagers;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\View;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns([
                'sm' => 1,
                'lg' => 2
            ])
            ->schema([
                Section::make('Theme')
                    ->description('Creativity variables')
                    ->schema([
                        ColorPicker::make('primary')
                            ->label('')
                            ->prefix('Primary')
                            ->helperText('Used heavily in text and logo.')
                            ->required()
                        ,
                        ColorPicker::make('secondary')
                            ->label('')
                            ->prefix('Secondary')
                            ->helperText('Used as a complementary color.')
                            ->required()
                        ,
                        ColorPicker::make('neutral')
                            ->label('')
                            ->prefix('Neutral')
                            ->helperText('Rarely used.')
                            ->required()
                        ,
                        ColorPicker::make('base-100')
                            ->label('')
                            ->prefix('Base')
                            ->helperText('Background color.')
                            ->required()
                        ,
                    ])
                    ->columnSpan(1)
                    ,
                View::make('preview.theme')->columnSpan(1)
                    ,
                Section::make('Theme')
                    ->description('Creativity variables')
                    ->schema([
                        
                    ])
                ,

                Section::make('Fonts')
                    ->description('Creativity variables')
                    ->schema([
                        TextInput::make('default')
                            ->label('')
                            ->prefix('Default')
                            ->helperText('Used in text which is not categorized otherwise.')
                            ->required()
                        ,
                        TextInput::make('logo')
                            ->label('')
                            ->prefix('Logo')
                            ->helperText('Logo font.')
                            ->required()
                        ,
                        TextInput::make('title')
                            ->label('')
                            ->prefix('Title')
                            ->helperText('Header font.')
                            ->required()
                        ,
                        TextInput::make('paragraph')
                            ->label('')
                            ->prefix('paragraph')
                            ->helperText('Paragraph font.')
                            ->required()
                        ,
                    ])
                    ->columnSpan(1)
                ,

            ])
        ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'view' => Pages\ViewSettings::route('/{record}'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}