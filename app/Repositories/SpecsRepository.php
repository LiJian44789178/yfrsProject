<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class SpecsRepository extends BaseRepository
{
    public function model()
    {
        return "App\\Models\\Specs";
    }
}