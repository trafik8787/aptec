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

        $this->buttonEdit(false);

        $this->fieldName(['lastname' => 'Имя Фамилия',
            'address' => 'Адрес',
            'tel' => 'Телефон',
            'email' => 'Email'
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