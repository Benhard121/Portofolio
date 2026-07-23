<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $unreadMessages = ContactMessage::where('is_read', false)->count();
        return view('admin.dashboard', compact('unreadMessages'));
    }
}