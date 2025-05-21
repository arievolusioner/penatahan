<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SetelanResource\Pages;
use App\Filament\Resources\SetelanResource\RelationManagers;
use App\Models\Setelan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SetelanResource extends Resource
{
    protected static ?string $model = Setelan::class;

    public static function getNavigationLabel(): string
    {
        return 'Pengaturan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pengaturan';
    }

    public static function getNavigationSort(): ?int
    {
        return 10;
    }

    protected static ?string $navigationIcon = 'heroicon-o-cog';

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
            'index' => Pages\ListSetelans::route('/'),
            'create' => Pages\CreateSetelan::route('/create'),
            'edit' => Pages\EditSetelan::route('/{record}/edit'),
        ];
    }
}
