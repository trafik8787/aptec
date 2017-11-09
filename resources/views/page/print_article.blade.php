@extends('app_print')
@section('print_content')

    <div style="display:table; min-height:1px; _height:1px">
        <p><a href="/articles/{{$category->SectionID}}/"><b>{{$category->Section}}</b></a></p>

        <div align="right">{{$article->created_at->format('d.m.Y')}}</div>


        <p><b>{{$article->Title}}</b></p>

        {!! $article->Txt !!}

        <br>
        <br>

        </p>
        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection