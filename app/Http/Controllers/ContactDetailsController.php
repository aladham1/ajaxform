<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactDetailsController extends Controller
{

    public function index(Request $request)
    {

        $articles = ContactDetails::when($request->has("name"), function ($q) use ($request) {
            return $q->where("first_name", "like", "%" . $request->get("name") . "%");
        })->paginate(5);
        if ($request->ajax()) {
            return view('article-pagination ', ['contacts' => $articles]);
        }
        return view('index ', ['contacts' => $articles]);

//        $contacts = ContactDetails::paginate(20);
//        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('contact/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|min:5',
            'email_address' => 'required|email',
            'mobile_phone' => 'required'
        ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email_address = $request->input('email_address');
        $mobile_phone = $request->input('mobile_phone');
        $home_phone = $request->input('home_phone');
        $comments = $request->input('comments');

        ContactDetails::create(
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email_address' => $email_address,
                'mobile_phone' => $mobile_phone,
                'home_phone' => $home_phone,
                'comments' => $comments
            ]
        );

        return redirect('/')->with('success', 'Contact has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ContactDetails $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ContactDetails $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactDetails $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactDetails $contactDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContactDetails $contactDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactDetails $contactDetails)
    {
        //
    }

    public function showContacts(Request $request)
    {
        $contacts = ContactDetails::all();
        if ($request->keyword != '') {
            $contacts = ContactDetails::where('first_name', 'LIKE', '%' . $request->keyword . '%', 'OR', 'last_name', 'LIKE', '%' . $request->keyword)->get();
        }

        return response()->json([
            'contacts' => $contacts
        ]);

    }

    protected function validatePost(?ContactDetails $contact = null)
    {
        $contact ??= new ContactDetails();

        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email_address' => ['required', 'email'],
        ]);
        dd(__METHOD__, 'test');
        return $attributes;
    }
}
