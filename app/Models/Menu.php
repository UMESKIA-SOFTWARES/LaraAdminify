<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public static function getCommonMenuItems()
    {
        return [
            [
                'text' => 'Control Panel', // Section for managing the website
                'icon' => 'feather icon-monitor',
                'url' => '/laradmin/controlpanel',
            ],
            [
                'text' => 'Apps', // Section for installing and managing apps
                'icon' => 'feather icon-grid',
                'submenu' => [
                    [
                        'text' => 'Install App',
                        'url' => '/laradmin/app/install',
                    ],
                    [
                        'text' => 'Installed Apps',
                        'url' => '/laradmin/app/list',
                    ],
                ],
            ],
            [
                'text' => 'Themes', // Section for installing and managing themes
                'icon' => 'feather icon-layers',
                'submenu' => [
                    [
                        'text' => 'Install Theme',
                        'url' => '/laradmin/theme/install',
                    ],
                    [
                        'text' => 'Installed Themes',
                        'url' => '/laradmin/theme/list',
                    ],
                ],
            ],
            [
                'text' => 'Plugins', // Section for managing plugins
                'icon' => 'feather icon-box',
                'submenu' => [
                    [
                        'text' => 'Add Plugin',
                        'url' => '/laradmin/plugin/add',
                    ],
                    [
                        'text' => 'Installed Plugins',
                        'url' => '/laradmin/plugin/list',
                    ],
                ],
            ],
            [
                'text' => 'User Management', // Section for managing users and roles
                'icon' => 'feather icon-users',
                'submenu' => [
                    [
                        'text' => 'Add Role',
                        'url' => '/laradmin/role/add',
                    ],
                    [
                        'text' => 'Roles',
                        'url' => '/laradmin/role/list',
                    ],
                    [
                        'text' => 'Add User',
                        'url' => '/laradmin/user/add',
                    ],
                    [
                        'text' => 'View Users',
                        'url' => '/laradmin/user/list',
                    ],
                ],
            ],
            [
                'text' => 'Settings', // Section for general settings
                'icon' => 'feather icon-settings',
                'submenu' => [
                    [
                        'text' => 'General Settings',
                        'url' => '/laradmin/settings/general',
                    ],
                    [
                        'text' => 'Laraadminify Version',
                        'url' => '/laradmin/settings/version',
                    ],

                ],
            ],
            [
                'text' => 'Logs', // Section for viewing system logs
                'icon' => 'feather icon-list',
                'url' => '/laradmin/logs',
            ],
            [
                'text' => 'Backup', // Section for managing backups
                'icon' => 'feather icon-download-cloud',
                'url' => '/laradmin/backup',
            ],
        ];
    }
}
