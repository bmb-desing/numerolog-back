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
