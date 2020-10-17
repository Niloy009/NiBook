<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request, User $user)
    {
//        $this->validate($request, [
//            'body' => 'required',
//        ]);

        $data = $request->except('files');

        $data['user_id'] = $user->id;


        //check chat body and file both are not null
        if (($data['body'] != null && $request->has('files') == false) ||
            ($data['body'] == null && $request->has('files') != false) ||
            ($data['body'] != null && $request->has('files') != false))
        {
            $post = Post::create($data);
            if ($request->has('files'))
            {
                $files = $request->file('files');
                foreach ($files as $file)
                {
                    $extension = $file->getClientOriginalExtension();//getting file extension
                    $fileOriginalName = Str::slug($file->getClientOriginalName());//getting file original name
                    $fileName = rtrim($fileOriginalName, $extension); // trim the extension
                    $fileName = $fileName . '-' . time() . '.' . $extension; //make the filename unique
                    $newFile['files'] = $fileName;

                    //if input file is a image then resize
                    if (substr($file->getMimeType(), 0, 5) == 'image') {
                        $image = Image::make($file)->resize(800, 800)->encode();
                        Storage::put('public/files/' . $fileName, $image->__toString());
                    } else {
                        $file->storePubliclyAs('public/files', $fileName);
                        $newFile['isImage'] = 1;
                    }
                    $post->files()->create($newFile);
                }
            }
            return redirect()->back()->with('success', "Created Successfully");
        } else {
            return redirect()->back()->with('error', "Post can not be blank");
        }

    }

}
