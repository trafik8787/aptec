<?php

namespace App\Http\Node\Model;

use Illuminate\Database\Eloquent\Model;
use Trafik8787\LaraCrud\EloquentModel\All;

class FaqNodeModel extends All
{
    protected $table = 'Pravo1ConsultationArchive2';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function sections()
    {
        return $this->belongsTo(SectionNodeModel::class, 'SectionID', 'SectionID');
    }

}
