<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class SetTenantDatabase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $tenantDbPath = $user->getTenantDatabasePath();

            if (!file_exists($tenantDbPath)) {
                abort(500, "Base de datos del inquilino no encontrada: {$tenantDbPath}");
            }

            // Configurar dinámicamente la conexión 'tenant'
            Config::set('database.connections.tenant.database', $tenantDbPath);

            // Forzar reconexión para asegurar que se usa el nuevo path
            DB::purge('tenant');
            DB::reconnect('tenant');
        }

        return $next($request);
    }
}
