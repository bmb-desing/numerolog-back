<!--Пагинация-->
@if ($paginator->hasPages())
    <div class="pagination">
        <ul>
            @foreach ($elements as $element)
                @if (is_string($element))

                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="{{$url}}">{{$page}}</a></li>

                        @elseif($page+1 == $paginator->currentPage())
                            <li><a href="{{$url}}" rel="prev">{{$page}}</a></li>
                        @elseif($page-1 == $paginator->currentPage())
                            <li><a href="{{$url}}" rel="next">{{$page}}</a></li>
                        @else
                            <li><a href="{{$url}}">{{$page}}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

        </ul>
    </div><!-- end page-wrap -->

@endif
<!--Пагинация конец-->