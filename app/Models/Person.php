<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $guarded = ['id'];

    const STATUS_ACTIVE = 'activo';
    const STATUS_INACTIVE = 'inactvo';

    const IS_OWNER = true;
    const NOT_IS_OWNER = false;

    protected $fillable = [
        'name',
        'last_name',
        'father_last_name',
        'email',
        'state',
        'team_id',
        'is_owner'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'team_id'
    ];

    public function scopeTeam($query, $value)
    {
        if($value && $value!='' && $value!='0'){
            return $query->where('team_id','=', $value);
        }
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team', 'team_id','id');
    }
  
}
