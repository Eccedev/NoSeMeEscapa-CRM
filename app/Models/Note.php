<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $connection = 'tenant';

    protected $fillable = [
        'client_id',
        'body',
    ];

    protected function casts(): array
    {
        return [
            'body' => 'encrypted',
        ];
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
