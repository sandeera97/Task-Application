<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class taskcontroller extends Controller
{
    public function store(Request $req){

            //dd($request->all());

            $task=new Task;
            //$this->validate($req,[

                //'task'=>'requird',

            //]);

            $task->task=$req->task;
            $task->save();

            $data=Task::all();
            //dd($data);
            return view('task')->with('tasks',$data);
            
    }

    //this function created to mark as completed
    public function updateTask($id){

            $task=Task::find($id);
            $task->iscompleated=1;
            $task->save();
            return redirect()->back();
    }

    public function updateasnotcompleted($id){

            $task=Task::find($id);
            $task->iscompleated=0;
            $task->save();
            return redirect()->back();
    }

    public function deletetask($id){

            $task=Task::find($id);
            $task->delete();
            return redirect()->back();
    }
    public function updatetaskview($id){
            $task=Task::find($id);
            return view('updatetask')->with('taskdata',$task);
    }

    public function updatedata(Request $reqq){
        //dd($reqq);

            $id=$reqq->id;
            $task=$reqq->task;
            $data=Task::find($id);
            $data->save();
            $datas=Task::all();
            return view('task')->with('task',$datas);
            //return redirect()->back();
    }
            


    
}
