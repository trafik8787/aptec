<?php

namespace App\Http\Node\Model;

use Illuminate\Database\Eloquent\Model;
use Trafik8787\LaraCrud\EloquentModel\All;

class ArticleNodeModel extends All
{
    private $category = [];
    protected $table = 'Pravo1Articles';
    protected $primaryKey = 'ArticleID';
//    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sections()
    {
        return $this->belongsTo(SectionNodeModel::class, 'SectionID', 'SectionID');
    }

    /**
     * @return mixed
     * получаем категории в которых есть статьи
     */
    public function scopeCategory()
    {

        $this->distinct()->get(['SectionID'])->map(function ($item, $key){
            $this->category[] = $item->SectionID;
        });

        return SectionNodeModel::whereIn('SectionID', $this->category)->orderBy('Section', 'asc')->get(['SectionID', 'Section']);
    }


    public function scopeLastArticles($query, $count)
    {
        return $query->orderBy('ArticleDate', 'desc')->take($count)->get();
    }


    public function scopeActive ($query)
    {
        return $query->where('Active', '=', 1);
    }
}


