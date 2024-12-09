<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\DepartmentEnum;

class Lecturer extends Model
{
    use HasFactory;

    // protected $table = 'dosen';

    // protected $primaryKey = 'nidn';

    // protected $incementing = false;

    // protected $keyType = 'char';

    // protected $attributes = [
    //     'is_active' => 1
    // ];

    protected $fillable = [
        'nidn',
        'firstname',
        'last_name',
        'department_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'department_id' => DepartmentEnum::class
    ];

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->firstname.' '.$this->last_name
        );
    }
}
