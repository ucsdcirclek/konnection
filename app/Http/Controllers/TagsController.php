<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EventTag as Tag;
use DB;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Gets tags to display in form.
        $service_tags = Tag::where('category_id', 1)->get();
        $admin_tags = Tag::where('category_id', 2)->get();
        $social_tags = Tag::where('category_id', 3)->get();
        $misc_tags = Tag:: where('category_id', 4)->get();

        return view('pages.tags.create', compact('service_tags', 'admin_tags', 'social_tags', 'misc_tags', 'event_id', 'cerf_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateTagRequest $request)
    {
        $input = $request->all();

        $tagAbbreviations = [];

        /*
         * Some events may have tags in all four categories, and while an event
         * event has to have a tag in at least one of the service, leadership,
         * or fellowship categories, an event might not have a tag in all, so
         * check and merge into one array with all tags for reduced code
         * repetition.
         */
        if (array_key_exists('service_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['service_tags']);
        if (array_key_exists('admin_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['admin_tags']);
        if (array_key_exists('social_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['social_tags']);
        if (array_key_exists('misc_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['misc_tags']);

        /*
         * Iterates through all tags selected and queries database with
         * abbreviation to find appropriate tag ID. Each tag abbreviation is
         * unique, so no need to check.
         */
        foreach($tagAbbreviations as $abbreviation) {
            $tag = Tag::where('abbreviation', $abbreviation)->first();

            /*
             * An additional cerf_id column was added to this pivot table
             * because there may be multiple CERFs for an event and until one
             * CERF is approved (so that all other CERFs are deleted) there are
             * duplicate event_id and tag_id combinations in the pivot table.
             * In order to avoid duplicate tags being listed when looking at
             * the tags attribute, all entries are associated with a cerf_id
             * foreign key. When the tags for an event looked up, the tags for
             * the event according to only one CERF is looked up (see tags
             * relation in Event model), so no duplicates are listed since the
             * CERF form is the only way for a user to associate an event with
             * a tag.
             */
            DB::statement('insert into events_assigned_tags (event_id, tag_id, approved) values (' .
                session()->get('event_id') . ', ' .
                $tag->id . ', ' .
                'false);');
        }

        return redirect()->action('ActivitiesController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
