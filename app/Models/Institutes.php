<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutes extends Model
{
    use HasFactory;
    protected $table = 'institutes';

    protected $fillable = [
        'teis',
        'district',
        'institute_name',
    ];

    public function teis()
    {
        return $this->belongsTo(MasterTeis::class, 'teis', 'id');
    }

    public function district()
    {
        return $this->belongsTo(MasterDistrict::class, 'district', 'id');
    }
}
