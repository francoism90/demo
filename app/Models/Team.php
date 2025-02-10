<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model implements HasCurrentTenantLabel
{
    use HasFactory;

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'open_at' => 'date:Y-m-d',
    ];

    public function getCurrentTenantLabel(): string
    {
        return 'Current team';
    }
}
