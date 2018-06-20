<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\PageNodeModel;
use App\Http\Pagi\Paginate;
use Illuminate\Http\Request;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;

class SearchController extends Controller
{

    public function index(Request $request, $page = null)
    {

        if ($page === null) {
            $page = 1;
        }

        $q = null;
        if (!empty($request->input('q'))) {
            $q = '?q='.$request->input('q');
        }

        $start = 1;
        if (!empty($page)) {
            if ($page > 1) {

                $start = (10 * $page) - 10;
            }
        }

        $fulltext = new LaravelGoogleCustomSearchEngine();
        $results = $fulltext->getResults($request->input('q'), ['start' => $start,  'num' => 10]);
        $info = $fulltext->getSearchInformation();

        $paginate = Paginate::makeLengthAware($results, $info->totalResults, $page, $q);

        return view('page.search', compact('results', 'paginate', 'info'));
    }
}
