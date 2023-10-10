<?php

namespace App\Http\Controllers;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new ContactForm instance and fill it with the validated data
        
        ContactForm::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]);
        // You can also add any success message or redirect here
        return redirect()->back()->with('success', 'Form submitted successfully!');
    } 

    public function showAllData()
    {
        
        $contactForms = ContactForm::all();
        
        return view('contact', compact('contactForms'));
    }

    // public function destroy(ContactForm $contactForm)
    // {  
    //     $contactForm->forceDelete();
    //     $contactForms = ContactForm::all();
    //     return view('admin/contact', compact('contactForms'));
       
    // }
  
}
