@if ($paginator->hasPages())
    <div class="geodir-loop-paging-container">
        <nav class="geodir-pagination">
            <ul class='page-numbers'>
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><li class="hover-page-numbers non-prev" style="border-radius: 30px 0 0 30px;">←</li></a>

                @foreach($elements as $element)
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="hover-page-numbers"><span aria-current="page" class="page-numbers current">{{ $page }}</li></span>
                        @else
                            <a class="page-numbers" href="{{ $url }}"><li class="hover-page-numbers">{{ $page }}</li></a>
                        @endif
                    @endforeach
                @endforeach

                @if ($page == $paginator->currentPage())
                <a class="next page-numbers"><li style="border-radius: 0 30px 30px 0; color:white; background:#21224d;">→</li></a>
                @else
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><li class="hover-page-numbers" style="border-radius: 0 30px 30px 0;">→</li></a>
                <style>.non-prev{color:white; background:#21224d !important; cursor: initial;}
                .non-prev:hover{
                    background:#21224d !important;
                }</style>
                @endif
            </ul>
        </nav>
    </div>
@endif