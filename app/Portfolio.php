<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Portfolio extends Model
{
    protected $table = 'portfolios';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
