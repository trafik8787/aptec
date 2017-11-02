@extends('app')
@section('content')


    <div style="display:table; min-height:1px; _height:1px">
        <p><a href="/questions/list/"><b>Вопросы и ответы</b></a></p>

        <p><b>{{$category->Section}}</b></p>

        @foreach($questions as $item)
            <div>
                <a href="/questions/view/{{$questions->currentPage()}}/{{$item->QuestionID}}.html">
                    <b>{{$item->Title}}</b>
                </a>
            </div>

            <p>
                <span class="dateMy">{{\Carbon\Carbon::parse($item->AnswerDate)->format('d.m.Y')}}</span>
                {{ str_limit(strip_tags($item->Question), 220) }}
            </p>

        @endforeach

        {{$pagination}}


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection