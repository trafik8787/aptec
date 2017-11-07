<?php

namespace App\Http\Node;

use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class VideoNode extends NodeModelConfiguration implements NodeInterface {


    public function showDisplay ()
    {

        $this->setTitle('Видео');
        $this->fieldShow(['name']);

    }


    public function showEditDisplay()
    {
        $this->setTitle('Видео');
        $this->fieldShow(['name', 'description', 'image_url', 'url_video']);
        $this->fieldName([
            'name' => 'Название',
            'description' => 'Описание',
            'image_url' => 'Фото',
            'url_video' => 'URL видео'
        ]);
        $this->setTypeField([
            'description' => 'textarea'
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