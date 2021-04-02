<x-app-layout>
	<x-slot name="title">{{ $title }}</x-slot>

	{{-- header content --}}
	<div
		class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 dark:border-secondary-700 dark:bg-secondary-800 bg-secondary-200">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-200">{{ $title }}</h3>
				<p class="mt-px text-sm leading-5 text-gray-600 dark:text-gray-400 sm:mt-1">{{ __('articles.create_description') }}</p>
			</div>
			<div class="flex items-end justify-center">
				<div
					class="flex items-center px-3 py-1 mt-1 text-xs text-gray-600 border rounded-full dark:text-gray-400 border-secondary-300 dark:border-secondary-700 dark:bg-secondary-700 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:dark:bg-transparent sm:px-0">
					<span>Home</span>
					<svg class="w-3 h-3"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
							clip-rule="evenodd" />
					</svg>
					<a href="{{ route('articles.index') }}"
						class="hover:text-gray-700">Articles</a>
					<svg class="w-3 h-3"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
							clip-rule="evenodd" />
					</svg>
					<a href="{{ route('articles.create') }}"
						class="text-primary-500 hover:text-primary-600">Create</a>
				</div>
			</div>
		</div>
	</div>

	{{-- alert --}}
	@if (session('success'))
	<div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
		{!! session('success') !!}
	</div>
	@endif

	{{-- form create --}}
	<form action="{{ route('articles.store') }}"
		method="post">
		@csrf
		@include('articles.form')
	</form>
</x-app-layout>
