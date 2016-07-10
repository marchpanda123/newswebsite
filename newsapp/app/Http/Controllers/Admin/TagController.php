<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Label;
use DB;

use App\Http\Requests;
use App\Http\Requests\TagCreateUpdateRequest;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    protected $name = '';

    public function __construct()
    {
        $this->middleware('checkAdmin:1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels = Label::all();

        return view('admin.tag.index')->withLabels($labels)
        ->withTags(DB::table('tags')->leftJoin('label_tag', 'tags.id', '=', 'label_tag.tag_id')
            ->whereNull('label_tag.id')
            ->select('tags.id', 'tags.name')
            ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = old($this->name);
        $allLabels = Label::lists('id', 'name');
        return view('admin.tag.create', compact('fields'))->with('allLabels', $allLabels)->with('name',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TagCreateUpdateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagCreateUpdateRequest $request)
    {
        $tag = Tag::create($request->tagFillData());
        $tag->syncLabels($request->input('labels', []));
        return redirect('/admin/tag')
            ->withSuccess("The tag '$tag->name' was created.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $allLabels = Label::lists('id', 'name')->all();
        $labels = $tag->labels()->lists('label_id')->all();
        $data = ['id' => $id, 'name' => $tag->name, 'show_index' => $tag->show_index, 'allLabels' => $allLabels, 'labels' => $labels];
        return view('admin.tag.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TagCreateUpdateRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagCreateUpdateRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->fill($request->tagFillData());
        $tag->save();
        $tag->syncLabels($request->get('labels', []));
        return redirect('/admin/tag')
            ->withSuccess("Changes saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect('/admin/tag')
            ->withSuccess("The '$tag->name' tag has been deleted");
    }
}
