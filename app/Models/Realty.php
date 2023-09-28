<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'neighborhood_id','city_id','comments', 'value', 'offer_type', 'rooms_qt', 'toilet_qt', 'suite_qt', 'parkingspace_qt', 'state_id', 'realty_type_id'];

    protected function state()
    {
        return $this->belongsTo(State::class);
    }
    protected function city()
    {
        return $this->belongsTo(City::class);
    }
    protected function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
