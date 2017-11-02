

    @include('common.header')

    <div class="content">
        <div class="side">


           @include('_layout.bloc')


            <div class="soci">
                <a href="http://www.facebook.com/www.aptekman.co.il"><img src="/images/ic_fb.png" width="24" alt="Facebook"></a>
                <a href="http://twitter.com/#!/avi_law"><img src="/images/ic_tw.png" width="24" alt="Twitter"></a>
                <a href="http://pravo-com.livejournal.com/"><img src="/images/ic_lj.png" width="24" alt="LiveJournal"></a>
                <a href="/export/rss.xml"><img src="/images/ic_rss.png" width="24" alt="RSS"></a>
            </div>

        </div>


        @yield('content')


        <br clear="all">

        <!--<div class="books">
            <div class="column"><a href="http://kniga.israelinfo.ru/catalog/22/98/179180" title="Купить книгу «Уголовное право в Израиле»"><img src="/images/book_1.gif" alt="" /><span class="hd">Уголовное право в Израиле</span>Обзор норм израильского уголовного права, написанный одним из известнейших и опытнейших адвокатов Израиля. Книга написана в практическом ключе и содержит сведения, которые необходимы каждому жителю нашей страны.</a></div>
            <div class="column"><a href="http://kniga.israelinfo.ru/catalog/22/98/201672" title="Купить книгу «Семейное право в Израиле»"><img src="/images/book_2.gif" alt="" /><span class="hd">Семейное право в Израиле</span>Предлагаемая новая книга является первым справочником по семейному праву Израиля, издаваемом на русском языке. На многие вопросы м ответит книга, в которой содержатся конкретные рекомендации опытного адвоката.</a></div>
            <br clear="all" />
        </div>
        <div class="books_bot"></div>-->
    </div>



    <div class="portrait">
        <span class="img"><img src="/images/avokat.jpg" width="100%" alt="" title=""></span>
        Звоните нам:
        <div>03-6136021</div>
        воскресенье - четверг<br>
        с 8:00 до 17:00
    </div>

    <div class="request">
        <form action="/sendform" method="post">
            {{ csrf_field() }}
            <p style="font:8pt verdana;margin-top:15px;">В нерабочее время заполните форму <br>и с Вами свяжутся в часы работы</p>
            <label style="font:8pt verdana;">Имя, фамилия</label>
            <input type="text" class="inp" name="form_name" value="">
            <label style="font:8pt verdana;">Адрес</label>
            <input type="text" class="inp" name="form_data" value="">
            <label style="font:8pt verdana;">Телефон</label>
            <input type="text" class="inp" name="form_phone" value="">
            <label style="font:8pt verdana;">E-mail</label>
            <input type="email" class="inp" name="form_email" value="">
            <span style="color: red">{{Session::get('qwe')}}</span>
            <label style="font:8pt verdana;">Введите код</label>
            {!! captcha_image_html('ContactCaptcha') !!}
            <input type="text" id="CaptchaCode" name="CaptchaCode">

            <input type="image" src="/images/submit_send.gif" alt="Отправить" class="subm">

            <br clear="all">
        </form>
    </div>

    <br clear="all">


    <form action="" class="search" id="searchbox_005526002188423334622:yaydshnxre4" onsubmit="return false;">
        <b>Найти ответ</b>
        <input type="text" class="inp" value="" name="q" placeholder="Пользовательского поиска" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;">
        <input type="image" src="/images/submit_search.gif" class="subm">
        <p style="font:8pt verdana;padding:2px 0 0 84px;clear:left;color:#f6f6f6;">Поиск среди 10.000 ответов и статей по праву</p>
        <input name="siteurl" type="hidden" value="www.aptekman.co.il/"><input name="ref" type="hidden" value="www.aptekman.co.il/books/"><input name="ss" type="hidden" value=""></form>
    <div class="catBottom"></div>
    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_005526002188423334622%3Ayaydshnxre4&amp;lang=ru"></script>


</div>

@include('common.footer')


