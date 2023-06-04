<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserInformation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users_information';

    protected $fillable = [
        'user_id',
        'cpf',
        'cellphone',
        'cnpj'
    ];

    protected $casts = [
        'cpf' => 'int',
        'cellphone' => 'int',        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}