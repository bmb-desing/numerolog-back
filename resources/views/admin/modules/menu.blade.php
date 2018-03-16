<li class="treeview">
    <a href="#">
        <i class="fa fa-cog"></i>
        <span>Значения</span>
        <span class="pull-right-container" >
  <i class="fa fa-angle-left pull-right"></i>
</span>
    </a>
    <ul class="treeview-menu">
        @foreach($prediction as $item)
            <li><a href="{{route('prediction.index', ['name' => $item->name])}}"><i class="fa fa-circle-o"></i>{{$item->name_rus}}</a></li>
        @endforeach
        
    </ul>
</li>
<li>
    <a href="{{route('price.index')}}">Услуги</a>
</li>
<li>
    <a href="{{route('pages.index')}}">Страницы</a>
</li>
<li>
    <a href="{{route('journal.index')}}">Статьи</a>
</li>
<li>
    <a href="{{route('social.get')}}">Социальные данные</a>
</li>
<li>
    <a href="{{route('sitemap')}}">Карта сайта</a>
</li>