<div align="center">
    <table>
        <tbody><tr>
            <td align="right">
                <a href="http://israelinfo.ru/" target="_blank"><img src="http://israelinfo.ru/button/israelinfo_108_35.gif" border="0" alt="israelinfo.ru - Израиль на ладони" height="35" width="108"></a>
            </td>
            <td align="center">&nbsp;&nbsp;</td>
            <td align="right">
                <!--LiveInternet counter-->
                <script type="text/javascript">
                    <!--
                    document.write("<a href='http://www.liveinternet.ru/click' "+
                        "target=_blank><img src='http://counter.yadro.ru/hit?t18.11;r"+
                        escape(document.referrer)+((typeof(screen)=="undefined")?"":
                            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                        ";"+Math.random()+
                        "' alt='' title='LiveInternet: показано число просмотров за 24"+
                        " часа, посетителей за 24 часа и за сегодня' "+
                        "border=0 width=88 height=31><\/a>")
                    //-->
                </script><a href="http://www.liveinternet.ru/click" target="_blank"><img src="http://counter.yadro.ru/hit?t18.11;rhttp%3A//www.aptekman.co.il/books/;s1920*1080*24;uhttp%3A//www.aptekman.co.il/;0.2416693999207289" alt="" title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня" border="0" width="88" height="31"></a>
                <!--/LiveInternet-->
            </td>
        </tr>
        </tbody></table>
    <br>
</div>




<style type="text/css">
    @import url(http://www.google.com/cse/api/overlay.css);
</style>
<script src="http://www.google.com/uds/api?file=uds.js&amp;v=1.0&amp;key=ABQIAAAAJ3y6uOk1LyWZuXjJLLREOBQKhNPSaU--2dB3UiysoJmuvllyMBTZx0pTOdhaCpf4RQnCVq5L3LZNuA&amp;hl=ru" type="text/javascript"></script><script src="https://www.google.com/uds/api/search/1.0/bb73d6800fca299b36665ebff4d01037/default+ru.I.js" type="text/javascript"></script>
<script src="http://www.google.com/cse/api/overlay.js" type="text/javascript"></script>
<script type="text/javascript">
    function OnLoad() {
        new CSEOverlay("005526002188423334622:yaydshnxre4",
            document.getElementById("searchbox_005526002188423334622:yaydshnxre4"),
            document.getElementById("results_005526002188423334622:yaydshnxre4"));
    }
    GSearch.setOnLoadCallback(OnLoad);
</script>

<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-6229906-1");
    pageTracker._trackPageview();
</script>





<iframe frameborder="0" src="about:blank" class="cse-overlay-bg" style="border: 0px; vertical-align: bottom; display: none; opacity: 0;"></iframe><div class="cse-overlay-bg" style="display: none; opacity: 0.5;"></div><div class="cse-overlay" tabindex="0" role="dialog" aria-labelledby=":0" style="display: none;"><div class="cse-overlay-title cse-overlay-title-draggable"><span class="cse-overlay-title-text" id=":0" role="heading"></span><span class="cse-overlay-title-close" role="button" tabindex="0" aria-label="Close"></span></div><div class="cse-overlay-content"><div id="results_005526002188423334622:yaydshnxre4" style="">
            <div class="cse-closeResults">
                <a>× Закрыть</a>
            </div>
            <div class="cse-resultsContainer"><div class="gsc-control" dir="ltr"><form class="gsc-search-box" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><input autocomplete="off" type="text" size="10" class=" gsc-input" name="search" title="поиск" id="gsc-i-id1" dir="ltr" spellcheck="false" style="outline: none;"><input type="hidden" name="bgresponse" id="bgresponse"></td><td class="gsc-search-button"><input type="button" value="Поиск" class="gsc-search-button" title="поиск"></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="удалить результаты">&nbsp;</div></td></tr></tbody></table><table cellspacing="0" cellpadding="0" class="gsc-branding"><tbody><tr style="display: none;"><td class="gsc-branding-user-defined"></td><td class="gsc-branding-text"><div class="gsc-branding-text">технология</div></td><td class="gsc-branding-img"><img src="https://www.google.com/cse/static/images/1x/googlelogo_grey_46x15dp.png" class="gsc-branding-img" srcset="https://www.google.com/cse/static/images/2x/googlelogo_grey_46x15dp.png 2x"></td></tr></tbody></table></form><div class="gsc-results-wrapper-nooverlay"><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td></tr></tbody></table></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot"><table cellspacing="0" cellpadding="0" class="gsc-resultsHeader"><tbody><tr><td class="gsc-twiddleRegionCell"><div class="gsc-twiddle"><div class="gsc-title">Интернет</div></div><div class="gsc-stats"></div><div class="gsc-results-selector gsc-one-result-active"><div class="gsc-result-selector gsc-one-result" title="показать один результат">&nbsp;</div><div class="gsc-result-selector gsc-more-results" title="показать другие результаты">&nbsp;</div><div class="gsc-result-selector gsc-all-results" title="показать все результаты">&nbsp;</div></div></td><td class="gsc-configLabelCell"></td></tr></tbody></table><div><div class="gsc-expansionArea"></div></div></div></div></div></div></div>
        </div></div><div class="cse-overlay-buttons"></div></div><span tabindex="0" style="display: none; position: absolute;"></span><table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" style="width: 100%; display: none; top: -1px; left: 0px; position: absolute;"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table></body></html>