@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        
        <div class="color1 me-5 mt-2">
            <p class="small text-muted">
                {!! __('Page') !!}
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
               
            </p>
        </div>

        <div class="d-flex color1 me-5 mt-2">
            <p class="small text-muted">
                {!! __('Showing') !!}
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>
      
    
        @if ($paginator->onFirstPage())
            <li class="page-item disabled ms-5">
                <a class="page-link" href="#" tabindex="-1">Back</a>
            </li>
        @else
            <li class="page-item ms-5"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Back</a></li>
        @endif
        
        @if ($paginator->hasMorePages())
            <li class="page-item ">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#">Next</a>
            </li>
        @endif
    </ul>
@endif

<style>
.small{
    color: #007AC7 !important;
}
</style>