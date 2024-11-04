<?php

namespace Sontus\Contractform\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Sontus\Contractform\Models\ContractForm;

class ContractFormController extends Controller
{


    public function index()
    {
       return  "Hello";
    }
    /**
     * Show the form for creating a new resource.
     *
     //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contractform::create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required |max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required |max:255',
            'message' => 'required',
        ]);

        $contractform = new ContractForm();

        $contractform->name = $request->name;
        $contractform->email = $request->email;
        $contractform->subject = $request->subject;
        $contractform->message = $request->message;
        $contractform->save();

        return redirect()->back()->with('success', 'Message sent successfully');

    }

}
