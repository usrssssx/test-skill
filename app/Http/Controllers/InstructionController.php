<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class InstructionController extends Controller
{
    public function index(): Response
    {
        return $this->page(null);
    }

    public function show(string $slug): Response
    {
        abort_unless(array_key_exists($slug, config('instructions')), 404);

        return $this->page($slug);
    }

    private function page(?string $slug): Response
    {
        return response()->view('instructions', [
            'instructions' => config('instructions'),
            'slug' => $slug,
            'article' => $slug === null ? null : config('instructions')[$slug],
        ])->header('Content-Security-Policy', "default-src 'self'; style-src 'self' 'unsafe-inline'; frame-ancestors 'none'; base-uri 'self'; form-action 'none'")
            ->header('X-Content-Type-Options', 'nosniff')
            ->header('Referrer-Policy', 'no-referrer');
    }
}
