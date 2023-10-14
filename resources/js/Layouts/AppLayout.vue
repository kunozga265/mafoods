<template>
    <div>
<!--        <div class="pageloader">-->
<!--            <div class="loader">-->
<!--                <div class="loader-inner ball-scale-multiple">-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>&lt;!&ndash; Pageloader &ndash;&gt;-->

        <main>
            <div class="web-lyut app-layout">
                <header class="stick style2">
                    <div class="topbar1 style2">
                        <div class="container">
                            <div v-if="$page.props.auth">
                                <ul class="tb-br-cnt1 mr-20">
                                    <li><strong><i class="fa fa-user"></i> Logged in:</strong> <a href="#" title="" itemprop="url">{{$page.props.auth.data.name}}</a></li>
                                </ul>



                                <div @click="logout" class="tb-br-scl2 cursor-pointer">
                                    <strong><i class="fa fa-arrow-circle-left"></i> Logout</strong>
                                </div>

                                <div v-show="$page.props.auth.data.role[0].name === 'administrator'" class="tb-br-scl2 cursor-pointer">
                                    <strong><inertia-link :href="route('admin.dashboard')">Admin Panel</inertia-link></strong>
                                </div>

                                <div v-show="$page.props.auth != null" class="tb-br-scl2 cursor-pointer">
                                    <strong><inertia-link :href="route('recipes')">My Recipes</inertia-link></strong>
                                </div>

                            </div>
                            <div v-else>
                                <ul class="tb-br-cnt1">
                                    <li class="socials">
                                        <span class="">FOLLOW US AT:</span>
                                        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://web.facebook.com/mafoods2020" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><i class="fa fa-envelope-square"></i> <a href="mailto:mafoods@luanar.ac.mw" title="" itemprop="url">mafoods@luanar.ac.mw</a></li>
                                    <li><i class="fa fa-phone"></i> <span>Call Us At:</span> <a href="tel:2651277222">+265 12 77 222</a></li>
                                </ul>
                                <!--                            <a class="btn2 dnt-pp" href="#" title="" itemprop="url">Action Button</a>-->
                                <div class="tb-br-scl2">
                                    <inertia-link :href="route('login')">
                                        <strong><i class="fa fa-arrow-circle-right"></i> Login</strong>
                                    </inertia-link>
                                </div>
                            </div>
                        </div>
                    </div><!-- Topbar 1 -->
                    <div class="menu-sec1">
                        <div class="justify-center flex items-center">
                            <div class="logo">
                                <h1 itemprop="headline"><a :href="route('home')" title="" itemprop="url">Mafoods<!--<img :src="fileUrl('images/mafoods-logo.png')" alt="" itemprop="image" />--></a></h1>
                            </div><!-- Logo -->
                            <nav>
                                <div>
                                    <ul>
                                        <li><a :href="route('home')" title="" itemprop="url">Home</a></li>
                                        <li><a :href="route('composition.table')" title="" itemprop="url">Composition Table</a></li>
                                        <li><a :href="route('recipe.calculator')" title="" itemprop="url">Recipe Calculator</a></li>
                                        <li><a :href="route('news')" title="" itemprop="url">News</a></li>
                                        <li><a :href="route('partners')" title="" itemprop="url">Partners</a></li>
                                        <li><a :href="route('downloads')" title="" itemprop="url">Downloads</a></li>
                                        <li class="menu-item-has-children"><a href="#" title="" itemprop="url">About Us</a>
                                            <ul>
                                                <li><a :href="route('contact-us')" title="" itemprop="url">Contact Us</a></li>
                                                <li><a :href="route('project-overview')" title="" itemprop="url">Project Overview</a></li>
<!--                                                <li><a :href="route('home')" title="" itemprop="url">Project Overview</a></li>-->
                                                <li><a :href="route('faqs')" title="" itemprop="url">Frequently Asked Questions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav><!-- Nav -->
                        </div>
                    </div><!-- Menu Sec1 -->
                </header><!-- Header -->

                <div class="rsp-hdr">
                    <div class="rs-lg-br flex items-center">
                        <div class="logo">
                            <h1 itemprop="headline"><a :href="route('home')" title="" itemprop="url">Mafoods<!--<img :src="fileUrl('images/mafoods-logo.png')" alt="" itemprop="image" />--></a></h1>
                        </div>
                        <span class="rs-mu-btn"><i class="fa fa-list"></i></span>
                    </div>
                    <div class="rs-mnu">
                        <span class="rs-mnu-cls-btn"><i class="fa fa-close"></i></span>
                        <ul>
                            <li><a :href="route('home')" title="" itemprop="url">Home</a></li>
                            <li><a :href="route('composition.table')" title="" itemprop="url">Composition Table</a></li>
                            <li><a :href="route('recipe.calculator')" title="" itemprop="url">Recipe Calculator</a></li>
                            <li><a :href="route('news')" title="" itemprop="url">News</a></li>
                            <li><a :href="route('partners')" title="" itemprop="url">Partners</a></li>
                            <li><a :href="route('downloads')" title="" itemprop="url">Downloads</a></li>
                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">About Us</a>
                                <ul>
                                    <li><a :href="route('contact-us')" title="" itemprop="url">Contact Us</a></li>
                                    <li><a :href="route('project-overview')" title="" itemprop="url">Project Overview</a></li>
                                    <li><a :href="route('faqs')" title="" itemprop="url">Frequently Asked Questions</a></li>
                                </ul>
                            </li>
                            <li><a :href="route('login')" title="" itemprop="url">Login</a></li>
                        </ul>
                    </div><!-- Responsive Menu -->
                </div><!-- Responsive Header -->

                <slot></slot>

