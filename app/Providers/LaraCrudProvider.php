<?php

namespace App\Providers;

use Trafik8787\LaraCrud\LaraCrudProvider as ServiceProvider;

class LaraCrudProvider extends ServiceProvider
{

    protected $navigation = [
        'App\Http\Node\ArticleNode' => [
            'priory' => 1,
            'title' => 'Статьи',
            'icon' => 'fa-tree'
        ],

        'App\Http\Node\FaqNode' => [
            'priory' => 2,
            'title' => 'Вопросы и ответы',
            'icon' => 'fa-tree'
        ],

        'App\Http\Node\PageNode' => [
            'priory' => 3,
            'title' => 'Страницы',
            'icon' => 'fa-tree'
        ],
        'App\Http\Node\VideoNode' => [
            'priory' => 4,
            'title' => 'Видео',
            'icon' => 'fa-tree'
        ],
        'App\Http\Node\ContactNode' => [
            'priory' => 5,
            'title' => 'Контакты',
            'icon' => 'fa-tree'
        ],
        'App\Http\Node\SettingsNode' => [
            'priory' => 6,
            'title' => 'Настройки',
            'icon' => 'fa-tree'
        ]

    ];

    protected $nodes = [
        'App\Http\Node\Model\ArticleNodeModel'         => 'App\Http\Node\ArticleNode',
        'App\Http\Node\Model\FaqNodeModel'         => 'App\Http\Node\FaqNode',
        'App\Http\Node\Model\HomeNodeModel'         => 'App\Http\Node\HomeNode',
        'App\Http\Node\Model\SettingsNodeModel'         => 'App\Http\Node\SettingsNode',
        'App\Http\Node\Model\PageNodeModel'         => 'App\Http\Node\PageNode',
        'App\Http\Node\Model\VideoNodeModel'         => 'App\Http\Node\VideoNode',
        'App\Http\Node\Model\ContactNodeModel'         => 'App\Http\Node\ContactNode',
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

}
