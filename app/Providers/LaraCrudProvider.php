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
        'App\Http\Node\SettingsNode' => [
            'priory' => 5,
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
