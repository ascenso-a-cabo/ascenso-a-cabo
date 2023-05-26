<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Contracts\Session\Session as SessionInterface;
use Illuminate\Contracts\Session\SessionHandlerInterface;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    protected function authenticated(Request $request, $user)
    {
        // Cerrar todas las sesiones anteriores del usuario
        $this->closeOtherSessions($request->session(), $user->id);
    }

    protected function closeOtherSessions(SessionInterface $session, $userId)
    {
        $sessionId = $session->getId();

        // Obtiene todas las sesiones del usuario
        $sessions = DB::table('sessions')
            ->where('user_id', $userId)
            ->where('id', '<>', $sessionId)
            ->get();

        // Elimina las sesiones anteriores del usuario
        foreach ($sessions as $session) {
            $sessionHandler = resolve(SessionHandlerInterface::class);
            $sessionHandler->destroy($session->id);
        }
    }
}
