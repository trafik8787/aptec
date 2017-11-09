@extends('app')
@section('content')
    <div style="display:table; min-height:1px; _height:1px; padding-top: 12px;">

        {!! $data !!}

        @foreach($video as $item)

            <p style="clear:both">
                <a href="/video/view/{{$item->id}}.html"><img src="{{$item->image_url}}" width="70"
                                                              style="float:left;margin:5px 10px 0 0">
                    {{$item->name}}
                </a>
            </p>

        @endforeach

    </div>
@endsection