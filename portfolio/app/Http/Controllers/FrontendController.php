<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function submitContactForm (Request $request)
    {
        $attributes = [
            'full_name' => $request->contact_name,
            'email' => $request->contact_email,
            'message' => $request->contact_message,
        ];

        try {
            \App\Models\Contact::insert($attributes);
            return response()->json([
                'status' => true,
            ]);
        } catch (\Exceptin $e) {
            return response()->json([
                'status' => false
            ]);
        }

    }
}
