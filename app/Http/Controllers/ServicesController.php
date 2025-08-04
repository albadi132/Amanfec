<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
   public function FireProtectionDesign()
    {
        return view('Web.Services.fire-protection-design');
    }

    public function ModelingServices()
    {
        return view('Web.Services.modeling-services');
    }

    public function ConstructionAndSiteServices()
    {
        return view('Web.Services.construction-and-site-services');
    }

    public function TestingAndCommissioning()
    {
        return view('Web.Services.testing-and-commissioning');
    }

    public function SurveysAndRiskAssessments()
    {
        return view('Web.Services.surveys-and-risk-assessments');
    }

    public function CodeConsulting()
    {
        return view('Web.Services.code-consulting');
    }
}
