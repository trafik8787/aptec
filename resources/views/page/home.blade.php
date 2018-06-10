@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px; padding-top: 23px;">

        {!! $data !!}

        <br>
        <div id="-chrome-auto-translate-plugin-dialog"
             style="opacity: 1 !important; background-image: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: transparent !important; padding-top: 0px !important; padding-right: 0px !important; padding-bottom: 0px !important; padding-left: 0px !important; margin-top: 0px !important; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; position: absolute !important; top: 0px; left: 0px; overflow-x: visible !important; overflow-y: visible !important; z-index: 999999 !important; text-align: left !important; display: none; ">
            <div style="max-width: 300px !important;color: #fafafa !important;opacity: 0.8 !important;border-color: #000000 !important;border-width: 0px !important;-webkit-border-radius: 10px !important;background-color: #363636 !important;font-size: 16px !important;padding: 8px !important;overflow: visible !important;background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #000), color-stop(50%, #363636), color-stop(100%, #000));z-index: 999999 !important;text-align: left  !important;">
                <div class="translate">&nbsp;</div>
                <div class="additional">&nbsp;</div>
            </div>
            <img onclick="document.location.href='http://translate.google.com/';"
                 style="position: absolute !important; z-index: -1 !important; right: 1px !important; top: -20px !important; cursor: pointer !important;-webkit-border-radius: 20px; background-color: rgba(200, 200, 200, 0.3) !important; padding: 3px 5px 0 !important; margin: 0 !important;"
                 alt="" src="http://www.google.com/uds/css/small-logo.png"></div>

        <h2><a href="/articles/">Статьи</a></h2>

        <p style="padding:5px 0px 4px 0px;"><a href="/articles/view/{{$article->ArticleID}}.html">{{$article->Title}}</a></p>
        <p>
            {{$article->Announcement}}
            <a href="/articles/view/{{$article->ArticleID}}.html">...</a></p>
        <hr>
        <br>

        <h2 style="margin:0px 0px 5px 0px;"><a href="/questions/">Вопросы и ответы</a></h2>
        @foreach($faq as $item)
            <p><span class="dateMy">{{\Carbon\Carbon::parse($item->AnswerDate)->format('d.m.Y')}}</span><a
                        href="/questions/view/{{$item->QuestionID}}.html">{{$item->Title}}</a></p>
        @endforeach

        <hr>
        <br>
        <h2><a href="/video/">Телепередачи по праву</a></h2>

        <p style="padding:5px 0px 4px 0px;"><a href="/video/view/{{$video->id}}.html">{{$video->name}}</a></p>
        <p>
            <a href="/video/view/{{$video->id}}.html">
                <img src="{{$video->image_url}}" width="90" style="float:left;margin:5px 10px 0 0"></a>
            {{$video->description}}
            <a href="/video/view/{{$video->id}}.html">...</a>
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