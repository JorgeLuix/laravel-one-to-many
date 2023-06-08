<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'description', 'repository_url','user_id', 'tecnology_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tecnology(): BelongsTo
    {
        return $this->belongsTo(Tecnology::class);
    }

}
