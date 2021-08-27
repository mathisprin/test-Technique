<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;


class AfficherPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Afficher:Posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Afficher les posts selon un tag donné';

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
        $choixTag = $this->ask('Choissisez un Tag ?');

        //récupération des posts possédant ce tag
        $idTag = Post::Tag($choixTag)->get()->toArray();
        
        //check si le tag existe bien 
        if(empty($idTag[0]))
        {
            $this->info("Vous avez saisi un mauvais tag : ".$choixTag);
            return 0;
        }

        // affichage du ou des posts de pour ce tag
        $this->table(['ID_Post','Contenu','ID_Tag'],
            $idTag);

        return 0;
    }
}
