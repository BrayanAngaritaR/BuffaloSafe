<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    private $img_ext = [ 'jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' ];
    private $video_ext = [ 'mp4', 'avi', 'mpeg', 'MP4', 'AVI', 'MPEG' ];
    private $document_ext = [ 'doc', 'docx', 'pdf', 'xlsx', 'odt', 'DOC', 'DOCX', 'PDF', 'XLSX', 'ODT' ];
    private $audio_ext = [ 'mp3', 'wma', 'ogg', 'mpga', 'MP3', 'WMA' , 'OGG', 'MPGA'];


    private function allExtensions(){
        return array_merge(

            $this->img_ext, 
            $this->video_ext, 
            $this->document_ext, 
            $this->audio_ext

        );
    }

    private function getType($ext) {
  
        if(in_array($ext, $this->img_ext)){
            return 'image';
        }

        if(in_array($ext, $this->video_ext)){
            return 'video';
        }

        if(in_array($ext, $this->document_ext)){
            return 'document';
        }

        if(in_array($ext, $this->audio_ext)){
            return 'audio';
        }
    }


    public function index()
    {
        return "Index method";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $max_size   = (int)ini_get('upload_max_filesize') * 10240;
        $all_ext    = implode(',', $this->allExtensions());

        $this->validate(request(), [
            'file'  =>  'required|file|mimes:' . $all_ext . '|max:' . $max_size
        ]);

        $file   =   $request->file('file');
        $ext    =   $file->getClientOriginalExtension();
        $type   =   $this->getType($ext);

        if (Storage::putFileAs(
            '/public/' . Auth::id() . '/' 
            . $type . '/', $file, $request->filename 
            . '.' . $ext)) 
        {
            File::create([
                'name'      =>  $request->filename,
                'type'      =>  $type,
                'extension' =>  $ext,
                //'url'       =>
                'user_id'   =>  Auth::id()
            ]);
        }

        return "File uploaded";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  File $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  File $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  File $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  File $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
