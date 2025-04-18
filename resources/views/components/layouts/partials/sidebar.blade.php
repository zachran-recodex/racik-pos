<flux:sidebar sticky class="w-20 border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">

    <a href="{{ route('dashboard') }}" class="w-full flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground" wire:navigate>
        <x-app-logo-icon class="size-5 fill-current text-white dark:text-black" />
    </a>

    <flux:navlist.item :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
        <flux:icon.home />
    </flux:navlist.item>

    <flux:tooltip content="Manage Orders" position="right">
        <flux:navlist.item :href="route('dashboard.order')" :current="request()->routeIs('dashboard.order')" wire:navigate>
            <flux:icon.shopping-bag />
        </flux:navlist.item>
    </flux:tooltip>

    <flux:tooltip content="Manage Categories" position="right">
        <flux:navlist.item :href="route('dashboard.category')" :current="request()->routeIs('dashboard.category')" wire:navigate>
            <flux:icon.briefcase />
        </flux:navlist.item>
    </flux:tooltip>

<!--
    @if(auth()->user()->hasRole(['Super Admin', 'Admin']))
    <flux:navlist variant="outline">
        <flux:navlist.group expandable heading="Administrator" class="grid">
            <flux:navlist.item icon="home" :href="route('dashboard.administrator.overview')" :current="request()->routeIs('dashboard.administrator.overview')" wire:navigate>Overview</flux:navlist.item>

            @can('manage users')
            <flux:navlist.item icon="users" :href="route('dashboard.administrator.user')" :current="request()->routeIs('dashboard.administrator.user')" wire:navigate>Manage Users</flux:navlist.item>
            @endcan

            @can('manage roles')
            <flux:navlist.item icon="shield-check" :href="route('dashboard.administrator.role')" :current="request()->routeIs('dashboard.administrator.role')" wire:navigate>Manage Roles</flux:navlist.item>
            @endcan

            @can('manage permissions')
            <flux:navlist.item icon="key" :href="route('dashboard.administrator.permission')" :current="request()->routeIs('dashboard.administrator.permission')" wire:navigate>Manage Permissions</flux:navlist.item>
            @endcan
        </flux:navlist.group>
    </flux:navlist>
    @endif
-->
</flux:sidebar>
