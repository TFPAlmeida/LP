<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcements';
    protected $fillable = [
        'company',
        'role',
        'description',
        'gallery',
        'company_id',
        'company_email',
    ];
}
