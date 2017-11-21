<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * Name table in the database
     * 
     * @var string
     */
    protected $table = 'locations';

    /**
     * This attributes are that mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'repository', 'floor', 'shelf', 'street'
    ];

    /**
     * This attributes aren't mas assignable
     * 
     * @var array
     */
    protected $guarded = [
        'id'
    ];

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
