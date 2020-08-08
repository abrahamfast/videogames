				
				<div wire:init="loadCommingSoon" class="most-anticipated-container space-y-10 mt-8">
					@forelse($commingSoon as $game)
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
					@empty
						<div>Loading...</div>
					@endforelse
				</div>
