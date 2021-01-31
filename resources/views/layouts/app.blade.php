<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<meta name="csrf-token"
		content="{{ csrf_token() }}">

	@if (!empty($title))
	<title>{{ $title }} - {{ config('app.name') }}</title>
	@else
	<title>{{ config('app.name') }}</title>
	@endif

	<!-- Favicon -->
	<link rel="shortcut icon"
		href="{{ url(asset('favicon.png')) }}">

	<!-- Fonts -->
	<link rel="preconnect"
		href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
		rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet"
		href="{{ asset('css/app.css') }}">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"
		defer></script>
</head>

<body class="font-sans antialiased text-gray-800 bg-secondary-50">
	<div class="container h-full max-w-4xl p-4 mx-auto md:p-6">
		<header class="flex flex-col items-center justify-center">
			<img src="{{ asset('avatar192.png') }}"
				class="w-32 h-32 rounded-full shadow-md cursor-not-allowed sm:w-40 sm:h-40 md:w-44 md:h-44"
				alt="avatar">
			<div class="my-2 text-center sm:my-4">
				<h1 class="text-2xl font-medium leading-snug text-blue-500">Laravel 8 CRUD TailwindCSS</h1>
				<a href="https://www.susantokun.com/"
					target="_blank"
					rel="noopener noreferrer"
					class="text-base text-gray-600 hover:text-red-500">SUSANTOKUN.COM</a>
			</div>
		</header>
		<main>
			{{ $slot }}
		</main>
	</div>

	@stack('scripts')
</body>

</html>
