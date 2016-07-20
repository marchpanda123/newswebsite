<?php

namespace App\Http\Controllers\Admin;

use App\Label;
use App\Tag;

use App\Http\Requests;
use App\Http\Requests\LabelCreateUpdateRequest;
use App\Http\Controllers\Controller;

class LabelController extends Controller
{
    protected $name = '';

    public function __construct()
    {
        $this->middleware('checkAdmin:1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = old($this->name);
        $allTags = Tag::lists('id', 'name');
        return view('admin.label.create', compact('fields'))->with('allTags', $allTags)->with('name',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LabelCreateUpdateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabelCreateUpdateRequest $request)
    {
        $label = Label::create($request->labelFillData());
        $label->syncTags($request->input('tags', []));
        return redirect('/admin/tag')
            ->withSuccess("大标签 '$label->name' 已创建");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $label = Label::findOrFail($id);
        $allTags = Tag::lists('id', 'name')->all();
        $tags = $label->tags()->lists('tag_id')->all();
        $data = ['id' => $id, 'name' => $label->name, 'allTags' => $allTags, 'tags' => $tags, 'label' => $label];

        return view('admin.label.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LabelCreateUpdateRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabelCreateUpdateRequest $request, $id)
    {
        $label = Label::findOrFail($id);
        $label->fill($request->labelFillData());
        $label->save();
        $label->syncTags($request->get('tags', []));
        return redirect('/admin/tag')
            ->withSuccess("已修改");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $label = Label::findOrFail($id);
        $label->tags()->detach();
        $label->delete();
        return redirect('/admin/tag')
            ->withSuccess("标签 '$label->name' 已删除");
    }
}
