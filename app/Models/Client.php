<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'tenant';

    protected $fillable = [
        'name',
        'phone',
        'birthdate',
        'last_contact_at',
        'next_contact_at',
        'human_detail',
    ];

    protected function casts(): array
    {
        return [
            'phone' => 'encrypted',
            'human_detail' => 'encrypted',
            'birthdate' => 'date',
            'last_contact_at' => 'datetime',
            'next_contact_at' => 'datetime',
        ];
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
