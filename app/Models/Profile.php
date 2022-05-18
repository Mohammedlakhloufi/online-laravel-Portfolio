<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['first_name','last_name','email','phone','address','bio','photo','github','twitter','facebook','linkedin'];
    // public function user()
    // {
    //     return $this->BelongsTo(User::class);
    // }
}
