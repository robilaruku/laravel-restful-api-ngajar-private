<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class PostDebugCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'query:debug-post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd($this->getPost());
    }

    private function getPublishedPosts()
    {
        return Post::published()->get()->toArray();
    }

    private function inserPostTableDummy(){
        return Post::create([
            'judul' => 'Content 1',
            'content' => 'Ini adalah content',
            'published' => true,
            'status' => 'Draft'
        ]);
    }

    public function getAllPosts() {
        return Post::all()->toArray();
    }

    public function getPost() {
        return Post::find(1)->toArray();
    }

}
