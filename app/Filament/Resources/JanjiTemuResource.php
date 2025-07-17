<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JanjiTemuResource\Pages;
use App\Filament\Resources\JanjiTemuResource\RelationManagers;
use App\Models\JanjiTemu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JanjiTemuResource extends Resource
{
    protected static ?string $model = JanjiTemu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

 public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('nama')->required(),
        Forms\Components\TextInput::make('email')->email()->required(),
        Forms\Components\DatePicker::make('tanggal')->required(),
        Forms\Components\TextInput::make('rujukan')->required(),
        Forms\Components\TextInput::make('phone')->required(),
        Forms\Components\Textarea::make('keluhan'),
    ]);
}

public static function table(Table $table): Table
{
    return $table->columns([
        Tables\Columns\TextColumn::make('nama')->searchable(),
        Tables\Columns\TextColumn::make('email'),
        Tables\Columns\TextColumn::make('tanggal'),
        Tables\Columns\TextColumn::make('rujukan'),
        Tables\Columns\TextColumn::make('phone'),
        Tables\Columns\TextColumn::make('keluhan'),
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
            'index' => Pages\ListJanjiTemus::route('/'),
            'create' => Pages\CreateJanjiTemu::route('/create'),
            'edit' => Pages\EditJanjiTemu::route('/{record}/edit'),
        ];
    }
}
