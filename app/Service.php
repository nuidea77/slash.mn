<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Service extends Model
{
    protected $table = 'services';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
