<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repositories\FeedbackRepository;
use App\Infrastructure\Repositories\FeedbackRepositoryEloquent;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(FeedbackRepository::class, FeedbackRepositoryEloquent::class);
    }

    public function boot()
    {
        //
    }
}
