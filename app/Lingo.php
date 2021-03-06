<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lingo extends Model
{
    use SoftDeletes;

    protected $table = 'lingo';

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $fillable = [
        'phrase',
        'definition',
    ];

    public function jsonSerialize()
    {
        $result = parent::jsonSerialize();
        $result['url'] = $this->url();

        return $result;
    }

    public function url()
    {
        return '/lingo/' . $this->id;
    }
}
