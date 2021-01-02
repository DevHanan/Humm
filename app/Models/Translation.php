<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App;

class Translation extends Model{

    const STATUS_SAVED = 0;
    const STATUS_CHANGED = 1;

    protected $table = 'ltm_translations';
    protected $guarded = array('id', 'created_at', 'updated_at');

    public function scopeOfTranslatedGroup($query, $group)
    {
        return $query->where('group', $group)->whereNotNull('value');
    }

    public function scopeOrderByGroupKeys($query, $ordered) {
        if ($ordered) {
            $query->orderBy('group')->orderBy('key');
        }

        return $query;
    }

    public function scopeSelectDistinctGroup($query)
    {
        $select = '';

        switch (DB::getDriverName()){
            case 'mysql':
                $select = 'DISTINCT `group`';
                break;
            default:
                $select = 'DISTINCT "group"';
                break;
        }

        return $query->select(DB::raw($select));
    }
}