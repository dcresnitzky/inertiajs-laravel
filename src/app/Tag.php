<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tag
 *
 * @property int $id
 * @property string $title
 * @property int $job_position_id
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereJobPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTitle($value)
 * @mixin \Eloquent
 */
class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = ['title'];

    public $timestamps = false;
}
