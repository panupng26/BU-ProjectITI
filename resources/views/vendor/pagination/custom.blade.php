@if ($paginator->hasPages())
<nav>
    <ul class="pagination justify-content-center" >
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link"><span aria-hidden="true">&laquo;</span></a></li>
        @else
            <li class="page-link"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif
           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class=" page-item active my-active"><a class="page-link"><span>{{ $page }}</span></a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        @else
            <li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>
        @endif
    </ul>
</nav>
@endif 