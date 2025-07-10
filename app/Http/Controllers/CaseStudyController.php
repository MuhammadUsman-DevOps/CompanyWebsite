<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function caseStudyView(Request $request, $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();
        return view('devlints.case_study', compact('caseStudy'));
    }
}
