<div class="p-4 overflow-hidden border rounded-lg shadow-md sm:p-6 border-secondary-300 bg-secondary-200">
	<div class="grid grid-cols-6 gap-4">

		{{-- title --}}
		<div class="col-span-6">
			<label for="title"
				class="block text-sm font-bold tracking-wide text-gray-700 uppercase">Title</label>
			<input type="text"
				class="block w-full mt-1 text-sm transition rounded-lg shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
				name="title"
				id="title"
				autofocus
				value="{{ old('title') ?? $article->title }}">
			@error('title')
			<p class="mt-1 text-xs font-medium text-red-500 dark:text-red-400">{{ $message }}</p>
			@enderror
		</div>

		{{-- content --}}
		<div class="col-span-6">
			<label for="content"
				class="block text-sm font-bold tracking-wide text-gray-700 uppercase">Content</label>
			<textarea
				class="block w-full mt-1 text-sm transition rounded-lg shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
				name="content"
				id="content"
				rows="10">{{ old('content') ?? $article->body }}</textarea>
			@error('content')
			<p class="mt-1 text-xs font-medium text-red-500 dark:text-red-400">{{ $message }}</p>
			@enderror
		</div>

	</div>

	{{-- action --}}
	<div class="mt-4 -mx-6 -mb-6 bg-secondary-300">
		<div class="px-6 py-4 space-x-1 text-right">
			<a href="{{ route('articles.index') }}"
				class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-gray-600 uppercase transition bg-white border border-transparent rounded shadow select-none focus:border-gray-400 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-gray-400 focus:ring-opacity-30 disabled:opacity-50">
				Cancel
			</a>
			<button
				class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
				{{ $submit }}
			</button>
		</div>
	</div>

</div>