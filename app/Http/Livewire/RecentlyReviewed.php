<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Http;

class RecentlyReviewed extends Component
{
	public array $recentlyReviewed = [];

	public function loadRecentlyReviewed()
	{
		$endpoint = "https://api-v3.igdb.com/games";
		$before = Carbon::now()->subMonths()->timestamp;
        $current = Carbon::now()->timestamp;
		$this->recentlyReviewed = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
                fields name, cover.*, first_release_date,summary, popularity,platforms.abbreviation,rating, rating_count;
                where platforms = (48,49,130,6)
                & ( first_release_date >= {$before}
                & first_release_date < {$current}
                & rating_count > 5);
                sort popularity desc;
                limit 3;
            "
        ])->get($endpoint)->json();
	}

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
