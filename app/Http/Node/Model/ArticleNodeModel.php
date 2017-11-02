<?php

namespace App\Http\Node\Model;

use Illuminate\Database\Eloquent\Model;
use Trafik8787\LaraCrud\EloquentModel\All;

class ArticleNodeModel extends All
{
    protected $table = 'Pravo1Articles';
    protected $primaryKey = 'ArticleID';
//    public $timestamps = false;

    public function sections()
    {
        return $this->belongsTo(SectionNodeModel::class, 'SectionID', 'SectionID');
    }

}


