<?php

namespace App\Http\Node;

use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class SettingsNode extends NodeModelConfiguration {


    public function showDisplay ()
    {
        $this->setTitle('Настройки');
        $this->fieldName([
            'email_user' => 'E-Mail получателя формы',
            'count_last_article' => 'Количество последних статей',
            'count_article_page' => 'Количество статей на страницу',
            'count_last_faq' => 'Количество последних вопросов',
            'count_faq_page' => 'Количество вопросов на страницу',
            'count_random_faq' => 'Количество рандомных вопросов',
            'admin_email2' => 'Admin E-mail 2',
            'admin_email3' => 'Admin E-mail 3',
            'admin_email4' => 'Admin E-mail 4'
        ]);
        $this->formShow(1);

    }


}