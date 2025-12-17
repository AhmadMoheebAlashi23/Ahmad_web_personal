<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $languages=Language::paginate(10);
        return view('dashboard.languagess.index',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.languagess.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'title' => 'required|string|max:255',
    ]);

    Language::create([
        'title' => $request->title,

    ]);

    flash()->success('Language created successfully!');

    return redirect()->route('languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
        return view('dashboard.languagess.edit',compact('language'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $experience = Language::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',

        ]);
        $experience->update([
            'title' => $request->title,

        ]);
        flash()->success('Language updated successfully!');
        return redirect()->route('languages.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
        $language->delete();
        flash()->success('Language deleted successfully!');
        return redirect()->route('languages.index');
    }
}
