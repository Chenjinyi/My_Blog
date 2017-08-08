 <nav aria-label="...">
            <ul class="pager">
                <li class="previous"><a href="{{ $paginator->url($paginator->currentPage()-1) }}"><span aria-hidden="true">&larr;</span> 上一页</a></li>
                <li class="next"><a href="{{ $paginator->url($paginator->currentPage()+1) }}">下一页<span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </nav>