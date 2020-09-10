<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\JobPosition
 *
 * @property int $id
 * @property string $title
 * @property string $local
 * @property string $description
 * @property mixed $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\JobApplication[] $applications
 * @property-read int|null $applications_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $location
 * @property string $type
 * @property string $short_description
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPosition whereType($value)
 */
class JobPosition extends Model
{
    protected $table = 'job_position';

    protected $fillable = [
        'title', 'location', 'desciption', 'short_description', 'type'
    ];

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
