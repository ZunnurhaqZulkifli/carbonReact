<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        $tasks = Tasks::whereIn('tasks.user_id', [1])->get();
        return response()->json($tasks, 200);
    }
}
