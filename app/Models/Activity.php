<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $guarded = ['id'];


    protected $fillable = [
        'start_date',
        'end_date',
        'description',
        'person_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function scopePersonId($query, $value)
    {
        if($value && $value!='' && $value!='0'){
            return $query->where('person','=', $value);
        }
    }

    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'person_id','id');
    }

}
