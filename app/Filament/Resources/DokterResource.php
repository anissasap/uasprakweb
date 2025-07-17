<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokterResource\Pages;
use App\Filament\Resources\DokterResource\RelationManagers;
use App\Models\Dokter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;


class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('nama')->required(),
        Forms\Components\TextInput::make('spesialis')->required(),
        Forms\Components\TextInput::make('no_hp')->required(),
        Forms\Components\TextInput::make('kode_booking')->required(),

FileUpload::make('foto')
    ->label('Foto')
    ->image() // ⬅️ penting: mendeklarasikan sebagai image
    ->directory('dokter') // opsional: menyimpan di folder 'dokter'
    ->imagePreviewHeight('150')
    ->maxSize(1024) // opsional: maksimal 1MB
    ->required(),

    ]);
}

public static function table(Table $table): Table
{
    return $table->columns([
        Tables\Columns\ImageColumn::make('foto'),
        Tables\Columns\TextColumn::make('nama')->searchable(),
        Tables\Columns\TextColumn::make('spesialis'),
        Tables\Columns\TextColumn::make('no_hp'),
        Tables\Columns\TextColumn::make('kode_booking'),
    ])->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDokters::route('/'),
            'create' => Pages\CreateDokter::route('/create'),
            'edit' => Pages\EditDokter::route('/{record}/edit'),
        ];
    }
}
