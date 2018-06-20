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

</div>


<div style="width: 300px;">
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
            <span style="color: green">{{Session::get('susses')}}</span>
            <p style="font:8pt verdana;margin-top:15px;">В нерабочее время заполните форму <br>и с Вами свяжутся в часы работы</p>
            <label style="font:8pt verdana;">Имя, фамилия</label>
            <input type="text" class="inp" name="name" value="">
            <label style="font:8pt verdana;">Адрес</label>
            <input type="text" class="inp" name="address" value="">
            <label style="font:8pt verdana;">Телефон</label>
            <input type="text" class="inp" name="phone" value="">
            <label style="font:8pt verdana;">E-mail</label>
            <input type="email" class="inp" name="email" value="">
            <span style="color: red">{{Session::get('qwe')}}</span>
            <label style="font:8pt verdana;">Введите код</label>
            {!! captcha_image_html('ContactCaptcha') !!}
            <input type="text" id="CaptchaCode" name="CaptchaCode">

            <input type="image" src="/images/submit_send.gif" alt="Отправить" class="subm">

            <br clear="all">
        </form>
    </div>
</div>
<br clear="all">


<div class="catBottom"></div>
<script type="text/javascript"
        src="http://www.google.com/coop/cse/brand?form=searchbox_005526002188423334622%3Ayaydshnxre4&amp;lang=ru"></script>


</div>

@include('common.footer')


<div align="center">
    <table>
        <tr>
            <td align="right">
            </td>
            <td align="center">&nbsp;&nbsp;</td>
            <td align="right">
                <!--LiveInternet counter-->
                <script type="text/javascript">
                    <!--
                    document.write("<a href='http://www.liveinternet.ru/click' " +
                        "target=_blank><img src='http://counter.yadro.ru/hit?t18.11;r" +
                        escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                            ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                            screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                        ";" + Math.random() +
                        "' alt='' title='LiveInternet: показано число просмотров за 24" +
                        " часа, посетителей за 24 часа и за сегодня' " +
                        "border=0 width=88 height=31><\/a>")
                    //-->
                </script>
                <!--/LiveInternet-->
            </td>
        </tr>
    </table>
    <br>
</div>


<style type="text/css">
    @import url(http://www.google.com/cse/api/overlay.css);
</style>
<script src="http://www.google.com/uds/api?file=uds.js&v=1.0&key=ABQIAAAAJ3y6uOk1LyWZuXjJLLREOBQKhNPSaU--2dB3UiysoJmuvllyMBTZx0pTOdhaCpf4RQnCVq5L3LZNuA&hl=ru"
        type="text/javascript"></script>
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
</script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-6229906-1");
    pageTracker._trackPageview();
</script>


</body>
</html>