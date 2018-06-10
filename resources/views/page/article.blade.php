@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px; padding-top: 23px;">
        <p><a href="/articles/{{$category->SectionID}}/"><b>{{$category->Section}}</b></a></p>

        <div align="right">{{$article->created_at->format('d.m.Y')}}</div>

        <p><b>{{$article->Title}}</b></p>


        {!! $article->Txt !!}
        <br>
        <br>
        <br>


        <div style="float:left;padding:3px 0 0">


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
        </div>

        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="link"
             data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj" style="text-align:right"></div>

        <br>

        <p style="text-align:center"><a target="_blank" href="/print/articles/view/{{$article->ArticleID}}.html">Версия для
                печати</a></p>


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection