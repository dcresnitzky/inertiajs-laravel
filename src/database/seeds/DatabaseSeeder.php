<?php

use App\JobPosition;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(JobPosition::class, 30)
            ->create()
            ->each(function (JobPosition $job) {
                $job->tags()->createMany(factory(App\Tag::class, rand(1, 4))->make()->toArray());
            });
    }
}
