<?php

namespace Ollico\Utilities\Tests;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Ollico\Utilities\Presenter\Present;
use Ollico\Utilities\Tests\Concerns\TestModel;
use Ollico\Utilities\Tests\Concerns\TestPresenter;
use Ollico\Utilities\Tests\Concerns\TestPresentModel;
use Orchestra\Testbench\TestCase;
use TypeError;

class PresenterTest extends TestCase
{
    /** @test */
    function it_can_transform_model_to_presenter()
    {
        $model = new TestPresentModel();

        $model = $model->present();

        $this->assertInstanceOf(TestPresenter::class, $model);
    }

    /** @test */
    function it_can_return_guid_through_presenter()
    {
        $model = new TestPresentModel();

        $model = $model->present();

        $this->assertEquals('1234-5678-90', $model->guid());
    }

    /** @test */
    function it_can_transform_collection_of_models()
    {
        $models = collect([
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
        ]);

        $models = Present::make($models);

        $models->each(function ($model) {
            $this->assertInstanceOf(TestPresenter::class, $model);
        });
    }

    /** @test */
    function it_can_transform_paginated_collection_of_models()
    {
        $models = collect([
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
        ]);

        $models = new LengthAwarePaginator($models->forPage(1, 2), $models->count(), 2, 1, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        $models = Present::make($models);

        $models->each(function ($model) {
            $this->assertInstanceOf(TestPresenter::class, $model);
        });
    }

    /** @test */
    function it_can_transform_paginated_collection_of_models_to_array()
    {
        $models = collect([
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
            new TestPresentModel(),
        ]);

        $models = new LengthAwarePaginator($models->forPage(1, 2), $models->count(), 2, 1, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        $models = Present::make($models)->toArray();

        $this->assertEquals(2, count(Arr::get($models, 'data')));
        $this->assertEquals(4, Arr::get($models, 'total'));
    }

    /** @test */
    function it_will_throw_an_error_if_model_does_not_match_instance_name()
    {
        $this->expectException(TypeError::class);

        $model = new TestModel();
        $model = $model->present();
    }

    /** @test */
    function it_can_transform_collection_to_array()
    {
        $model = new TestPresentModel();

        $model = $model->present()->toArray();

        $this->assertEquals('1234-5678-90', Arr::get($model, 'guid'));
    }
}
