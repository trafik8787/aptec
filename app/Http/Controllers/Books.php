<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\PageNodeModel;
use Illuminate\Http\Request;

class Books extends Controller
{
    private $page_books;
    /**
     * Books constructor.
     */
    public function __construct (PageNodeModel $pageNodeModel) {
        parent::__construct();

        $this->page_books = $pageNodeModel->find(6);

        parent::setSeoTitle($this->page_books->h_t);
        parent::setSeoDescription($this->page_books->h_d);
        parent::setSeoKeywords($this->page_books->h_k);

        parent::setBlocRenderLeft(['knigi_dlya_vas']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->page_books->data;
        return view('page.books', compact('data'));
    }
}
