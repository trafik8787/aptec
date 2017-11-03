<div class="hd">Статьи по разделам</div>
<ul class="articles">

    @foreach(\App\Http\Controllers\Articles::getCategory() as $item)
        @if(Request::is('articles/'.$item->SectionID.'/') or Request::is('articles/'.$item->SectionID))
            <li>{{$item->Section}}</li>
        @else
            <li><a href="/articles/{{$item->SectionID}}/">{{$item->Section}}</a></li>
        @endif

    @endforeach

</ul>
<br>

