<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlideRequest;
use App\Slide;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SlidesController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('pages.admin.slides.list', compact('slides'));
    }

    public function create()
    {
        return view('pages.admin.slides.create');
    }

    public function store(CreateSlideRequest $request)
    {
        $input = $request->all();

        $newSlide = Slide::create($input);

        if ($newSlide->id) {
            return redirect()->action('SlidesController@index')->withMessage('Your slide has been added!');
        }
        else {
            return redirect('back')->withErrors('Something went wrong while adding your slide. Report this to the
            tech chair.');
        }
    }

    public function delete(Request $request, $id)
    {
        if (Slide::destroy($id)) {
            return redirect()->action('SlidesController@index')->withMessage('Your slide has been deleted!');
        }
        else {
            return redirect('back')->withErrors('Something went wrong while adding your slide. Report this to the
            tech chair.');
        }
    }
}
