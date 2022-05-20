<?php

namespace Sawirricardo\Previousable;

use Illuminate\Database\Eloquent\Model;

trait HasPrevious
{
    protected $previous = [];

    protected static function bootHasPrevious()
    {
        static::saving(function (Model $model) {
            $model->previous = $model->getOriginal();
        });
    }

    public function getPrevious($key = null)
    {
        return data_get($this->previous, $key);
    }
}
