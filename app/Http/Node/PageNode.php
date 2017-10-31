<?php

namespace App\Http\Node;

use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class PageNode extends NodeModelConfiguration implements NodeInterface {


    public function showDisplay ()
    {

        $this->fieldShow(['name']);
        $this->buttonAdd(false);
        $this->buttonDelete(false);
        $this->buttonCopy(false);
        $this->buttonGroupDelete(false);

    }


    public function showEditDisplay()
    {
        $this->enableEditor(['rdata', 'data']);
        $this->setTypeField([
            'rdata' => 'textarea',
            'data' => 'textarea',
        ]);

        $this->fieldShow(['name', 'h_t', 'h_k', 'h_d', 'data', 'rdata', 'sortorder']);
        $this->fieldName([
            'name' => 'Название',
            'h_t' => 'HTML Title',
            'h_k' => 'HTML Keywords',
            'h_d' => 'HTML Description',
            'data' => 'Текст',
            'rdata' => 'Текст справа',
            'sortorder' => 'Сортировка'
        ]);
    }


    public function showInsertDisplay()
    {

    }

    public function showDelete()
    {

    }



}