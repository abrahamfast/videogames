@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<div class="game-details border-b border-gray-800 pb-12 flex">
			<div class="flex-none">
				<img src="/img/gg1.jpg" alt="cover" class="">
			</div>
			<div class="ml-12 mr-64">
				<h2 class="font-semibold text-4xl">
					Final Fantesy
				</h2>
				<div class="text-gray-400">
					<span>Adventure, RPG</span>
					&middot;
					<span>Square, Enix</span>
					&middot;
					<span>Playstation 4</span>
				</div>
				<div class="flex flex-wrap items-center mt-8">
					<div class="flex items-center">
						<div class="w-16 h-16 bg-gray-800 rounded-full">
							<div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
						</div>
						<div class="ml-4 text-xs">Member <br> Score</div>
					</div>
					<div class="flex items-center">
						<div class="w-16 h-16 bg-gray-800 rounded-full ml-12">
							<div class="font-semibold text-xs flex justify-center items-center h-full">88%</div>
						</div>
						<div class="ml-4 text-xs">Critic <br> Score</div>
					</div>
					<div class="flex items-center space-x-4 ml-12">
						<div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
							<a href="" class="hove:text-gray-400"><i class="fas fa-question-circle"></i></a>
						</div>
						<div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
							<a href="" class="hove:text-gray-400"><i class="fas fa-question-circle"></i></a>
						</div>
						<div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
							<a href="" class="hove:text-gray-400"><i class="fas fa-question-circle"></i></a>
						</div>
						<div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
							<a href="" class="hove:text-gray-400"><i class="fas fa-question-circle"></i></a>
						</div>
					</div>
				</div>
				<p class="mt-12">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam illo id dicta eaque dolorum. Placeat repellendus accusantium sequi et dolorem, repellat fugit consequuntur exercitationem aut quasi, labore eveniet. Necessitatibus corporis soluta quas voluptate praesentium, fugiat illum nesciunt porro autem quod.
				</p>

				<div class="mt-12">
					<button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blud-600 rounded transition ease-in-out duration-150">
					<span class="ml-2">Play Trailer</span>
				</button>
				</div>
			</div>
		</div>
	</div>
@endsection
