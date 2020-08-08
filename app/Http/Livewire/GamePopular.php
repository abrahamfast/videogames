<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Http, Cache;

class GamePopular extends Component
{
	public $popularGames = [];

	public function loadPopularGames()
	{
        $this->popularGames = Cache::remember('popular-games', 60, function(){
        	$before = Carbon::now()->subMonths()->timestamp;
        	$after = Carbon::now()->addMonths()->timestamp;
        	$endpoint = "https://api-v3.igdb.com/games";

        	return Http::withHeaders(config('services.igdb'))->withOptions([
	            'body' => "
	                fields name, cover.*, first_release_date, popularity,platforms.abbreviation,rating;
	                where platforms = (48,49,130,6)
	                & ( first_release_date >= {$before}
	                & first_release_date < {$after});
	                sort popularity desc;
	                limit 10;
	            "
        	])->get($endpoint)->json();
        });
	}
    public function render()
    {
        return view('livewire.game-popular');
    }
}
