@extends('app_print')
@section('print_content')
    <div style="display:table; min-height:1px; _height:1px">
        <p><a href="/questions/{{$category->SectionID}}/"><b>{{$category->Section}}</b></a></p>

        <h2>{{$data->Title}}</h2>

        <p>
            {{strip_tags($data->Question)}}
        </p>

        <p><i>{{\Carbon\Carbon::parse($data->AnswerDate)->format('d.m.Y')}}</i></p>

        <b>Ответ адвоката:</b><br>

        {{strip_tags($data->Answer)}}

        <br>
        <br>

        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат Ямон" 3 этаж, офис 314. Телефон: <nobr>054-7622000</nobr></p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>
@endsection