<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = "careers";

    protected $fillable =['job_title','job_location','job_type','job_skills',
                            'job_vacancy','job_experience','job_gender',
                            'job_qualification','job_expiry_date',
                            'job_description'];
}
