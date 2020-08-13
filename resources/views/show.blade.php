@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
			<div class="flex-none">
				<img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="cover" class="">
			</div>
			<div class="lg:ml-12 lg:mr-64">
				<h2 class="font-semibold text-4xl leading-tight mt-1">
					{{ $game['name'] }}
				</h2>
				<div class="text-gray-400">
					<span>
						@foreach($game['genres'] as $genre)
							{{ $genre['name'] }},
						@endforeach
					</span>
					&middot;
					<span>{{ $game['involved_companies'][0]['company']['name'] }}</span>
					&middot;
					@foreach($game['platforms'] as $platform)
						@if(array_key_exists('abbreviation', $platform))
							{{ $platform['abbreviation'] }}
						@endif
					@endforeach
				</div>
				<div class="flex flex-wrap items-center mt-8">
					<div class="flex items-center">
						<div class="w-16 h-16 bg-gray-800 rounded-full">
							<div class="font-semibold text-xs flex justify-center items-center h-full">{{ floor($game['rating'].'%') }}</div>
						</div>
						<div class="ml-4 text-xs">Member <br> Score</div>
					</div>
					<div class="flex items-center">
						<div class="w-16 h-16 bg-gray-800 rounded-full ml-12">
							<div class="font-semibold text-xs flex justify-center items-center h-full">{{ floor($game['rating']).'%' }}</div>
						</div>
						<div class="ml-4 text-xs">Critic <br> Score</div>
					</div>
					<div class="flex items-center space-x-4 mt-4 lg:ml-12 lg:mt-0">
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
				<p class="mt-12">{{ $game['summary'] }}</p>

				<div class="mt-12">
					{{-- <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blud-600 rounded transition ease-in-out duration-150">
						<span class="ml-2">Play Trailer</span>
					</button> --}}
					<a href="https://youtube.com/watch/{{$game['videos'][0]['video_id']}}" class="flex-inline bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blud-600 rounded transition ease-in-out duration-150">
						<span class="ml-2">Play Trailer</span>
					</a>
				</div>
			</div>
		</div>
		<div class="images-conainer border-b border-gray-800 pb-12 mt-8">
			<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 gap-12 mt-8">
				@foreach($game['screenshots'] as $screenshot)
					<div>
						<a href="{{ Str::replaceFirst('thumb', 'cover_huge', $screenshot['url']) }}">
							<img src="{{ Str::replaceFirst('thumb', 'cover_big', $screenshot['url']) }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
						</a>
					</div>
				@endforeach

			</div>
		</div>

		<div class="similar-games mt-8 mb-8">
			<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
				<div class="similar-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-6 gap-12 gap-12">
					@foreach($game['similar_games'] as $game)
					<div class="game mt-8">
						<div class="relative inline-block">
								@if(array_key_exists('cover', $game))
									<a href="{{ route('game.show', $game['slug']) }}">
										<img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
									</a>
								@endif
							@isset($game['rating'])
								<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full progress-list-item">
									<div class="font-semibold text-xs flex justify-center items-center h-full">
										{{ round($game['rating']).'%' }}
									</div>
								</div>
							@endisset
						</div>
						<a href="{{ route('game.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
						<div class="text-gray-400 mt-1">
							@if(array_key_exists('platfroms', $game))
								@foreach($game['platforms'] as $platform)
									@if(array_key_exists('abbreviation', $platform))
										{{ $platform['abbreviation'] }}
									@endif
								@endforeach
							@endif
						</div>
					</div>
					@endforeach
				</div>
		</div>

	</div>
@endsection
