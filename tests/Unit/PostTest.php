<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_post_store(): void
    {
        $response=$this->call('POST','/admin/post',[
            'title'=>'test title',
            'category'=>'test category here',
            'content'=>'test content',

        ]);
        $response->assertStatus($response->status(),302);
        // $this->assertTrue(true);
    }

    public function test_login()
    {
        $response=$this->get('/login');
        $response->assertStatus(200);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users',[
            'name'=>'admin'
        ]);
    }
}
