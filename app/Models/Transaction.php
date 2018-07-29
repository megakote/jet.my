<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    const TYPE = [
      0 => 'Расход',
      1 => 'Приход'
    ];

    public function getTypeAttributes()
    {
        return $this::TYPE[$this->type_id];
    }
}
