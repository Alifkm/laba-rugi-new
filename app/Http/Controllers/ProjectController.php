<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $project = Project::all();
        if($request->ajax()) {
            return datatables()->of($project)
                    ->addColumn('action', function($project){
                        if(auth()->user()->adminType->admin_type_name === "superAdmin") {
                            $actionBtn =
                                '<div class = "d-flex justify-content-center">
                                    <a href="/project/'.$project->id.'/edit" id="'.$project->id.'" class="edit btn btn-outline-success btn-sm btn-action">Detail</a>
                                </div>';    
                        } else {
                            $actionBtn =
                                '<div class = "d-flex justify-content-center">
                                    <a href="/project/'.$project->id.'/edit" id="'.$project->id.'" class="edit btn btn-outline-success btn-sm btn-action">Edit</a>
                                    <a href="javascript:void(0)" id="'.$project->id.' '.$project->name.'" data-toggle="tooltip" data-original-title="Delete"  class="delete btn btn-outline-danger btn-sm btn-action mx-1">delete</a>
                                </div>';
                        }
                            
                        return $actionBtn;
                    })
                    ->addColumn('start_date', function ($project) {
                
                        $mydate = strtotime($project->start_date);
                        $newformat = date('d M Y',$mydate);
                        return '<td data-sort="'. $mydate .'">'.$newformat .'</td>';
                    })
                    ->addColumn('end_date', function ($project) {
                
                        $mydate = strtotime($project->end_date);
                        $newformat = date('d M Y',$mydate);
                        return '<td data-sort="'. $mydate .'">'.$newformat .'</td>';
                    })
                    ->addIndexColumn()
                    ->rawColumns(['start_date', 'end_date', 'action'])
                    ->make(true);
          }
          
          return view('project.index', [
            'user' => auth()->user()->adminType->admin_type_name
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'start_date' => ['required', 'date', 'before:end_date'],
            'end_date' => ['required', 'date', 'after:start_date'],
            'client_name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]); 

        $res = str_replace( '.', '', $request -> price);

        Project::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'client_name' => $request->client_name,
            'location' => $request->location,
            'price' =>  $res,
            'status' => $request->status,
            'description' => $request->description
        ]);

        // Project::create($formFields);

        return redirect('/project')->with('message', 'Project ' . $formFields['name'] . ' created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('project.edit', [
            'project' => $project,
            'user' => auth()->user()->adminType->admin_type_name === "superAdmin"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'start_date' => ['required', 'date', 'before:end_date'],
            'end_date' => ['required', 'date', 'after:start_date'],
            'client_name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]); 

        $project = Project::where('id', 'like', $id)->first();

        $res = str_replace( '.', '', $request -> price);

        $project->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'client_name' => $request->client_name,
            'location' => $request->location,
            'price' =>  $res,
            'status' => $request->status,
            'description' => $request->description
        ]);

        // $project->update($formFields);

        return redirect('/project')->with('message', 'Project ' . $formFields['name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        
        $project->delete();
        return redirect('/project')->with('message', 'Project ' . $project['name'] . ' deleted successfully!'); 
    }
}
