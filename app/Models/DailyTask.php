<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DailyTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'report_date',
        'morning_task',
        'afternoon_progress',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
