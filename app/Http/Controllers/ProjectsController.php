<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();

        return view('projects.index', ['projects'=> $projects]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Project = Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id
        ]);

        if ($Project) {
            return redirect()->route('projects.show', ['Project'=>$Project->id])
                ->with('success', 'Project Created Successfully');
        }
        return back()->withInput()->with('error','Project created Error');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $Project)
    {
        $Project = Project::find($Project->id);

        return view('projects.show',['Project'=>$Project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $Project)
    {
        $Project = Project::find($Project->id);

        return view('projects.edit',['Project'=>$Project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $Project)
    {
        $ProjectUpdate = Project::where('id', $Project->id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
        if ($ProjectUpdate) {
            return redirect()->route('projects.show',['Project'=>$Project->id])->with('success','Project Updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $Project)
    {
        $findProject = Project::find( $Project->id);
        if ($findProject->delete()) {
            return redirect()->route('projects.index')->with('success','Project Deleted Successfully');
        }
        return back()->withInput()->with('error','Delectation Error');
    }
}
