@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px;padding-top: 13px;">

        <div class="video">

            <h1 class="theme">{{$video->name}}</h1>
            <br>

            {{$video->description}}

            <p>&nbsp;<br></p>

            <div style="display: flex">{!! $video->url_video  !!}</div>


            <p>&nbsp;<br></p>

            <g:plusone size="medium"></g:plusone>
            <script type="text/javascript">
                window.___gcfg = {lang: 'ru'};

                (function () {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
            </script>

            <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
            <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="link"
                 data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj" style="text-align:right"></div>

        </div>

        <p>&nbsp;<br></p>

        <div class="video">
            @foreach($video_other as $item)
                <p style="clear:both"><a href="/video/view/{{$item->id}}.html">
                        <img src="{{$item->image_url}}" width="70" style="float:left;margin:5px 10px 0 0">
                        {{$item->name}}
                    </a>
                </p>
            @endforeach

        </div>


        <br>

        <br type="_moz">


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection