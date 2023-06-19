<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::insert([
            [
                'name' => 'Overview',
                'reference' => '/app/home',
                'icon' => 'DashboardRounded',
            ],
            [
                'name' => 'Pending Requests',
                'reference' => '/app/pending-requests',
                'icon' => 'PendingActionsRounded',
            ],
            [
                'name' => 'Ongoing Requests',
                'reference' => '/app/ongoing-requests',
                'icon' => 'FilePresentRounded',
            ],
            [
                'name' => 'Storage Request',
                'reference' => '/app/create-request/storage',
                'icon' => 'InboxRounded',
            ],
            [
                'name' => 'Withdrawal Request',
                'reference' => '/app/create-request/withdrawal',
                'icon' => 'UnarchiveRounded',
            ],
            [
                'name' => 'Return Request',
                'reference' => '/app/create-request/return',
                'icon' => 'ArchiveRounded',
            ],
            [
                'name' => 'Disposal Request',
                'reference' => '/app/create-request/disposal',
                'icon' => 'FolderDeleteRounded',
            ],
            [
                'name' => 'Inventory',
                'reference' => '/app/inventory',
                'icon' => 'Inventory',
            ],
            [
                'name' => 'Offices',
                'reference' => '/app/offices',
                'icon' => 'LanRounded',
            ],
            [
                'name' => 'Roles',
                'reference' => '/app/roles',
                'icon' => 'WorkRounded',
            ],
            [
                'name' => 'Modules',
                'reference' => '/app/modules',
                'icon' => 'ViewModuleRounded',
            ],
            [
                'name' => 'Users',
                'reference' => '/app/users',
                'icon' => 'SupervisedUserCircleRounded',
            ],
            [
                'name' => 'Maps',
                'reference' => '/app/maps',
                'icon' => 'DirectionsRounded',
            ],
            [
                'name' => 'Glossary',
                'reference' => '/app/glossary',
                'icon' => 'CollectionsBookmarkRounded',
            ],
        ]);
    }
}
