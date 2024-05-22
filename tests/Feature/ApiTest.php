<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function updateBlog($id , Request $request)
    {
             $this->blogDataValidation($request);
            $data = $this->getBlogData($request);
            Blogs::where('id',$id)->update($data);

        return response()->json('Blog updated successfully', 200);


    }

    private function blogDataValidation(Request $request)
    {
        $blogData = [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ];
        $checkBLogData = Validator::make($request->all(),$blogData);
        return $checkBLogData;
    }


    //get blog data method
    private function getBlogData(Request $request)
    {
       return [
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content

        ];

    }
}
