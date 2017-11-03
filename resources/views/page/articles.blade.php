@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px">
        <p><b>Последние статьи по праву</b></p>

        @foreach($article as $item)
            <a href="/articles/view/{{$item->ArticleID}}.html"><b>{{$item->Title}}</b></a><br>

            <p><span class="dateMy">{{$item->created_at->format('d.m.Y')}}</span>
                {{$item->Announcement}}
            </p>
        @endforeach


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection