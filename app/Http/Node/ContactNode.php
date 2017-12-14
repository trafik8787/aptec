<?php

namespace App\Http\Node;

use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class ContactNode extends NodeModelConfiguration implements NodeInterface {


    public function showDisplay ()
    {

        $this->buttonGroupDelete(false);
        $this->buttonCopy(false);
        $this->buttonAdd(false);

        $this->fieldOrderBy(1, 'desc');
        $this->buttonEdit(false);
        $this->fieldShow(['id', 'lastname', 'address', 'tel', 'email', 'created_at']);
        $this->fieldName([
            'id' => 'ID',
            'lastname' => 'Имя Фамилия',
            'address' => 'Адрес',
            'tel' => 'Телефон',
            'email' => 'Email',
            'created_at' => 'Дата создания'
            ]);

    }


    public function showEditDisplay()
    {


    }


    public function showInsertDisplay()
    {

    }

    public function showDelete()
    {

    }

}