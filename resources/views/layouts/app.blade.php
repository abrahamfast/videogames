<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Video Games</title>
	<link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
	<header class="border-b border-gray-800">
		<nav class="container mx-auto flex flex-col lg:flex-row  items-center justify-between px-4 py-6">
			<div class="flex flex-col lg:flex-row items-center">
				<a href="/">
					<img src="/img/video-game.png" alt="videogames" class="w-32 flex-none">
				</a>
				<ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
					<li><a href="#" class="hover:text-gray-400">Games</a></li>
					<li><a href="#" class="hover:text-gray-400">Reviews</a></li>
					<li><a href="#" class="hover:text-gray-400">Coming</a></li>
				</ul>
			</div>
			<div class="flex items-center mt-6 lg:mt-0">
				<div class="relative">
					<input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-3 pl-8 py-1 focus:outline-none focus:shadow" placeholder="Search">
					<div class="absolute top-0 flex items-center h-full ml-2">
						<svg class="fill-current text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					</div>
				</div>
				<div class="ml-6">
					<a href="/">
						<img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-10">
					</a>
				</div>
			</div>
		</nav>
	</header>


	<main class="py-8">
		@yield('content')
		
		<footer class="border-t border-gray-800">
			<div class="container m1-auto px-4 py-6">
				Powerb By <a href="#" class="underline hover:text-gray-400"></a>
			</div>
		</footer>
	</main>
	
</body>
</html>
