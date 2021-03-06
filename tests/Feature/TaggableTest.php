<?php

namespace Tests\Feature;

use App\Model\user\articles\article;
use App\Model\user\tag;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaggableTest extends TestCase
{


    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Artisan::call('migrate');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $article = Article::create(['body'=>'demo toto','title'=>'demo','user_id'=>'1']);
        $article->saveTags('pomade,soda,fumer');
        $this->assertEquals(4, Tag::count());
    }
}
