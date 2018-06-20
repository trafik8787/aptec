@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px; padding-top: 23px;">

        <p><h1>Количество найденых:</h1></p>

        @forelse($results as $row)

            <div style="background-color: #eceaeacc;padding: 10px;margin-bottom: 10px;">

                <span style="font-size: 19px;"><a href="{{$row->link}}">{{$row->title}}</a></span>

                <div style="padding-top: 4px;padding-bottom: 15px;">
                    {{$row->snippet}}
                    <span><a href="{{$row->link}}">Подробнее</a></span>
                </div>

            </div>

        @empty
            <h2>К сожалению ничего не нашлось попробуйте ввести другую фразу.</h2>
        @endforelse



        {!! $paginate !!}
        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection