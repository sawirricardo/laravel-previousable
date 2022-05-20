<?php

namespace Sawirricardo\Previousable\Tests\TestSupport;

use Illuminate\Database\Eloquent\Model;
use Sawirricardo\Previousable\HasPrevious;

class TestModel extends Model
{
    use HasPrevious;

    public $timestamps = false;

    protected $table = 'test_models';

    protected $guarded = [];

    protected $casts = [
        'field_two' => 'array',
        'field_three' => 'immutable_datetime',
    ];
}
