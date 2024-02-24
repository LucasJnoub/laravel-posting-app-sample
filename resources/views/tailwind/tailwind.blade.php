@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-end items-center mt-6">
        <ul class="flex space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md cursor-default">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-white bg-blue-500 border border-blue-500 leading-5 rounded-md">{{ $page }}</li>
                        @elseif ($page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() + 1)
                            <li><a href="{{ $url }}" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                        {!! __('pagination.next') !!}
                    </a>
                </li>
            @else
                <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </li>
            @endif
        </ul>
    </nav>
@endif
