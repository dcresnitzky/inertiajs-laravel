<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\JobApplication
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $attachment
 * @property int $job_position_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\JobPosition $position
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereJobPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class JobApplication extends Model
{
    protected $table = 'job_application';

    protected $fillable = [
        'name', 'phone', 'email', 'attachment', 'job_position_id'
    ];

    public function position()
    {
        return $this->belongsTo(JobPosition::class);
    }
}

