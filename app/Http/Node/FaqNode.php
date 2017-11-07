<?php

namespace App\Http\Node;

use App\Http\Node\Model\SectionNodeModel;
use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class FaqNode extends NodeModelConfiguration implements NodeInterface {


    public function showDisplay ()
    {

        $this->fieldShow(['QuestionID', 'Title', 'Question']);
        $this->fieldName([
            'Title' => 'Название',
            'Question' => 'Вопрос'
        ]);

        $this->buttonGroupDelete(false);
        $this->buttonCopy(false);
        $this->buttonAdd(false);
    }


    public function showEditDisplay()
    {
        $this->fieldShow(['Title', 'Description', 'KeyWords', 'Question', 'Answer', 'AnswerDate', 'Active']);
        $this->fieldName([
            'Title' => 'Название',
            'Description' => 'HTML Description',
            'KeyWords' => 'HTML Keywords',
            'Question' => 'Вопрос',
            'Answer' => 'Ответ',
            'AnswerDate' => 'Дата ответа',
            'Active' => 'Активация'
        ]);


        $section_result = array();

        $section = SectionNodeModel::all('SectionID', 'Section', 'Articles')->where('Articles', '=', 0)->toArray();

        foreach ($section as $item) {
            $section_result[$item['SectionID']] =  $item['Section'];
        }




        $this->setTypeField([
            'Question' => 'textarea',
            'Answer' => 'textarea',
            'Active' => ['radio', ['1' => 'Да', '0' => 'Нет']],
            'SectionID' => ['select', $section_result, null],
        ]);


    }


    public function showInsertDisplay()
    {
        $this->showEditDisplay();
    }

    public function showDelete()
    {

    }

}