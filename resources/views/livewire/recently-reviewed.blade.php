			<div wire:init="loadRecentlyReviewed" class="recently-reviewed lg:w-3/4 mr-0 lg:mr-32">
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
				<div class="recently-reviewd-container space-y-12 mt-8">
					@forelse($recentlyReviewed as $game)
					<div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
						<div class="relative flex-none">
							<a href="#">
								<img src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}" 
								alt="game cover"
								class="w-48 hover:opacity-75 transition ease-in-out duration-150"
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
					@empty
						@foreach(range(1, 3) as $game)
							<div class="game bg-gray-800 rounded-lg shadow-md flex mt-8">
								<div class="relative inline-none">
									<div class="bg-gray-700 w-32 lg:w-48 h-40 lg:h-56"></div>
								</div>
								<div class="ml-6 lg:ml-12">
									<div class="inline-block text-lg font-semibold leading-tight text-transparent bg-gray-700 rounded mt-4">Title here</div>
									<div class="mt-8 space-y-4 hidden lg:block">
										<div class="text-transparent bg-gray-700 rounded inline-block">consectetur adipisicing elit. Tenetur, doloremque, recusandae.</div>
										<div class="text-transparent bg-gray-700 rounded inline-block">consectetur adipisicing elit. Veritatis minus dolor suscipit.</div>
										<div class="text-transparent bg-gray-700 rounded inline-block">consectetur adipisicing elit. Facilis reiciendis sequi quibusdam.</div>
									</div>
								</div>
								
							</div>
						@endforeach
							<div class="spinner mt-8"></div>
					@endforelse
				</div>
			</div>
