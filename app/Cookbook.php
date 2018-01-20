<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Cookbook
 *
 * @property int $id
 * @property int $chef_id
 * @property string $title
 * @property string $type
 * @property string $ingredient
 * @property string $flavor
 * @property string $step
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \App\Chef $chef
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Cookbook onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereChefId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereFlavor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereIngredient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereStep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cookbook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cookbook withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Cookbook withoutTrashed()
 * @mixin \Eloquent
 */
class Cookbook extends Model
{
    protected $fillable = [
        'chef_id',
        'title',
        'type',
        'ingredient',
        'flavor',
        'step'
    ];

    protected $dates = ['deleted_at'];

    use SoftDeletes;

    public function chef()
    {
        return $this->belongsTo('App\Chef');
    }
}
