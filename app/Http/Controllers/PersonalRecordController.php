<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PersonalRecord;

class PersonalRecordController extends Controller
{
    public function index()
    {
        return PersonalRecord::all();
    }

}