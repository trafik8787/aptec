@extends('app')
@section('content')
    <div style="display:table; min-height:1px; _height:1px;  padding-top: 12px;">
        {!! $data !!}
        <div id="-chrome-auto-translate-plugin-dialog" style="display: none;opacity: 1 !important;border-color: none !important;background: transparent !important;padding: 0 !important;margin: 0 !important;position: absolute !important;top: 0;left: 0;overflow: visible !important;z-index: 999999 !important;text-align: left !important;">
            <div style="max-width: 300px !important;color: #fafafa !important;opacity: 0.8 !important;border-color: #000000 !important;border-width: 0px !important;-webkit-border-radius: 10px !important;background-color: #363636 !important;font-size: 16px !important;padding: 8px !important;overflow: visible !important;background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #000), color-stop(50%, #363636), color-stop(100%, #000));z-index: 999999 !important;text-align: left  !important;">
                <div class="translate">&nbsp;</div>
                <div class="additional">&nbsp;</div>
            </div>
            <img onclick="document.location.href='http://translate.google.com/';" style="position: absolute !important; z-index: -1 !important; right: 1px !important; top: -20px !important; cursor: pointer !important;-webkit-border-radius: 20px; background-color: rgba(200, 200, 200, 0.3) !important; padding: 3px 5px 0 !important; margin: 0 !important;" alt="" src="http://www.google.com/uds/css/small-logo.png"></div>


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат Ямон" 3 этаж, офис 314. Телефон: <nobr>054-7622000</nobr></p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>
@endsection