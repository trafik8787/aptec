<?php

namespace App\Http\Node;

use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

class HomeNode extends NodeModelConfiguration {

    public static $alias_url = 'admin';
    public function showDisplay ()
    {

        return 'sdf';
    }

}