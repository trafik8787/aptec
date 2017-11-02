<div class="footer">
    <p>

        @foreach($nav_category as $item)
            <a href="/{{$item['href']}}">{{$item['name']}}</a> @if (!$loop->last) | @endif
        @endforeach
    </p>

    <p><b>Официальный сайт «Ави&nbsp;Аптекман, адвокаты, судебные исполнители» ©&nbsp;<nobr>2004</nobr>
        </b><br>Бат Ям, ул. Нисенбаум д. 33 "Бат Ямон" 3 этаж, офис 314. Телефон:
        <nobr>03-6136021</nobr>
    </p>

    <p><a href="/conditions.html">Условия использования информации сайта</a></p>
</div>