<x-app-layout>
	<x-slot name="title">{{ $title }}</x-slot>

	{{-- header content --}}
	<div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 bg-secondary-200">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800">{{ $title }}</h3>
				<p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1">Change the following information.</p>
			</div>
			<div class="flex items-end justify-center">
				<div
					class="flex items-center px-3 py-1 mt-1 text-xs text-gray-600 border rounded-full border-secondary-300 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:px-0">
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
					<a href="{{ route('articles.edit', $article) }}"
						class="text-primary-500 hover:text-primary-600">Update</a>
				</div>
			</div>
		</div>
	</div>

	{{-- form create --}}
	<form action="{{ route('articles.update', $article) }}"
		method="post">
		@csrf
		@method('put')
		@include('articles.form')
	</form>
</x-app-layout>
