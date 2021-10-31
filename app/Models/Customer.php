<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    //payment
    public function payment()
    {
        return
            $this->belongsToMany(Payment::class);
    }
}
