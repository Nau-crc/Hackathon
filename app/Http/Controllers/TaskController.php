<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('user.dashboard', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'=>'required',
            'description'=>'required',
            'time'=>'required',
            'place'=>'required',
            'score'=>'required',
            'inProgress'=>'required'
        ]);
            
        $task = Task::create([

            'title'=>$request->title,
            'description'=>$request->description,
            'time'=>$request->time,
            'place'=>$request->place,
            'score'=>$request->score,
            'inProgress'=>$request->inProgress,
        ]);

        return route('storeTask', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return $task->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task, $id)
    {
        $task = Task::find($id);
        return redirect(route('editTask', ['task' => $task]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'time'=>'required',
            'place'=>'required',
            'score'=>'required',
            'inProgress'=>'required'
        ]);

        $task = Task::find($id);
        $task->update($request->all());

        return route('updateTask',['task' => $task]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        
        return back()->redirect()->view('user.dashboard');
    }
}
