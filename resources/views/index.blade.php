@extends('layouts.app')

@section('content')

	<div class="container mx-auto px-4">
		<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular GAMES</h2>
		<div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-6 gap-12 gap-12 border-t border-gray-800 pb-16">
			@foreach($popularGames as $game)
			<div class="game mt-8">
				<div class="relative inline-block">
					<a href="#">
						<img src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
				@isset($game['rating'])
					<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full progress-list-item">
						<div class="font-semibold text-xs flex justify-center items-center h-full">
							{{ round($game['rating']) . '%'}}
						</div>
					</div>
				@endisset
			</div>
				<a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
				<div class="text-gray-400 mt-1">
					@foreach($game['platforms'] as $platform)
						@if(array_key_exists('abbreviation', $platform))
							{{ $platform['abbreviation'] }}
						@endif
					@endforeach
				</div>
			</div>
			@endforeach
			
		</div> <!-- end popularity game -->
	
		<div class="flex flex-col lg:flex-row my-10">
			<div class="recently-reviewed lg:w-3/4 mr-0 lg:mr-32">
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
				<div class="recently-reviewd-container space-y-12 mt-8">
					@foreach($recentlyReviewed as $game)
					<div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
						<div class="relative inline-none">
							<a href="#">
								<img src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}" 
								alt="game cover"
								class="hover:opacity-75 transition ease-in-out duration-150"
								>
							</a>
							@isset($game['rating'])
							<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full progress-list-item">
								<div class="font-semibold text-xs flex justify-center items-center h-full">
									{{ round($game['rating']) . '%'}}
								</div>
							</div>
							@endisset
						</div>
						<div class="ml-12">
							<a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{ $game['name'] }}</a>
							<div class="text-gray-400 mt-1">
								@foreach($game['platforms'] as $platform)
									@if(array_key_exists('abbreviation', $platform))
										{{ $platform['abbreviation'] }}
									@endif
								@endforeach
							</div>
							<p class="mt-6 text-gray-400 hidden lg:block">
								{{ $game['summary'] }}
							</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<div class="most-anticipated lg:w-1/4">
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
				<div class="most-anticipated-container space-y-10 mt-8">
					@foreach($mostAnticipated as $game)
					<div class="game flex">
						<a href="#">
							<img src="{{ $game['cover']['url'] }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
						</a>
						<div class="ml-4">
							<a href="" class="hover:text-gray-300">{{ $game['name'] }}</a>
							<div class="text-gray-400 text-sm 1">{{ Carbon\Carbon::parse($game['first_release_date'])->format("M d, y") }}</div>
						</div>
					</div>
					@endforeach
				</div>
			 

				<h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Comming Soon</h2>
				<div class="most-anticipated-container space-y-10 mt-8">
					@foreach($commingSoon as $game)
					<div class="game flex">
						<a href="#">
							@isset($game['cover'])
								<img src="{{ $game['cover']['url'] }}" 
								alt="game cover" 
								class="w-16 hover:opacity-75 transition ease-in-out duration-150"
								>
							@else
								<img src="/img/default.jpg" 
								alt="game cover" 
								class="w-16 hover:opacity-75 transition ease-in-out duration-150"
								>
							@endisset
						</a>
						<div class="ml-4">
							<a href="" class="hover:text-gray-300">{{ $game['name'] }}</a>
							<div class="text-gray-400 text-sm 1">{{ Carbon\Carbon::parse($game['first_release_date'])->format("M d, y") }}</div>
						</div>
					</div>
					@endforeach
				</div>
			</div> <!-- end comming soon -->

		</div> 
	</div>
@endsection
