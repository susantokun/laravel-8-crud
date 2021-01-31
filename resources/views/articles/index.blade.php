<x-app-layout>
	<x-slot name="title">{{ $title }}</x-slot>

	{{-- header content --}}
	<div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 bg-secondary-200">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800">Data {{ $title }}</h3>
				<p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1">The following data of {{ Str::lower(__($title)) }}.</p>
			</div>
			<div class="flex items-center justify-center mt-2 space-x-2 sm:mt-0">
				<a href="{{ route('articles.create') }}"
					class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded-full shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
					<svg class="w-5 h-5 -ml-1"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
							clip-rule="evenodd" />
					</svg>
					<span class="ml-2">Create</span>
				</a>
			</div>
		</div>
	</div>

	{{-- alert --}}
	@if (session('success'))
	<div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
		{!! session('success') !!}
	</div>
	@endif

	{{-- table --}}
	<div class="overflow-hidden border rounded-lg border-secondary-300">
		<div class="overflow-x-auto">
			<table class="min-w-full">
				<thead class="text-sm border-b select-none border-secondary-300 bg-secondary-200">
					<tr>
						<th class="px-6 py-3 font-bold text-center uppercase">No</th>
						<th class="px-6 py-3 font-bold text-left uppercase">Title</th>
						<th class="px-6 py-3 font-bold text-left uppercase">Content</th>
						<th class="px-6 py-3 font-bold text-right uppercase"></th>
					</tr>
				</thead>
				<tbody class="text-sm text-gray-700 bg-white divide-y divide-secondary-300">
					@if ($articles->count() > 0)
					@foreach ($articles as $article)
					<tr>
						<td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
						<td class="w-10 px-6 py-3 leading-6 sm:w-auto">{{ $article->title }}</td>
						<td class="px-6 py-3 leading-6">{{ Str::limit($article->body, 60) }}</td>
						<td class="px-6 text-right select-none whitespace-nowrap">
							<a href="{{ route('articles.show', $article) }}"
								class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-lightBlue-500 focus:border-lightBlue-600 hover:bg-lightBlue-600 focus:outline-none focus:ring focus:ring-lightBlue-500 focus:ring-opacity-30 disabled:opacity-50">
								<svg class="w-4 h-4 -mx-2"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor">
									<path fill-rule="evenodd"
										d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
										clip-rule="evenodd" />
								</svg>
							</a>
							<a href="{{ route('articles.edit', $article) }}"
								class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50">
								<svg class="w-4 h-4 -mx-2"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor">
									<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
								</svg>
							</a>
							<form action="{{ route('articles.destroy', $article) }}"
								class="inline"
								method="post">
								@csrf
								@method('delete')
								<button type="submit"
									class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-red-500 border border-transparent rounded-full shadow select-none focus:border-red-600 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-30 disabled:opacity-50">
									<svg class="w-4 h-4 -mx-2"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
										fill="currentColor">
										<path fill-rule="evenodd"
											d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
											clip-rule="evenodd" />
									</svg>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
					@else
					<tr class="select-none">
						<td class="px-6 py-3 leading-4 text-center whitespace-nowrap">-</td>
						<td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
						<td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
						<td class="px-6 text-right whitespace-nowrap">-</td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div class="text-gray-600 bg-secondary-50">
			{{ $articles->links() }}
		</div>
	</div>

</x-app-layout>
