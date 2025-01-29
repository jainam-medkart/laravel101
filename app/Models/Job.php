<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Marketing Director',
                'salary' => '50k'
            ],
            [
                'id' => '2',
                'title' => 'Engineering Director',
                'salary' => '50k'
            ],
            [
                'id' => '3',
                'title' => 'Finance Officer',
                'salary' => '50k'
            ]
        ];
    }

    public static function findById($id)
    {
        return Arr::first(self::all() , function($job) use ($id) {
            return $job['id'] === $id;
        });
    }
}
