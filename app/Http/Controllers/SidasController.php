<?php

namespace App\Http\Controllers;

use App\Models\Sidas;

use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

class SidasController extends Controller
{    
    public function index(): View
    {
        //get posts
        $post = Sidas::latest()->paginate(5);

        //render view with posts
        return view('sidas.index', compact('post'));
    }

    public function create(): View
    {
        return view('sidas.create');
    }

    public function store(Request $request): RedirectResponse
    { 
        //validate form
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'          => 'required|min:5',
            'nisn'          => 'required|min:10',
            'tempat_lahir'  => 'required|min:5',
            'tgl_lahir'     => 'required',
            'ayah'          => 'required|min:5',
            'ibu'           => 'required|min:5',
            'alamat'        => 'required|min:5'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/sidas', $image->hashName());

        //create post
        Sidas::create([
            'image'         => $image->hashName(),
            'nama'          => $request->nama,
            'nisn'          => $request->nisn,
            'tempat_lahir'  => $request->tempat_lahir,
            'tgl_lahir'     => $request->tgl_lahir,
            'ayah'          => $request->ayah,
            'ibu'           => $request->ibu,
            'alamat'        => $request->alamat
        ]);

        //redirect to index
        return redirect()->route('sidas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Sidas::findOrFail($id);

        //render view with post
        return view('sidas.show', compact('post'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Sidas::findOrFail($id);

        //render view with post
        return view('sidas.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'          => 'required|min:5',
            'nisn'          => 'required|min:10',
            'tempat_lahir'  => 'required|min:5',
            'tgl_lahir'     => 'required',
            'ayah'          => 'required|min:5',
            'ibu'           => 'required|min:5',
            'alamat'        => 'required|min:5'
        ]);

        //get post by ID
        $post = Sidas::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/sidas', $image->hashName());

            //delete old image
            Storage::delete('public/sidas/'.$post->image);

            //update post with new image
            $post->update([
                'image'         => $image->hashName(),
                'nama'          => $request->nama,
                'nisn'          => $request->nisn,
                'tempat_lahir'  => $request->tempat_lahir,
                'tgl_lahir'     => $request->tgl_lahir,
                'ayah'          => $request->ayah,
                'ibu'           => $request->ibu,
                'alamat'        => $request->alamat
                ]);

        } else {

            //update post without image
            $post->update([
                'nama'          => $request->nama,
                'nisn'          => $request->nisn,
                'tempat_lahir'  => $request->tempat_lahir,
                'tgl_lahir'     => $request->tgl_lahir,
                'ayah'          => $request->ayah,
                'ibu'           => $request->ibu,
                'alamat'        => $request->alamat
                ]);
        }

        //redirect to index
        return redirect()->route('sidas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Sidas::findOrFail($id);

        //delete image
        Storage::delete('public/sidas/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('sidas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}