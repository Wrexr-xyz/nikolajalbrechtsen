@if ($paginator->hasPages())
    <nav class="mt-4">
        <div class="">
            <ul class="pagination flex hidden">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div class="hidden -mt-6">
                <p class="small text-muted">
                    {!! __('Viser') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('til') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('ud af') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('resultater') !!}
                </p>
            </div>

            <div>
                <ul class="pagination flex">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled page-link bg-gray-500 px-1.5 py-1 rounded mr-0.5 -mt-1" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link bg-gray-500 px-1.5 py-1 rounded mr-0.5 -mt-1" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link bg-gray-600 px-1.5 py-1 rounded mx-0.5">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link bg-gray-500 px-1.5 py-1 rounded mx-0.5" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link bg-gray-500 px-1.5 py-1 rounded ml-0.5" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link bg-gray-500 px-1.5 py-1 rounded ml-0.5" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
