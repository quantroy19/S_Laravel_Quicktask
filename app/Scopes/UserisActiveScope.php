<?php

namespace App\Scopes;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class UserisActiveScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $isActive = 1;
        $builder->where('isActive', $isActive);
    }
}
