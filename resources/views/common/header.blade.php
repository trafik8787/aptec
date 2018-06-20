<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <style type="text/css">
        .gscb_a{display:inline-block;font:27px/13px arial,sans-serif}.gsst_a .gscb_a{color:#a1b9ed;cursor:pointer}.gsst_a:hover .gscb_a,.gsst_a:focus .gscb_a{color:#36c}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gscsep_a{display:none}.gsq_a{padding:0}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gsfe_a{border:1px solid #b9b9b9;border-top-color:#a0a0a0;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);}.gsfe_b{border:1px solid #4d90fe;outline:none;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);}.gssb_a{padding:0 7px}.gssb_e{border:0}.gssb_l{margin:5px 0}input.gsc-input::-webkit-input-placeholder{font-size:14px}input.gsc-input:-moz-placeholder{font-size:14px}input.gsc-input::-moz-placeholder{font-size:14px}input.gsc-input:-ms-input-placeholder{font-size:14px}input.gsc-input:focus::-webkit-input-placeholder{color:transparent}input.gsc-input:focus:-moz-placeholder{color:transparent}input.gsc-input:focus::-moz-placeholder{color:transparent}input.gsc-input:focus:-ms-input-placeholder{color:transparent}.gssb_c .gsc-completion-container{position:static}.gssb_c{z-index:5000}.gsc-completion-container table{background:transparent;font-size:inherit;font-family:inherit}.gssb_c > tbody > tr,.gssb_c > tbody > tr > td,.gssb_d,.gssb_d > tbody > tr,.gssb_d > tbody > tr > td,.gssb_e,.gssb_e > tbody > tr,.gssb_e > tbody > tr > td{padding:0;margin:0;border:0}.gssb_a table,.gssb_a table tr,.gssb_a table tr td{padding:0;margin:0;border:0}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}">
    <meta name="description" content="{{$description}}">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Адвокат Ави Аптекман">
    <meta name="geo.region" content="IL">
    <meta name="copyright" content="Адвокат Ави Аптекман">

    <link href="/css/main.css" rel="stylesheet" type="text/css" media="screen">
    <!--[if IE 6]><link href="/css/ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 7]><link href="/css/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    @include('feed::links')
</head>
<body cz-shortcut-listen="true">


<div class="container">
    <a href="/" title="Ави Аптекман – адвокат, автор книг 'Уголовное Право в Израиле' и 'Семейное Право в Израиле'. Адвокатская контора в Израиле " class="logo"></a>


    <div style="position: absolute;right: 0; top: 56px;">
        <form method="get" action="{{route('search')}}">
            <input type="text" name="q" style="height: 23px;width: 239px;">
            <button type="submit" style="height: 29px">Поиск</button>
        </form>

    </div>

<div class="top_nav">
    <table>
        <tbody><tr>
            @foreach($nav_category as $item)
                @if(Request::is($item['href']))
                    <th @if ($loop->first) class="fst" @elseif($loop->last) class="lst" @endif>
                        <a href="/{{$item['href']}}">{{$item['name']}}</a>
                    </th>
                @else
                    <td @if ($loop->first) class="fst" @elseif($loop->last) class="lst" @endif>
                        <a href="/{{$item['href']}}">{{$item['name']}}</a>
                    </td>
                @endif

            @endforeach
        </tr>
        </tbody></table>
</div>