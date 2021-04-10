<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

  /**
   * Displays phpinfo.
   *
   * @return \Illuminate\Http\Response
   */
    public function phpinfo()
    {
        // $this->authorize('show-admin-menu');

        return view('admin.phpinfo');
    }
}
