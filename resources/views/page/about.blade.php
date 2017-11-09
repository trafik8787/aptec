@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px">
        {!!$about->data!!}
        <hr>
        <strong><br>
            Наш адрес<br>
        </strong>
        <p class="MsoNormal">Бат Ям, ул. Нисенбаум д. 33 "Бат Ямон" 3 этаж, офис 314. Телефон: 03-6136021</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d845.7737822142486!2d34.75172291051766!3d32.01253674785181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39010bc40ed6c8e!2z157XqNeb15Yg16fXoNeZ15XXqiDXkdeqINeZ157Xldef!5e0!3m2!1sen!2sil!4v1484503999366"
                width="425" height="320" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        <hr>
        <br>
        <strong>Специализация нашего офиса</strong><br>
        <ul>

            @foreach($section as $item)
                <li><a href="/questions/{{$item->SectionID}}/"><span style="font-size: small; ">{{$item->Section}}</span></a></li>
            @endforeach

        </ul>
        <div style="opacity: 1 !important; background-image: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: transparent !important; padding-top: 0px !important; padding-right: 0px !important; padding-bottom: 0px !important; padding-left: 0px !important; margin-top: 0px !important; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; position: absolute !important; top: 0px; left: 0px; overflow-x: visible !important; overflow-y: visible !important; z-index: 999999 !important; text-align: left !important; display: none; "
             id="-chrome-auto-translate-plugin-dialog">
            <div style="max-width: 300px !important;color: #fafafa !important;opacity: 0.8 !important;border-color: #000000 !important;border-width: 0px !important;-webkit-border-radius: 10px !important;background-color: #363636 !important;font-size: 16px !important;padding: 8px !important;overflow: visible !important;background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #000), color-stop(50%, #363636), color-stop(100%, #000));z-index: 999999 !important;text-align: left  !important;">
                <div class="translate">&nbsp;</div>
                <div class="additional">&nbsp;</div>
            </div>
            <img src="http://www.google.com/uds/css/small-logo.png" alt=""
                 style="position: absolute !important; z-index: -1 !important; right: 1px !important; top: -20px !important; cursor: pointer !important;-webkit-border-radius: 20px; background-color: rgba(200, 200, 200, 0.3) !important; padding: 3px 5px 0 !important; margin: 0 !important;"
                 onclick="document.location.href='http://translate.google.com/';"></div>


        <div class="forPrint">
            <p><b>Адвокатская контора «А.&nbsp;Аптекман, адвокаты, судебные исполнители»</b><br>Бат Ям, ул. Нисинбаум д. 30 "Бат
                Ямон" 3 этаж, офис 314. Телефон:
                <nobr>054-7622000</nobr>
            </p>
            <p><a href="http://aptekman.co.il">www.aptekman.co.il</a></p>
        </div>

    </div>

@endsection