
<div class="hd">Популярные вопросы</div>
<ul class="questions">
    @foreach(\App\Http\Controllers\Faq::popularFaq() as $item)
        <li><a href="/questions/view/{{$item->QuestionID}}.html">{{$item->Title}}</a></li>
    @endforeach
</ul>
<a href="/questions/list/">Вопросы по темам &gt;&gt;</a><br>
<br>
