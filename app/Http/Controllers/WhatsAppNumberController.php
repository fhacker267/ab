<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatsAppNumber;

class WhatsAppNumberController extends Controller
{
    public function index()
    {
        $whatsAppNumbers = WhatsAppNumber::all();
        return view('admin.whatsappnumbers.index', compact('whatsAppNumbers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|numeric',
        ]);

        WhatsAppNumber::create([
            'number' => $request->number,
        ]);

        return redirect()->route('admin.whatsappnumbers.index')
            ->with('success', 'WhatsApp number added successfully.');
    }

    public function show($id)
    {
        $whatsAppNumber = WhatsAppNumber::findOrFail($id);
        return view('whatsappnumbers.show', compact('whatsAppNumber'));
    }

    public function edit($id)
    {
        $whatsAppNumber = WhatsAppNumber::findOrFail($id);
        return view('admin.whatsappnumbers.edit', compact('whatsAppNumber'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'number' => 'required|numeric',
        ]);

        $whatsAppNumber = WhatsAppNumber::findOrFail($id);
        $whatsAppNumber->update([
            'number' => $request->number,
        ]);

        return redirect()->route('admin.whatsappnumbers.index')
            ->with('success', 'WhatsApp number updated successfully.');
    }

    // Other methods for delete, etc.
}
