<x-app-layout>
	<x-slot name="title">{{ $title }}</x-slot>

	{{-- header content --}}
	<div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 bg-secondary-200 dark:border-secondary-700 dark:bg-secondary-800">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-200">{{ $title }}</h3>
				<p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1 dark:text-gray-400">The following are detailed information.</p>
			</div>
			<div class="flex items-end justify-center">
				<div
					class="flex items-center px-3 py-1 mt-1 text-xs text-gray-600 border rounded-full dark:text-gray-400 border-secondary-300 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:px-0 dark:border-secondary-700 dark:bg-secondary-800 sm:dark:bg-transparent">
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
					<a href="{{ route('articles.show', $article) }}"
						class="text-primary-500 hover:text-primary-600">Detail</a>
				</div>
			</div>
		</div>
	</div>

	{{-- content --}}
	<div class="overflow-hidden text-sm border rounded-lg shadow-md border-secondary-300 dark:border-secondary-700 bg-secondary-200 dark:bg-secondary-800">

		<div
			class="gap-4 px-4 py-4 leading-5 text-gray-200 bg-white dark:bg-secondary-900 sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50 dark:odd:bg-secondary-800 dark:text-gray-200">
			<div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">Title</div>
			<div class="text-gray-700 dark:text-gray-300 sm:col-span-4 lg:col-span-5">{{ $article->title }}</div>
		</div>

		<div
			class="gap-4 px-4 py-4 leading-5 text-gray-200 bg-white dark:bg-secondary-900 sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50 dark:odd:bg-secondary-800 dark:text-gray-200">
			<div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">Content</div>
			<div class="text-gray-700 dark:text-gray-300 sm:col-span-4 lg:col-span-5">{{ $article->body }}</div>
		</div>

		<div
			class="gap-4 px-4 py-4 leading-5 text-gray-200 bg-white dark:bg-secondary-900 sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50 dark:odd:bg-secondary-800 dark:text-gray-200">
			<div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">Created</div>
			<div class="text-gray-700 dark:text-gray-300 sm:col-span-4 lg:col-span-5">{{ $article->created_at->isoFormat('D MMMM Y') }}</div>
		</div>

		<div
			class="gap-4 px-4 py-4 leading-5 text-gray-200 bg-white dark:bg-secondary-900 sm:grid sm:grid-cols-6 sm:px-6 odd:bg-secondary-50 dark:odd:bg-secondary-800 dark:text-gray-200">
			<div class="mb-1 font-medium sm:col-span-2 lg:col-span-1 sm:mb-0">Updated</div>
			<div class="text-gray-700 dark:text-gray-300 sm:col-span-4 lg:col-span-5">{{ $article->updated_at->isoFormat('D MMMM Y') }}</div>
		</div>

		{{-- action --}}
		<div class="p-4 text-right">
			<a href="{{ route('articles.index') }}"
				class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-green-500 border border-transparent rounded shadow select-none focus:border-green-600 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-30 disabled:opacity-50">
				<span>Back</span>
			</a>
		</div>

	</div>
</x-app-layout>
