<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    /**
     * Name table in the database
     * 
     * @var string
     */
    protected $table = 'requisitions';

    /**
     * This attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'occurred'
    ];

    /**
     * This attributes that aren't mass assignable
     * 
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Relationship with Contributor
     * 
     * @return void
     */
    public function contributors()
    {
        return $this->belongsTo(Contributor::class);
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
