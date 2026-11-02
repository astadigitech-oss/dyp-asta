<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Services\ApiService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(
        protected ApiService $api
    ) {}

    public function getContact()
    {
        $branches = $this->api->get('/home/branches')['data'];

        return view('mains.contact.index', compact(
            'branches'
        ));
    }

    public function sendMessage(Request $request)
    {
        $back = url()->previous() . '#contact-form';

        // Honeypot: field tersembunyi ini hanya diisi oleh bot
        if ($request->filled('website')) {
            return redirect()->to($back);
        }

        $validator = validator($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'company' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return redirect()->to($back)->withErrors($validator, 'contact')->withInput();
        }

        $data = $validator->validated();

        Mail::create([
            ...$data,
            'company' => $data['company'] ?? '-',
            'date' => now()->toDateString(),
        ]);

        return redirect()->to($back)
            ->with('contact_success', 'Terima kasih, pesan kamu sudah terkirim. Tim kami akan segera menghubungi kamu.');
    }
}
