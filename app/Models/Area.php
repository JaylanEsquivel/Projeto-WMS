<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * Name table in the database
     * 
     * @var string
     */
    protected $table = 'areas';

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
     * Relationship with User
     * 
     * @return void
     */
    public function contributors()
    {
        return $this->hasMany(Contributor::class);
    }

    /**
     * Relationship with Iten
     * 
     * @return void
     */
    public function itens()
    {
        return $this->belongsToMany(Iten::class);
    }
}
