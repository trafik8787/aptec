<div class="hd">Телепередачи</div>

@foreach(\App\Http\Controllers\Video::getVideo() as $item)
    <p style="clear:both"><a href="/video/view/{{$item->id}}.html"><img src="{{$item->image_url}}" width="70" style="float:left;margin:5px 10px 0 0">
            {{$item->name}}
        </a>
    </p>
@endforeach



