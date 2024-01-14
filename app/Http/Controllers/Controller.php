<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Action;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function teacherList() {
        $teachers = Teacher::orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->get();
        $list = [];
        foreach($teachers as $a) {
            $list[$a->id] = $a->last_name . ' ' . $a->first_name;
        }
        return $list;
    }

}
