@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px">



        <p><a href="/questions/{{$category->SectionID}}/"><b>{{$category->Section}}</b></a></p>



        <h2>{{$data->Title}}</h2>

        <p>{{strip_tags($data->Question)}}</p>



        <p><i>{{\Carbon\Carbon::parse($data->AnswerDate)->format('d.m.Y')}}&nbsp;&nbsp;&nbsp;&nbsp;</i></p>



        <b>Ответ адвоката:</b><br>
        {{strip_tags($data->Answer)}}

        <br>
        <br>

        <div style="float:left;padding:3px 0 0">


            <div style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;" id="___plusone_0"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1509530784142" name="I0_1509530784142" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=ru&amp;origin=http%3A%2F%2Fwww.aptekman.co.il&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.ru.bquGKfMpO9Y.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNMrL0uVLDxEUkWCl3T1J5hkqSaXw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1509530784142&amp;_gfid=I0_1509530784142&amp;parent=http%3A%2F%2Fwww.aptekman.co.il&amp;pfname=&amp;rpctoken=24287594" data-gapiattached="true" title="G+"></iframe></div>
            <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.ru.bquGKfMpO9Y.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNMrL0uVLDxEUkWCl3T1J5hkqSaXw/cb=gapi.loaded_1" async=""></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.ru.bquGKfMpO9Y.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNMrL0uVLDxEUkWCl3T1J5hkqSaXw/cb=gapi.loaded_0" async=""></script><script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script><script type="text/javascript">
                window.___gcfg = {lang: 'ru'};

                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>
        </div>

        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
        <div class="yashare-auto-init" data-yasharel10n="ru" data-yasharetype="link" data-yasharequickservices="vkontakte,facebook,twitter,odnoklassniki,lj" style="text-align:right"><span class="b-share"><a class="b-share__handle" id="ya-share-0.5167297834371594-1509530784615" data-hdirection="" data-vdirection=""><span class="b-share__text">Поделиться</span></a><a rel="nofollow" target="_blank" title="ВКонтакте" class="b-share__handle b-share__link b-share-btn__vkontakte" href="https://share.yandex.net/go.xml?service=vkontakte&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;title=%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82%20%D0%90%D0%B2%D0%B8%20%D0%90%D0%BF%D1%82%D0%B5%D0%BA%D0%BC%D0%B0%D0%BD%20%3A%3A%20%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B%20%D0%B8%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B%20%3A%3A%20%D0%9A%D0%B0%D0%BA%D0%BE%D0%B2%D1%8B%20%D0%B2%D0%B8%D0%B7%D0%BE%D0%B2%D1%8B%D0%B5%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B8%D1%8E%D1%80%D0%B0%3F" data-service="vkontakte"><span class="b-share-icon b-share-icon_vkontakte"></span></a><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;title=%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82%20%D0%90%D0%B2%D0%B8%20%D0%90%D0%BF%D1%82%D0%B5%D0%BA%D0%BC%D0%B0%D0%BD%20%3A%3A%20%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B%20%D0%B8%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B%20%3A%3A%20%D0%9A%D0%B0%D0%BA%D0%BE%D0%B2%D1%8B%20%D0%B2%D0%B8%D0%B7%D0%BE%D0%B2%D1%8B%D0%B5%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B8%D1%8E%D1%80%D0%B0%3F" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;title=%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82%20%D0%90%D0%B2%D0%B8%20%D0%90%D0%BF%D1%82%D0%B5%D0%BA%D0%BC%D0%B0%D0%BD%20%3A%3A%20%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B%20%D0%B8%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B%20%3A%3A%20%D0%9A%D0%B0%D0%BA%D0%BE%D0%B2%D1%8B%20%D0%B2%D0%B8%D0%B7%D0%BE%D0%B2%D1%8B%D0%B5%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B8%D1%8E%D1%80%D0%B0%3F" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Одноклассники" class="b-share__handle b-share__link b-share-btn__odnoklassniki" href="https://share.yandex.net/go.xml?service=odnoklassniki&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;title=%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82%20%D0%90%D0%B2%D0%B8%20%D0%90%D0%BF%D1%82%D0%B5%D0%BA%D0%BC%D0%B0%D0%BD%20%3A%3A%20%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B%20%D0%B8%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B%20%3A%3A%20%D0%9A%D0%B0%D0%BA%D0%BE%D0%B2%D1%8B%20%D0%B2%D0%B8%D0%B7%D0%BE%D0%B2%D1%8B%D0%B5%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B8%D1%8E%D1%80%D0%B0%3F" data-service="odnoklassniki"><span class="b-share-icon b-share-icon_odnoklassniki"></span></a><a rel="nofollow" target="_blank" title="LiveJournal" class="b-share__handle b-share__link b-share-btn__lj" href="https://share.yandex.net/go.xml?service=lj&amp;url=http%3A%2F%2Fwww.aptekman.co.il%2Fquestions%2Fview%2F2%2F58025.html&amp;title=%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82%20%D0%90%D0%B2%D0%B8%20%D0%90%D0%BF%D1%82%D0%B5%D0%BA%D0%BC%D0%B0%D0%BD%20%3A%3A%20%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B%20%D0%B8%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B%20%3A%3A%20%D0%9A%D0%B0%D0%BA%D0%BE%D0%B2%D1%8B%20%D0%B2%D0%B8%D0%B7%D0%BE%D0%B2%D1%8B%D0%B5%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B8%D1%8E%D1%80%D0%B0%3F" data-service="lj"><span class="b-share-icon b-share-icon_lj"></span></a></span></div>
        <br>

        <p style="text-align:center"><a target="_blank" href="/print/questions/view/{{$data->QuestionID}}.html">Версия для печати</a></p>



        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат Ямон" 3 этаж, офис 314. Телефон: <nobr>054-7622000</nobr></p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection