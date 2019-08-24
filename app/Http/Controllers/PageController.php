<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home',['name' => 'Home Page',
        'status_count' => 30
        ]);
    }

    public function Bugs()
    {
        return view('pages.bugs',
                    ['name' => 'Bugs List',
                     'status_count' => 30
                    ]
        );
    }

    public function Status()
    {
        return view('pages.status',
                    ['name' => 'Status Report',
                     'status_count' => 30
                    ]
        );
    }

}