<!--                <section>-->
<!--                    <div class="block less-spacing">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 col-sm-12 col-lg-12">-->
<!--                                    <div class="sponsors">-->
<!--                                        <div class="sponsor-box">-->
<!--                                            <a href="#" title="" itemprop="url"><img :src="fileUrl('images/usaid-logo.png')" alt="" itemprop="image" /></a>-->
<!--                                        </div>-->
<!--                                        <div class="sponsor-box">-->
<!--                                            <a href="#" title="" itemprop="url"><img :src="fileUrl('images/luanar-logo.png')" alt="" itemprop="image" /></a>-->
<!--                                        </div>-->
<!--                                    </div>&lt;!&ndash; Sponsor &ndash;&gt;-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->

                <footer>
                    <div class="block dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="footer-data remove-ext65">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-5">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="widget">
                                                            <h4 itemprop="headline" class="widget-title1">About <i>MAFOODS</i></h4>
                                                            <div class="widget-data">
                                                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>
                                                            </div>
                                                        </div><!-- Widget -->
                                                    </div>
<!--                                                    <div class="col-md-6 col-sm-6 col-lg-5">
                                                        <div class="widget">
                                                            <h4 itemprop="headline" class="widget-title1">Recent Blog</h4>
                                                            <div class="widget-data">
                                                                <div class="rcnt-pst">
                                                                    <a href="blog-detail.html" title="" itemprop="url"><img src="images/resource/rcnt-img1.jpg" alt="" itemprop="image" /></a>
                                                                    <div class="rcnt-pst-inf">
                                                                        <h2 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">New Life For The Abandoned</a></h2>
                                                                        <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                                                    </div>
                                                                </div>
                                                                <div class="rcnt-pst">
                                                                    <a href="blog-detail.html" title="" itemprop="url"><img src="images/resource/rcnt-img2.jpg" alt="" itemprop="image" /></a>
                                                                    <div class="rcnt-pst-inf">
                                                                        <h2 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Love poor People. Share Fund</a></h2>
                                                                        <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>&lt;!&ndash; Widget &ndash;&gt;
                                                    </div>-->
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-7">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="widget">
                                                            <h4 itemprop="headline" class="widget-title1">Useful Links</h4>
                                                            <div class="widget-data">
                                                                <ul>
                                                                    <li><a :href="route('home')" title="" itemprop="url">Home</a></li>
                                                                    <li><a :href="route('composition.table')" title="" itemprop="url">Composition Table</a></li>
                                                                    <li><a :href="route('recipe.calculator')" title="" itemprop="url">Recipe Calculator</a></li>
                                                                    <li><a :href="route('news')" title="" itemprop="url">News</a></li>
                                                                    <li><a :href="route('project-overview')" title="" itemprop="url">Project Overview</a></li>
                                                                    <li><a :href="route('faqs')" title="" itemprop="url">FAQs</a></li>
                                                                    <li><a :href="route('contact-us')" title="" itemprop="url">Contact</a></li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- Widget -->
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="widget">
                                                            <h4 itemprop="headline" class="widget-title1">Contact Us</h4>
                                                            <div class="widget-data">
                                                                <ul class="cnt-lst">
                                                                    <li class="addr">
                                                                        <i class="fas fa-map"></i>
                                                                        <strong>Address:</strong>
                                                                        <span>Bunda College Campus, P. O. Box 219, Lilongwe</span>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Call:</strong>
                                                                        <a href="tel:2651277222">+265 12 77 222</a>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Email:</strong>
                                                                        <a href="mail:mafoods@luanar.ac.mw" title="" itemprop="url">mafoods@luanar.ac.mw</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- Widget -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Footer Data -->
                                </div>
                            </div>
                        </div>
                    </div>
                </footer><!-- Footer -->

                <div class="bottom-bar">
                    <div class="container">
                        <div class="copyright">
                            <p itemprop="description">Copyright &copy; 2023 - <a href="#" title="" itemprop="url">MAFOODS.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div><!-- Bottom Bar -->

                <div class="hdr-srch">
                    <span class="srch-cls"><i class="fa fa-close"></i></span>
                    <form>
                        <input type="text" placeholder="Search Here..." />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- Header Search -->

            </div>
            <toast/>
        </main>
    </div>
</template>

<script>
import Toast from "@/Components/Toast";

export default {
    name: "AppLayout",
    components:{
      Toast
    },
    methods: {
        logout() {
            this.$inertia.post(route('user.logout'));
        },
    }
}
</script>

<style scoped>

</style>
