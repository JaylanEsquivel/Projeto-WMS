<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    /**
     * Name table in the database
     * 
     * @var string
     */
    protected $table = 'contributors';

    /**
     * This attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * This attributes aren't mass assignable
     * 
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Relationhship with Area
     * 
     * @return void
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * Relationship with Requisition
     * 
     * @return void
     */
    public function requisitions()
    {
        return $this->hasMany(Requisition::class);
    }
}
