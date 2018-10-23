<?php

/**
 * Created by PhpStorm.
 * User: XT-001
 * Date: 2018/10/22
 * Time: 11:22
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        return view("admin.index");
    }
}