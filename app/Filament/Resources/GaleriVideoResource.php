<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriVideoResource\Pages;
use App\Filament\Resources\GaleriVideoResource\RelationManagers;
use App\Models\GaleriVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriVideoResource extends Resource
{
    protected static ?string $model = GaleriVideo::class;

    public static function getNavigationLabel(): string
    {
        return 'Galeri Video';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Konten';
    }

    public static function getNavigationSort(): ?int
    {
        return 20;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
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
            'index' => Pages\ListGaleriVideos::route('/'),
            'create' => Pages\CreateGaleriVideo::route('/create'),
            'edit' => Pages\EditGaleriVideo::route('/{record}/edit'),
        ];
    }
}
