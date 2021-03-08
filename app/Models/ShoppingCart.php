<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'user_id',
        'volume'
    ];

    /*
     * The course that owns this purchase
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    /*
     * The user that purchased this course
     */
    public function buyer()
    {
        return $this->belongsTo(User::class);
    }
}
