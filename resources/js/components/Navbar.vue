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
                        <NavbarButton href="/" :icon="Users" label="User Management" />
                    </li>

                    <li>
                        <NavbarButton href="/inventory" :icon="Package" label="Inventory" />
                    </li>

                    <li>
                        <NavbarButton href="/notifications" :icon="Bell" label="Notifications" />
                    </li>

                    <li>
                        <NavbarButton href="/activity-logs" :icon="History" label="Activity Logs" />
                    </li>

                    <li>
                        <NavbarButton href="/transactions" :icon="ArrowLeftRight" label="Transactions" />
                    </li>

                    <li>
                        <NavbarButton href="/dashboard" :icon="LayoutDashboard" label="Dashboard" />
                    </li>

                    <li>
                        <NavbarButton href="/settings" :icon="Settings2" label="Settings" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import { PanelLeftOpen, Users, Settings2, Package, Bell, History, LayoutDashboard, ArrowLeftRight } from 'lucide-vue-next';
import logo from '../asset/image/logo.png'
import NavbarButton from './Buttons/NavbarButton.vue';
</script>
