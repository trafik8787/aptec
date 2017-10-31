
<div class="top_nav">
    <table>
        <tbody><tr>
            @foreach($nav_category as $item)
                <td @if ($loop->first) class="fst" @elseif($loop->last) class="lst" @endif><a href="/{{$item['href']}}">{{$item['name']}}</a></td>
            @endforeach
        </tr>
        </tbody></table>
</div>