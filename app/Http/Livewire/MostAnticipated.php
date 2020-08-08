<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Http;

class MostAnticipated extends Component
{
	public $mostAnticipated = [];

	public function loadMostAnticipated()
	{
		$endpoint = "https://api-v3.igdb.com/games";
		$current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
		$this->mostAnticipated = Http::withHeaders(config('services.igdb'))->withOptions([
            'body' => "
                fields name, cover.*, first_release_date,summary, popularity,platforms.abbreviation,rating, rating_count;
                where platforms = (48,49,130,6)
                & ( first_release_date >= {$current}
                & first_release_date < {$afterFourMonths});
                sort popularity desc;
                limit 4;
            "
        ])->get($endpoint)->json();
	}	
    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
