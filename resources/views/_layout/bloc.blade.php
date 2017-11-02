
@foreach(\App\Http\Controllers\Controller::getBlocRenderLeft() as $item)

    <div class="links">

        @include('_layout.'.$item)

    </div>

@endforeach