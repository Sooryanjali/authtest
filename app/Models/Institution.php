<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;
class Institution extends Model
{
    use HasFactory;

    protected $table = 'Institution';
    protected $primaryKey = 'Institution_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Name_of_institution',
        'Pincode',
        'Street_Address',
        'District',
        'State',
        'Email',
        'Category_of_Institution',
        'Type_of_Institution',
        'Affiliation',
        'Institution_logo',
        'Instagram_handle',
        'Facebok_handle',
        'Youtube_channel',
        'Year_of_establishment_of_college',
        'Contact_number',
    ];

    // Define relationships
    public function machines()
    {
        return $this->hasMany(Machine::class, 'Institution_id', 'Institution_id');
    }
}
