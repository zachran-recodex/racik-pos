<?php

namespace Database\Seeders;

use App\Models\Central\CentralUser;
use App\Models\Central\SystemNotification;
use App\Models\Central\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CentralSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create main super admin
        $superAdmin = CentralUser::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('admin123'),
            'role' => 'super_admin',
            'email_verified_at' => now(),
        ]);

        // Create support user
        $supportUser = CentralUser::create([
            'name' => 'Support Agent',
            'email' => 'support@mail.com',
            'password' => Hash::make('admin123'),
            'role' => 'support',
            'email_verified_at' => now(),
        ]);

        // Create default tenant (for central system)
        $centralTenant = Tenant::create([
            'uuid' => Str::uuid(),
            'name' => 'Central System',
            'slug' => 'central',
            'domain' => 'central.mail.com',
            'status' => 'active',
            'subscription_plan' => 'enterprise',
            'subscription_expires_at' => now()->addYears(10),
            'settings' => json_encode([
                'theme' => 'light',
                'timezone' => 'Asia/Jakarta',
                'locale' => 'id',
            ]),
        ]);

        // Create sample tenants
        $tenant1 = Tenant::create([
            'uuid' => Str::uuid(),
            'name' => 'Acme Corporation',
            'slug' => 'acme',
            'domain' => 'acme.mail.com',
            'subdomain' => 'acme',
            'database_name' => 'tenant_acme',
            'status' => 'active',
            'subscription_plan' => 'premium',
            'subscription_expires_at' => now()->addYear(),
            'settings' => json_encode([
                'theme' => 'dark',
                'timezone' => 'Asia/Jakarta',
                'locale' => 'id',
            ]),
        ]);

        $tenant2 = Tenant::create([
            'uuid' => Str::uuid(),
            'name' => 'Beta Solutions',
            'slug' => 'beta',
            'domain' => 'beta-solutions.com',
            'subdomain' => 'beta',
            'database_name' => 'tenant_beta',
            'status' => 'active',
            'subscription_plan' => 'basic',
            'subscription_expires_at' => now()->addMonths(6),
            'settings' => json_encode([
                'theme' => 'light',
                'timezone' => 'Asia/Jakarta',
                'locale' => 'id',
            ]),
        ]);

        // Create system notifications
        SystemNotification::create([
            'title' => 'System Update Available',
            'message' => 'A new version of the system is available for installation.',
            'type' => 'info',
        ]);

        SystemNotification::create([
            'title' => 'Maintenance Scheduled',
            'message' => 'System maintenance is scheduled for next weekend.',
            'type' => 'warning',
            'tenant_id' => $centralTenant->id,
        ]);

        SystemNotification::create([
            'title' => 'Welcome to Our Platform',
            'message' => 'Thank you for joining our platform. We hope you enjoy our services!',
            'type' => 'success',
            'tenant_id' => $tenant1->id,
            'is_read' => true,
        ]);

        SystemNotification::create([
            'title' => 'Subscription Renewal',
            'message' => 'Your subscription will renew in 15 days.',
            'type' => 'info',
            'tenant_id' => $tenant2->id,
        ]);

        $this->command->info('Central system data seeded successfully!');
        $this->command->info('Super Admin Credentials: superadmin@mail.com / admin123');
        $this->command->info('Support User Credentials: support@mail.com / admin123');
    }
}
