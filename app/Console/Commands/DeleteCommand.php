<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //delete
        //コマンド　./vessel art command:delete
        echo"削除開始";

        DB::table('pays')->delete();
        DB::table('categories')->delete();
        DB::table('images')->delete();
        DB::table('images_type')->delete();
        DB::table('menus_type')->delete();
        DB::table('shops')->delete();
        DB::table('shops_categories')->delete();
        DB::table('shops_pays')->delete();
        DB::table('smoking')->delete();

        echo"削除完了";
        return 0;
    }
}
