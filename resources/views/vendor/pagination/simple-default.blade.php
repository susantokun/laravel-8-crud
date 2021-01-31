@if ($paginator->hasPages())
<nav role="navigation"
	aria-label="Pagination Navigation"
	class="flex justify-between select-none">
	{{-- Previous Page Link --}}
	@if ($paginator->onFirstPage())
	<span class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded cursor-default">
		{!! __('pagination.previous') !!}
	</span>
	@else
	<a href="{{ $paginator->previousPageUrl() }}"
		rel="prev"
		class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition bg-white border border-gray-300 rounded hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
		{!! __('pagination.previous') !!}
	</a>
	@endif

	{{-- Next Page Link --}}
	@if ($paginator->hasMorePages())
	<a href="{{ $paginator->nextPageUrl() }}"
		rel="next"
		class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition bg-white border border-gray-300 rounded hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
		{!! __('pagination.next') !!}
	</a>
	@else
	<span class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded cursor-default">
		{!! __('pagination.next') !!}
	</span>
	@endif
</nav>
@endif
