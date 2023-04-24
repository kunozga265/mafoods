<template>
    <div>

        <!-- Page Content -->
        <main class="relative">
            <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <!--====== Header Start ======-->
            <header class="site-header sticky-header transparent-header topbar-transparent">
                <div class="navbar-wrapper">
                    <div class="">
                        <div class="navbar-inner justify-content-between">

                            <div class="flex" >
                                <div class="navbar-extra d-flex align-items-center">
                                    <!--                                <a href="events.html" class="main-btn nav-btn d-none d-sm-inline-block">
                                                                        Donate Now <i class="far fa-arrow-right"></i>
                                                                    </a>-->

                                </div>
                                <div><a :href="route('home')"><img :src="fileUrl('images/usaid-logo.png')" alt="USAID"></a></div>
                                <div><a :href="route('home')"><img :src="fileUrl('images/luanar-logo.png')" alt="LUANAR"></a></div>

<!--                                <div class="d-flex align-items-center">
                                    <div><a :href="route('home')"><img :src="fileUrl('images/luanar-logo.png')" alt="LUANAR"></a></div>
                                    <div class="dot">.</div>
                                    <div class="title">Ma Foods</div>
                                </div>-->
                            </div>
                            <div class="nav-menu">
                                <ul>
                                    <li class="current">
                                        <a :href="route('home')">Home</a>
                                    </li>
                                    <li>
                                        <a :href="route('home')">Composition Table</a>
                                    </li>
                                    <li>
                                        <a :href="route('home')">Recipe Calculator</a>
                                    </li>
                                    <li>
                                        <a :href="route('home')">About Us</a>
                                        <ul class="submenu">
                                            <li><a href="#">Project Details</a></li>
                                            <li><a href="#">Frequently Asked Questions</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a :href="route('home')">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="nav-toggler">
                                <span></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="mobile-menu-panel">
                    <div class="panel-logo">
<!--                        <a :href="route('home')">Ma Foods</a>-->
                    </div>
                    <ul class="panel-menu">
                        <li class="current">
                            <a :href="route('home')">Home</a>
                        </li>
                        <li>
                            <a :href="route('home')">Composition Table</a>
                        </li>
                        <li>
                            <a :href="route('home')">Recipe Calculator</a>
                        </li>
                        <li>
                            <a :href="route('home')">About Us</a>
                            <ul class="submenu">
                                <li><a href="#">Project Details</a></li>
                                <li><a href="#">Frequently Asked Questions</a></li>
                            </ul>
                        </li>
                        <li>
                            <a :href="route('home')">Contact</a>
                        </li>
                    </ul>
                    <a href="#" class="panel-close">
                        <i class="fal fa-times"></i>
                    </a>
                </div>
            </header>
            <!--====== Header End ======-->

            <slot></slot>

            <!--====== Footer Start ======-->
            <footer class="site-footer">
                <div class="footer-content-area">
                    <div class="container">
                        <div class="copyright-area">
                            <p class="copyright-text">© 2023 <a href="#">Mafoods</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--====== Footer End ======-->
        </main>

<!--        <nav class="bg-white ">
            <div class=" ">
                <div class="uk-position-z-index" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="#">
                            <img :src="fileUrl('images/weblog.png')" alt="">
                        </a>
                        &lt;!&ndash;                        <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
                                                    <li class="uk-active"><a href="#">Home</a></li>
                                                </ul>&ndash;&gt;
                    </div>
&lt;!&ndash;                    <div class="uk-navbar-right">&ndash;&gt;
&lt;!&ndash;                        <div>&ndash;&gt;
&lt;!&ndash;                            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>&ndash;&gt;
&lt;!&ndash;                            <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">&ndash;&gt;
&lt;!&ndash;                                <form class="uk-search uk-search-navbar uk-width-1-1">&ndash;&gt;
&lt;!&ndash;                                    <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>&ndash;&gt;
&lt;!&ndash;                                </form>&ndash;&gt;
&lt;!&ndash;                            </div>&ndash;&gt;
&lt;!&ndash;                        </div>&ndash;&gt;
&lt;!&ndash;                    </div>&ndash;&gt;
                </div>
            </div>
        </nav>-->
    </div>
</template>

<script>
export default {
    name: "AppLayout"
}
</script>

<style scoped>

</style>
