<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\File;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $templatePath = database_path('template.sqlite');
        $tenantPath = storage_path($user->db_path);

        if (!File::exists($tenantPath)) {
            File::ensureDirectoryExists(dirname($tenantPath));
            File::copy($templatePath, $tenantPath);
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $tenantPath = storage_path($user->db_path);

        if (File::exists($tenantPath)) {
            File::delete($tenantPath);
        }
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
