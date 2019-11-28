<?php

namespace Milestone\MaidJobEntry;

use Illuminate\Database\Eloquent\Model;

class MaidJob extends Model
{
    protected $table = 'maid_jobs';

    protected static function boot(){
        parent::boot();
        static::creating(function($model){
            if(!$model->date) return;
            $date = strtotime($model->date);
            $model->attributes['year'] = date('Y',$date);
            $model->attributes['month'] = date('n',$date);
            $model->attributes['day'] = date('z',$date);
            $model->attributes['week'] = date('W',$date);
        });
        static::updating(function($model){
            if(!$model->date) return;
            $date = strtotime($model->date);
            $model->attributes['year'] = date('Y',$date);
            $model->attributes['month'] = date('n',$date);
            $model->attributes['day'] = date('z',$date);
            $model->attributes['week'] = date('W',$date);
        });
    }

    public function Maid(){ return $this->belongsTo(Maid::class,'maid','id'); }

    public function scopeDay($Q){
        $year = date('Y'); $day = date('z');
        return $Q->where(compact('year','day'));
    }
    public function scopeLastDay($Q){
        $yesterday = strtotime('-1 day');
        $year = date('Y',$yesterday); $day = date('z',$yesterday);
        return $Q->where(compact('year','day'));
    }
    public function scopeWeek($Q){
        $year = date('Y'); $week = date('W');
        return $Q->where(compact('year','week'));
    }
    public function scopeLastWeek($Q){
        $last = strtotime('-1 week'); $year = date('Y',$last); $week = date('W',$last);
        return $Q->where(compact('year','week'));
    }
    public function scopeMonth($Q){
        $year = date('Y'); $month = date('n');
        return $Q->where(compact('year','month'));
    }
    public function scopeLastMonth($Q){
        $last = strtotime('-1 month'); $year = date('Y',$last); $month = date('n',$last);
        return $Q->where(compact('year','month'));
    }
    public function scopeLatest($Q){
        return $Q->orderBy('date','desc');
    }

    protected $appends = ['human_date'];
    public function getHumanDateAttribute(){
        return date('D dS M Y',strtotime($this->date));
    }
}
