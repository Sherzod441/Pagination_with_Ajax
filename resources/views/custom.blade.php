@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center pagination-success">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled me-5">
                <a class="page-link" href="#" tabindex="-1">Back</a>
            </li>
        @else
            <li class="page-item me-5"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Back</a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active color">
                            <a class="page-link ">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item ">
                            <a class="page-link color" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link ms-5" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            </li>
        @else
            <li class="page-item disabled ms-5">
                <a class="page-link" href="#">Next</a>
            </li>
        @endif
    </ul>
@endif

<style>
.page-link{
    color: #11C744 !important;
    border: none !important;
    background: #fff !important;
}

.color{
    color: #7D7A7A !important;
}


</style>