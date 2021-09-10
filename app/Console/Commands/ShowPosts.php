<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;


class ShowPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Show:Posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display posts according to a given tag';

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
        $Tag = $this->ask('choose a tag ?');
        
        //retrieving posts having this tag
        $idTag = Post::Tag($Tag)->get()->toArray();
        
        //check if the tag is existing 
        if(empty($idTag[0]))
        {
            $this->info("you have entered a wrong tag : ".$Tag);
            return 0;
        }

        // Display all posts of this tag
        $this->table(['ID_Post','Contenu','ID_Tag'],
            $idTag);

        return 0;
    }
}
