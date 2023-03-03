<?php

namespace Coded\Codedlivechat\Console;


use App\Models\User;
use Coded\Codedlivechat\Models\support_message_store;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;


class deletehistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:chats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'a custom livechat artisan command by codedwebltd to delete all chat history.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $history = support_message_store::where("expirytime", "<",Carbon::now()->timezone('Africa/lagos'))
        ->orwhere("expirytime", NULL)
        ->get();
        foreach($history as $key)
        {

            $key->delete();

            echo 'affected users contacted';
        }
    }
}
