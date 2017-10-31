<?php

namespace App\Http\Node;

use App\Http\Node\Model\SectionNodeModel;
use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class ArticleNode extends NodeModelConfiguration implements NodeInterface {

    public static $alias_url = 'article';
    public function showDisplay ()
    {

        $this->setTitle('Статьи');
        $this->fieldShow(['ArticleID','Title']);
        $this->buttonCopy(false);
    }


    public function showEditDisplay()
    {

        $this->setTitle('Редактировать статью');
        $this->fieldName(['Title' => 'Название',
            'ShortTitle' => 'HTML Title',
            'Description' => 'HTML Description',
            'KeyWords' => 'HTML Keywords',
            'SectionID' => 'Категория',
            'Txt' => 'Текст',
            'Active' => 'Активация',
            'Announcement' => 'Анотация']);
        $this->fieldShow(['Title','ShortTitle', 'Description', 'KeyWords', 'Announcement', 'SectionID', 'Txt', 'Active']);

        $this->enableEditor(['Txt']);

        $section = SectionNodeModel::all('SectionID', 'Section')->toArray();
        $section_result = array();
        foreach ($section as $item) {
            $section_result[$item['SectionID']] =  $item['Section'];
        }


        $this->setTypeField([
            'Txt' => 'textarea',
            'Active' => ['radio', ['1' => 'Да', '0' => 'Нет']],
            'SectionID' => ['select', $section_result, null],
        ]);

    }


    public function showInsertDisplay()
    {

    }

    public function showDelete()
    {

    }

}