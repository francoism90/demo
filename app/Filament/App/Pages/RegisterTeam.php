<?php

namespace App\Filament\App\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'New team';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                DatePicker::make('open_at')
                    ->label(__('Open at'))
                    ->required()
                    ->seconds(false)
                    ->timezone('Europe/Amsterdam');
            ]);
    }
}
