<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use \App\Traits\TraitUuid;
	use SoftDeletes;

    /**
     * The model's table
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The table's primary key
     *
     * @var string
     */
    protected $primaryKey = 'id';

    // Change default 'created_at' to 'createdAt'
    const CREATED_AT = 'createdAt';
    // Change default 'updated_at' to 'updatedAt'
    const UPDATED_AT = 'updatedAt';

    protected $fillable = ['name', 'slug'];
}
