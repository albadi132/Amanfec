<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function FireProtectionLifeSafetyRiyadh()
    {
            return view('Web.Projects.Fire-Protection-Life-Safety-Riyadh');
    }

     public function LifeSafetySystemReviewRiyadh()
    {
            return view('Web.Projects.Life-Safety-System-Review-Riyadh');
    }

     public function FireSafetyDesignReviewJeddah()
    {
            return view('Web.Projects.Fire-Safety-Design-Review-Jeddah');
    }

     public function MultiStageFireSafetyRiyadh()
    {
            return view('Web.Projects.Multi-Stage-Fire-Safety-Riyadh');
    }

     public function FireSafetySmokeModelingAlUla()
    {
            return view('Web.Projects.Fire-Safety-Smoke-Modeling-AlUla');
    }

     public function FireLifeSafetyManagementMakkah()
    {
            return view('Web.Projects.Fire-Life-Safety-Management-Makkah');
    }

}
