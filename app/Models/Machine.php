<?php

// app/Models/Machine.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $table = 'machines';
    protected $primaryKey = 'Machine_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Institution_id',
        'Name_of_institution',
        'Machine_ID',
        'Machine_name',
        'Category',
        'Model',
        'Location',
        'Date_of_manufacture',
        'rate',
        'count',
        'Available',
        'image',
    ];

    // Define relationships
    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id', 'Institution_id');
    }

    public function institutionName()
    {
        return $this->belongsTo(Institution::class, 'Name_of_institution', 'Name_of_institution');
    }
}
