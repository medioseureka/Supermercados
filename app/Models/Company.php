<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sortable;

    public $fillable = [];

    /**
     * sortable fields
     */
    public $sortable = [
        'name',
        'email',
        'created_at',
        'updated_at',
        
    ];

    /**
     * company has users
     *
     * @return User
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
