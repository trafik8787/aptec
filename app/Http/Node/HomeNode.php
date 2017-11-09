<?php

namespace App\Http\Node;

use App\Http\Node\Model\ArticleNodeModel;
use App\Http\Node\Model\ContactNodeModel;
use App\Http\Node\Model\FaqNodeModel;
use App\Http\Node\Model\VideoNodeModel;
use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class HomeNode extends NodeModelConfiguration {

    public static $alias_url = 'admin';


    public function showDisplay ()
    {
        $count_article = ArticleNodeModel::count();
        $count_faq = FaqNodeModel::count();
        $count_contact = ContactNodeModel::count();
        $count_video = VideoNodeModel::count();
        return view('admin.dashboard', compact('count_article', 'count_faq', 'count_contact','count_video'));
    }

}