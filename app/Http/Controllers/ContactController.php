<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show($id)
    {
        // Fetch the project from the database using $id
        // Pass the project data to the view
        return view('project', ['project' => $project]);
    }
}
