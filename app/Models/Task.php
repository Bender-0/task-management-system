<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;

class Task extends Model
{
    use HasFactory;

    public function project(): BelongsTo 
    { 
        return $this->belongsTo(Project::class); 
    }

    public function category(): BelongsTo 
    { 
        return $this->belongsTo(Category::class); 
    }

    protected $fillable = [
        'project_id',
        'category_id',
        'title',
        'description',
        'status',
        'due_date',
    ];
}
