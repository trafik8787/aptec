@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px; padding-top: 13px;">

        {!! $data !!}

        <p><b>Последние вопросы по праву</b></p>

        @foreach($last_faq as $item)

            <div><a href="/questions/view/{{$item->QuestionID}}.html"><b>{{$item->Title}}</b></a></div>

            <p><span class="dateMy">{{\Carbon\Carbon::parse($item->AnswerDate)->format('d.m.Y')}}</span>
                {{ str_limit(strip_tags($item->Question), 220) }}
                <a href="/questions/view/{{$item->QuestionID}}.html">...</a>
            </p>

        @endforeach

        <hr>
        <p><b>Вопросы по темам</b></p>

        <ul>
            @foreach($category as $item)
                <li><a href="/questions/{{$item['SectionID']}}/"><b>{{$item['Section']}}</b></a></li>
            @endforeach

        </ul>

        <br>

        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection
