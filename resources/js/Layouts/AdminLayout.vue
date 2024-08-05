<template>
    <div class="web-lyut admin-layout">
        <header class="stick style2">
            <!--            <div class="topbar1 style2">-->
            <!--                <div class="">-->
            <!--                    <div class="">-->
            <!--                        <ul class="tb-br-cnt1 mr-20">-->
            <!--                            <li><strong><i class="fa fa-user"></i> Logged in:</strong> <a href="#" title="" itemprop="url">{{$page.props.auth.data.name}}</a></li>-->
            <!--                        </ul>-->

            <!--                        <div @click="logout" class="tb-br-scl2 cursor-pointer">-->
            <!--                            <strong><i class="fa fa-arrow-circle-left"></i> Logout</strong>-->
            <!--                        </div>-->

            <!--                        <div class="tb-br-scl2 cursor-pointer">-->
            <!--                            <strong><inertia-link :href="route('home')">Home</inertia-link></strong>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>&lt;!&ndash; Topbar 1 &ndash;&gt;-->
            <div class="">
                <div class="nav_bar">
                    <nav class="bg-gray system-nav">
                        <!-- Aside -->
                        <aside :class="{'extend': open}" class="bg-gray-50 rounded dark:bg-gray-800 sidebar"
                               aria-label="Sidebar">
                            <!--                            <div class="overflow-y-auto ">-->
                            <div class="header">
                                <div class="p-6 flex justify-end navigation-buttons float-right">
                                    <button @click="open = ! open"
                                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="black" fill="none" viewBox="0 0 24 24">
                                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-center pt-2 py-4" v-if="$page.props.auth">
                                    <div class="flex py-4 px-8 items-center tracking-normal">
                                        <div class="w-16 h-16 bg-gray-100 rounded-full mr-4"></div>
                                        <div class="text-left">
                                            <div class="text-base">{{$page.props.auth.data.name}}</div>
                                            <div class="text-sm">{{$page.props.auth.data.email}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="">
                                <li>
                                    <a :href="route('admin.dashboard')" class="">
                                        <!--                                            <i class="fa fa-dashboard"></i>-->
                                        <div class="ml-3">Dashboard</div>
                                    </a>
                                </li>
                                <li>
                                    <a :href="route('admin.news.index')" class="">
                                        <!--                                            <i class="fa fa-book"></i>-->
                                        <div class="ml-3">News</div>
                                    </a>
                                </li>
                                <li>
                                    <a :href="route('admin.composition-table')" class="">
                                        <!--                                            <i class="fa fa-table"></i>-->
                                        <div class="ml-3">Composition Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a :href="route('admin.page-content')" class="">
                                        <!--                                            <i class="fa fa-book"></i>-->
                                        <div class="ml-3">Page Content</div>
                                    </a>
                                </li>
                                <li>
                                    <a :href="route('admin.profile')" class="">
                                        <!--                                            <i class="fa fa-user"></i>-->
                                        <div class="ml-3">Profile</div>
                                    </a>
                                </li>

                            </ul>
                            <!--                            </div>-->
                        </aside>
                    </nav>
                    <div class=" p-12 flex items-center">
                        <button @click="open = ! open"
                                class="mt-2 mr-8 inline-flex items-center justify-center rounded-md text-gray-600 hover:text-gray-500 bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <i class="fa fa-bars"></i>
                            <!--                        <svg v-else class="h-6 w-6" stroke="black" fill="none" viewBox="0 0 24 24">-->
                            <!--                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
                            <!--                        </svg>-->
                        </button>
                        <div class="logo">
                            <h1 itemprop=""><a :href="route('admin.dashboard')" title="" itemprop="url">Admin Panel
                                <!--<img :src="fileUrl('images/mafoods-logo.png')" alt="" itemprop="image" />--></a>
                            </h1>
                            <div class="text-base">Malawi Food Data System</div>
                            <!--                        <h1 itemprop="headline"><a :href="route('admin.dashboard')" title="" itemprop="url"><img :src="fileUrl('images/mafoods-logo.png')" alt="" itemprop="image" /></a></h1>-->
                        </div><!-- Logo -->

                    </div>

                </div>
            </div><!-- Menu Sec1 -->
        </header><!-- Header -->

        <div class="">


            <div class="system-content">
                <!-- Page Heading -->

                <div class="page-top style2 blackish opc7">
                    <div class="">
                        <div class="page-title">
                            <div class="pg-tl">
                                <h1 itemprop="headline">
                                    <slot name="header"></slot>
                                </h1>
                            </div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a :href="route('admin.dashboard')">Dashboard</a></li>
                                <slot name="breadcrumbs"></slot>
                            </ol>
                        </div>
                        <div class="actions">
                            <slot name="actions"></slot>
                        </div>
                    </div>
                </div><!-- Page Top -->

                <!-- Page Content -->
                <main>

                    <slot></slot>
                </main>
            </div>


            <!-- Modal Portal -->
            <portal-target name="modal" multiple>
            </portal-target>
        </div>

        <toast/>

    </div>
</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetBanner from '@/Jetstream/Banner'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
import Toast from "@/Components/Toast";

export default {
    components: {
        JetApplicationMark,
        JetBanner,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,
        Toast
    },

    data() {
        return {
            showingNavigationDropdown: false,
            open: false,
        }
    },

    methods: {
        logout() {
            this.$inertia.post(route('user.logout'));
        },
    }
}
</script>
