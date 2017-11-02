@extends('app')
@section('content')

    <div style="display:table; min-height:1px; _height:1px">

        <p><b>Вопросы по темам</b></p>

        <ul>

            @foreach($category as $item)
                <li><a href="/questions/{{$item['SectionID']}}/"><b>{{$item['Section']}}</b></a></li>
            @endforeach

        </ul>

    </div>

@endsection