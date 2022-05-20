<?php

use Sawirricardo\Previousable\Tests\TestSupport\TestModel;

it('can get previous attribute after saving the model', function () {
    $model = TestModel::create([
        'name' => 'test',
        'field_one' => 'this is a test',
        'field_two' => ['this', 'is', 'a', 'test'],
        'field_three' => now()->toImmutable(),
    ]);

    $fieldThree = $model->field_three;
    $fieldTwo = $model->field_two;
    $fieldOne = $model->field_one;

    $model->update([
        'name' => 'test2',
        'field_one' => 'test2',
        'field_two' => ['test2'],
        'field_three' => $newDate = now()->addYear()->toImmutable(),
    ]);

    expect($model->getPrevious())
        ->toBeArray()
        ->and($model->getPrevious('name'))->toBe('test')
        ->and($model->getPrevious('field_one'))->toBe($fieldOne)
        ->and($model->getPrevious('field_two'))->toBe($fieldTwo)
        ->and($model->getPrevious('field_two.0'))->toBe('this')
        ->and($model->getPrevious('field_three')->isSameYear($fieldThree))
        ->toBeTrue();
});
