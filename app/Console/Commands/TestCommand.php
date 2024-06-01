<?php

namespace App\Console\Commands;

use App\Models\Offer;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For test purposes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $offer = Offer::find(42);
        dump(asset('/storage/logos/' . $offer->logo));
    }
}
