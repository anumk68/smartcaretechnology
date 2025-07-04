<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
      $contact = Contact::orderby('created_at', 'desc')->get();
      return view('admin.contact.list', compact('contact'));
   }
}
