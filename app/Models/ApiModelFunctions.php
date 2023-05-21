<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PhpParser\Node\Expr\Cast\Object_;

class ApiModelFunctions extends Model
{
    /**
     * Create a new instance of the model.
     *
     * @param array $attributes
     * @return Builder|Model
     */
    public static function create(array $attributes): Model|Builder
    {
        return static::query()->create($attributes);
    }

    /**
     * Find a specific object by ID or throw a ModelNotFoundException.
     *
     * @param string $id
     * @return Model
     * @throws ModelNotFoundException
     */
    public static function findOrFail(string $id): Model
    {
        $object = static::query()->find($id);

        if (!$object) {
            throw (new ModelNotFoundException)->setModel(static::class, $id);
        }

        return $object;
    }
}

