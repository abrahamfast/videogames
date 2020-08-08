<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Http;

class CommingSoon extends Component
{
	public $commingSoon = [];

	public function loadCommingSoon()
	{
		$endpoint = "https://api-v3.igdb.com/games";
		$current = Carbon::now()->timestamp;
		$this->commingSoon = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
                fields name, cover.*, first_release_date,summary, popularity,platforms.abbreviation,rating, rating_count;
                where platforms = (48,49,130,6)
                & (first_release_date >= {$current}
                & popularity > 5);
                sort first_release_date desc;
                limit 4;
            "
        ])->get($endpoint)->json();
	}
    public function render()
    {
        return view('livewire.comming-soon');
    }
}
