<?php

namespace Milestone\MaidJobEntry;

use Illuminate\Database\Eloquent\Model;

class Maid extends Model
{
    protected $table = 'maids';
    public function Jobs(){ return $this->hasMany(MaidJob::class,'maid','id'); }
    public function Nationality(){ return $this->belongsTo(Nationality::class,'nationality','id'); }

    protected $with = ['Nationality'];

    protected $appends = ['display'];
    public function getDisplayAttribute(){
        return $this->code . ' - ' . $this->name . ' (' . $this->Nationality->name . ')';
    }
}
