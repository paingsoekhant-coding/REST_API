<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogApiController extends Controller
{
    //read method
    public function read()
    {
        $blogs = Blogs::all();
        return response()->json($blogs, 200);
    }

    //edit method
    public function edit($id)
    {
        $blogId = Blogs::where('id', $id)->exists();
        if (!$blogId) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        $blog = Blogs::where('id', $id)->first();

        return response()->json($blog, 200);
    }

    //blog create method
    public function create(Request $request)
    {
        // return response()->json($request);
        $validator = $this->blogDataValidation($request);
        if ($validator->fails()) {
            $data = [
                "error message" => $validator->messages()
            ];
            return response()->json($data);
        }
        $items = $this->getBlogData($request);

        Blogs::create($items);
        $message = "Blog created successfully";
        return response()->json($message, 200);
    }

    // update blog api
    public function update(Request $request)
    {
        $blogId = $request->id;
        $item = Blogs::where('id', $blogId)->first();

        if (isset($item)) {
            $newData = $this->getBlogData($request);
            $result = Blogs::where('id', $blogId)->Update($newData);
            return response()->json(['status' => true, 'message' => "Update Success", 'Update Data' => $result], 200);
        }
        return response()->json(['status' => false, 'message' => "No Category Found"], 404);
    }

    //delete method
    public function delete($id)
    {
        $blogId = Blogs::where('id', $id)->exists();
        if (!$blogId) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        Blogs::where('id', $id)->delete();
        return response()->json('Blog deleted successfully', 200);
    }
    //validation method
    private function blogDataValidation(Request $request)
    {
        $blogData = [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ];
        $checkBLogData = Validator::make($request->all(), $blogData);
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
