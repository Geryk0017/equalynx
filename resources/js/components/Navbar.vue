<template>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        
        <div class="drawer-content">
            <!-- Navbar -->
            <nav class="navbar w-full bg-base-300">
                <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <PanelLeftOpen />
                </label>
                <div class="px-4">Navbar Title</div>
            </nav>

            <!-- PAGE CONTENT GOES HERE -->
            <main class="p-4">
                <slot />
            </main>
        </div>

        <!-- Sidebar drawer -->
        <div class="drawer-side is-drawer-close:overflow-visible">
            <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
                <div class="mb-5">
                    <img :src="logo" alt="logo" class="is-drawer-close:w-14 is-drawer-open:w-64 object-contain" />
                </div>

                <ul class="menu w-full grow">
                    <li>
                        <Link href="/" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="User Management">
                            <Users />
                            <span class="is-drawer-close:hidden">User Management</span>
                        </Link>
                    </li>

                    <li>
                        <Link href="/inventory" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Inventory">
                            <Package />
                            <span class="is-drawer-close:hidden">Inventory</span>
                        </Link>
                    </li>

                    <li>
                        <Link href="/notifications" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Notification">
                            <Bell />
                            <span class="is-drawer-close:hidden">Notification</span>
                        </Link>
                    </li>

                    <li>
                        <Link href="/activity-logs" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Activity Logs">
                            <History />
                            <span class="is-drawer-close:hidden">Activity Logs</span>
                        </Link>
                    </li>

                    <li>
                        <Link href="/settings" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Settings">
                            <Settings2 />
                            <span class="is-drawer-close:hidden">Settings</span>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import { PanelLeftOpen, Users, Settings2, Package, Bell, History } from 'lucide-vue-next';
import logo from '../asset/image/logo.png'
import { Link } from '@inertiajs/vue3';
</script>
