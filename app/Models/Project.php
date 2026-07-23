<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'technologies',
        'status',
        'thumbnail',
        'github_url',
        'live_url',
        'featured',
        'project_date',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'project_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('title') && !$project->isDirty('slug')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function getTechStackAttribute()
    {
        return $this->technologies ? explode(',', $this->technologies) : [];
    }

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'completed' => 'bg-emerald-500/20 text-emerald-400',
            'ongoing' => 'bg-amber-500/20 text-amber-400',
            'planning' => 'bg-blue-500/20 text-blue-400',
            default => 'bg-gray-500/20 text-gray-400',
        };
    }
}

