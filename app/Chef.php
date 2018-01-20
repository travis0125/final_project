<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Chef
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $professional
 * @property \Carbon\Carbon|null $employed_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Cookbook[] $cookbooks
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Chef onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereEmployedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereProfessional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chef whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Chef withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Chef withoutTrashed()
 * @mixin \Eloquent
 */
class Chef extends Model
{
    protected $fillable = [
        'name',
        'email',
        'professional',
        'employed_at'
    ];

    protected $dates = ['employed_at', 'deleted_at'];

    use SoftDeletes;

    public function cookbooks()
    {
        return $this->hasMany('App\Cookbook');
    }
}
