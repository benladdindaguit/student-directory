
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // The role column already exists in the users table.
        // Nothing else needs to be added.
    }

    public function down(): void
    {
        // Nothing to reverse because this migration added nothing.
    }
};
