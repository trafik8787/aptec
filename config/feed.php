<?php

return [

    'feeds' => [
        'main' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * 'App\Model@getAllFeedItems'
             *
             * You can also pass an argument to that method:
             * ['App\Model@getAllFeedItems', 'argument']
             */
//            ['sdf', 'asd'],
            'items' => '\App\Http\Controllers\Articles::getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/export/rss.xml',

            'title' => 'Адвокат Ави Аптекман',
        ],
    ],

];
