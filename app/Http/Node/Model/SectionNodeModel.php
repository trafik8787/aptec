<?php

namespace App\Http\Node\Model;

use Illuminate\Database\Eloquent\Model;
use Trafik8787\LaraCrud\EloquentModel\All;

class SectionNodeModel extends All
{
    protected $table = 'Pravo1Sections';
    protected $primaryKey = 'SectionID';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * todo отношение получить все вопросы этой категории
     */
    public function questions()
    {
        return $this->hasMany(FaqNodeModel::class, 'SectionID', 'SectionID');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * todo отношение получить все статьи этой категории
     */
    public function articles() {
        return $this->hasMany(ArticleNodeModel::class, 'SectionID', 'SectionID');
    }

}
