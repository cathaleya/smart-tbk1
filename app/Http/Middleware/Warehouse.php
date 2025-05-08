<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\RolePermission;

use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class Warehouse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/');
          }
      
          $roleAllowed = RolePermission::where('permission_id', 3)->pluck('role_id')->toArray();
          $allowed = in_array(Auth::user()->role_id, $roleAllowed);
          if (!$allowed) {
            return abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
          }
        return $next($request);
    }
}
