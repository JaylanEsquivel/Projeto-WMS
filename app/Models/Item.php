<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Name table in the database
     * 
     * @var string
     */
    protected $table = 'items';

    /**
     * This attributes are that mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name'
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
     * Relationship with Area
     * 
     * @return void
     */
    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }

    /**
     * Relationship with Location
     * 
     * @return void
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    /**
     * Relationship with Requisition
     * 
     * @return void
     */
    public function requisitions()
    {
        return $this->belongsToMany(Requisition::class);
    }
}
