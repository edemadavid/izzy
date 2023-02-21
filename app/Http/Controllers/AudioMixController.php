<?php

namespace App\Http\Controllers;

use App\Models\AudioMix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudioMixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audioMixes = AudioMix::all();

        return view('admin.audioMix', compact('audioMixes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audioMixAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:sermons|max:255',
            'audio_file' => 'required',
            'description' => 'required'

        ]);


        if ($validator->fails()) {
            return redirect('audio/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        $audioMix = new AudioMix();
        $audioMix->title =  $validated['title'];
        $audioMix->description = $validated['description'];

        if($request->file('audio_file')){
            $file= $request->file('audio_file');

            $filename= date('YmdHi')."_Audio".".".$request->audio_file->extension();

            $file-> move(public_path('Audio'), $filename);

            // $data['image']= $filename;
        } else {$filename = null;}

        $audioMix->audio_file = $filename;

        // dd($audioMix);

        $audioMix -> save();

        return redirect()->action(
            [AudioMixController::class, 'index']

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioMix  $audioMix
     * @return \Illuminate\Http\Response
     */
    public function show(AudioMix $audioMix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AudioMix  $audioMix
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioMix $audioMix, $id)
    {
        $audioMix = AudioMix::find($id);

        return view('admin.audioMixEdit', Compact('audioMix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AudioMix  $audioMix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudioMix $audioMix, $id)
    {
        $audioMix = AudioMix::find($id);

        // validateds all input...
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'audio_file' => 'required',
            'description' => 'required',


        ]);

        // checks id validator fails and returns to form ...
        if ($validator->fails()) {
            return redirect('audioMix/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();


        if ($request->audio_file != ''){
            $path = public_path().'/Audio';

            //code for remove old file
            if($audioMix->audio_file != ''  && $audioMix->audio_file != null){
                 $file_old = $path."/".$audioMix->audio_file;
                 unlink($file_old);
            }

            $file= $request->file('audio_file');

            $filename= date('YmdHi')."_".$audioMix->title.".".$request->audio_file->extension();

            $file-> move(public_path('Audio'), $filename);

        } else {
            $filename = $audioMix->audio_file;
        }



        $audioMix->title =  $validated['title'];
        $audioMix->description = $validated['description'];
        $audioMix->audio_file = $filename;

        $audioMix->save();


        return redirect()->action(
            [AudioMixController::class, 'index']

        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AudioMix  $audioMix
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioMix $audioMix,$id)
    {
        $sermon = AudioMix::find($id);

        $sermon->delete();


        return redirect()->action(
            [AudioizController::class, 'index']
        );
    }
}
