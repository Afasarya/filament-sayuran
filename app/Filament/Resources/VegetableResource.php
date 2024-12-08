<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VegetableResource\Pages;
use App\Models\Vegetable;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;




class VegetableResource extends Resource
{
    
    protected static ?string $model = Vegetable::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                    FileUpload::make('image')
                    ->label('Vegetable Image')
                    ->image()
                    ->directory('vegetables') // Folder penyimpanan di storage/app/public/vegetables
                    ->required()
                    ->maxSize(1024) // Maksimal 1 MB
                    ->imagePreviewHeight('150'),
                    
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Image')
                ->size(50), // Ukuran gambar di tabel
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->limit(50),
            Tables\Columns\TextColumn::make('price')->money('IDR', true),
        ])
        ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVegetables::route('/'),
            'create' => Pages\CreateVegetable::route('/create'),
            'edit' => Pages\EditVegetable::route('/{record}/edit'),
        ];
    }
}
