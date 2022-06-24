<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        if (auth('web')->attempt($data)) {
            return redirect(route('posts.index'));
        }

        return redirect(route('login'))->withErrors(['email' => 'Invalid login data']);
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        auth('web')->logout();

        return redirect(route('posts-list'));
    }
}
