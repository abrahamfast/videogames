@extends('layouts.app')

@section('content')

	<div class="container mx-auto px-4">
		<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular GAMES</h2>
		
		<livewire:game-popular>
	
		<div class="flex flex-col lg:flex-row my-10">
			<livewire:recently-reviewed>

			<div class="most-anticipated lg:w-1/4">
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
				<livewire:most-anticipated> 
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Comming Soon</h2>
				<livewire:comming-soon> 
			</div> <!-- end comming soon -->

		</div> 
	</div>
@endsection
