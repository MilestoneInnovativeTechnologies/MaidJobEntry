<?php

namespace Milestone\MaidJobEntry;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Milestone\Appframe\Model\Group;

class Manager extends Model
{
    protected $table = 'users';
    protected $hidden = ['password'];

    protected static function boot(){
        parent::boot();
        static::created(function($model){
            \Milestone\Appframe\Model\User::find($model->id)->Groups()->sync(Group::where('name','manager')->first()->id);
        });
        static::addGlobalScope('only', function (Builder $builder) {
            $builder->whereHas('Groups',function($q){ $q->where('name','manager'); });
        });
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = \Hash::make($value);
    }

    public function Groups(){
        return $this->belongsToMany(Group::class, '__group_users', 'user', 'group')->withTimestamps();
    }
}
