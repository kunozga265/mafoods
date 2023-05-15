<template>
    <app-layout>
<!--        <div class="pageloader">-->
<!--            <div class="loader">-->
<!--                <div class="loader-inner ball-scale-multiple">-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>&lt;!&ndash; Pageloader &ndash;&gt;-->
        <section>
            <div class="block no-padding">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="feat-img">
                            <div class="feat-cap">
                                <!--                                <i class="flaticon-ribbon"></i>
                                                                <img :src="fileUrl('images/malawi-map.svg')" alt="Map of Malawi">-->
                                <span>A USAID funded Project</span>
                                <h4 itemprop="headline">Malawi Food Data System</h4>
                                <!--                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>-->
                                <div>
                                    <form class="newsletter-frm" :action="route('search')" method="get">
                                        <input name="query" type="text" placeholder="Search" />
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
<!--                                <div class="scl2">
                                    <select>
                                        <option>Choose A Location</option>
                                        <option>Pakistan</option>
                                        <option>United State</option>
                                        <option>India</option>
                                    </select>
                                </div>-->
                            </div>
                            <div class="feat-img-car">
<!--                                <div class="fea-img"><img :src="fileUrl('images/hero-1.jpg')" alt="" itemprop="image" /></div>-->
                                <div class="fea-img"><img :src="fileUrl('images/hero-3.jpg')" alt="" itemprop="image" /></div>
                                <div class="fea-img"><img :src="fileUrl('images/hero-2.jpg')" alt="" itemprop="image" /></div>
                                <div class="fea-img"><img :src="fileUrl('images/hero-4.jpg')" alt="" itemprop="image" /></div>
                                <div class="fea-img"><img :src="fileUrl('images/hero-5.jpg')" alt="" itemprop="image" /></div>
                                <div class="fea-img"><img :src="fileUrl('images/hero-6.jpg')" alt="" itemprop="image" /></div>
                                <div class="fea-img"><img :src="fileUrl('images/hero-7.jpg')" alt="" itemprop="image" /></div>
<!--                                <div class="fea-img"><img src="images/header.jpg" alt="" itemprop="image" /></div>-->
<!--                                <div class="fea-img"><img src="images/hero-img-2.jpg" alt="" itemprop="image" /></div>-->
                            </div>
                        </div><!-- Featured Image -->
                    </div>
                </div>
            </div>
        </section>

<!--        <section>
            <div class="block less-spacing remove-bottom thm-lyr opc85">
                <div class="fixed-bg" style="background: url(images/resource/parallax1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="pri-tl paddlr100">
                                <div class="pri-tl-in">
                                    <h4 itemprop="headline"><i>Rescue High</i> Priorities</h4>
                                    <span>Community Foundation</span>
                                </div>
                                <p itemprop="description">Duis aute irurereprehderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteuraecatl cupidatat non proident. Morbi vehicula a nibh in commodo.</p>
                            </div>
                            <div class="rsc-hg-pri overlap-160">
                                <div class="hig-pri-carousel">
                                    <div class="hig-pri-it">
                                        <div class="row mrg">
                                            <div class="col-md-12 col-sm-12 col-lg-8">
                                                <div class="high-pr-detail" style="background: url(images/resource/high-pri-bg1.jpg) no-repeat scroll center / cover;">
                                                    <div class="tl-in">
                                                        <h2 itemprop="headline"><a href="cause-detail.html" title="" itemprop="url">Clean-Water for rural poor country</a></h2>
                                                        <span class="loc"><i class="fa fa-map-marker"></i> 3895 Sycamore Road Arlington, 97812</span>
                                                    </div>
                                                    <span class="dnt-gl"><span class="price">$3486.00</span> Donation Goal</span>
                                                    <div class="high-pti-bottom">
                                                        <p itemprop="description">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit... <a href="#" title="" itemprop="url">Read More <i class="fa fa-caret-right"></i></a></p>
                                                        <a href="#" title="" class="btn1 dnt-pp" itemprop="url">Donate Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-4">
                                                <div class="high-pri-thumb">
                                                    <img src="images/resource/high-pri1.jpg" alt="" itemprop="url" />
                                                    <img class="sndr-img" src="images/resource/sndr1.jpg" alt="" itemprop="url" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hig-pri-it">
                                        <div class="row mrg">
                                            <div class="col-md-12 col-sm-12 col-lg-8">
                                                <div class="high-pr-detail" style="background: url(images/resource/high-pri-bg2.jpg) no-repeat scroll center / cover;">
                                                    <div class="tl-in">
                                                        <h2 itemprop="headline"><a href="cause-detail.html" title="" itemprop="url">Clean-Water for rural poor country</a></h2>
                                                        <span class="loc"><i class="fa fa-map-marker"></i> 3895 Sycamore Road Arlington, 97812</span>
                                                    </div>
                                                    <span class="dnt-gl"><span class="price">$3486.00</span> Donation Goal</span>
                                                    <div class="high-pti-bottom">
                                                        <p itemprop="description">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit... <a href="#" title="" itemprop="url">Read More <i class="fa fa-caret-right"></i></a></p>
                                                        <a href="#" title="" class="btn1 dnt-pp" itemprop="url">Donate Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-4">
                                                <div class="high-pri-thumb">
                                                    <img src="images/resource/high-pri2.jpg" alt="" itemprop="url" />
                                                    <img class="sndr-img" src="images/resource/sndr2.jpg" alt="" itemprop="url" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->

        <section>
            <div class="block whitish hgh-opc">
                <div class="fixed-bg" style="background: url(images/resource/parallax2.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline">Features</h4>
                                <span>What we are offering you!</span>
<!--                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>-->
                            </div>
                            <div class="services">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="service-box">
                                            <i><img :src="fileUrl('images/table-icon.svg')" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline">Food Composition Table</h2>
                                            <p itemprop="description">Explore our database with 42 nutrients freely available </p>
                                            <a href="#" title="" itemprop="url">Learn More <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="service-box">
                                            <i><img :src="fileUrl('images/calculator-icon.svg')" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline">Recipe Calculator</h2>
                                            <p itemprop="description">Develop recipes and calculate nutrient content of mixed dishes</p>
                                            <a href="#" title="" itemprop="url">Learn More <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="service-box">
                                            <i><img :src="fileUrl('images/epubs-icon.svg')" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline">ePublications</h2>
                                            <p itemprop="description">Download the food composition table v2019</p>
                                            <a href="#" title="" itemprop="url">Learn More <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="service-box">
                                            <i><img :src="fileUrl('images/advisory-icon.svg')" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline">Advisory Group</h2>
                                            <p itemprop="description">Provide overall guidance and support implementation and management of the Malawi Food Composition Data Program</p>
                                            <a href="#" title="" itemprop="url">Learn More <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="btns-grp center-align">
                                    <a href="about.html" title="" class="btn1-drk" itemprop="url">What is MAFOODS?</a>
                                    <a href="become-volunteer.html" title="" class="btn1" itemprop="url">Contact us!</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block blackish opc7">
                <div class="fixed-bg"
                     :style="{backgroundImage:`url(${fileUrl('images/hero-1.jpg')})`}"
                ></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style5 center-align">
<!--                                <span>Community Foundation</span>-->
                                <h4 itemprop="headline">Project Overview </h4>
                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>
                            </div>
                            <div class="fun-facts center-align paddlr170">
                                <a href="#" title="" class="btn1 dnt-pp" itemprop="url">Learn More</a>
                            </div><!-- Fun Facts -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline">Latest <i>News</i></h4>
                                <span>Get every single update</span>
<!--                                <p itemprop="description">Get every single update</p>-->
                            </div>
                            <div class="remove-ext paddlr100">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="news-box style2">
                                            <div class="news-thumb">
                                                <a href="#" title="" itemprop="url"><img :src="fileUrl('images/hero-3.jpg')" alt="" itemprop="image" /></a>
                                            </div>
                                            <div class="news-detail">
                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">LUANAR launches Malawi Food Data System</a></h2>
                                                <ul class="pst-meta">
                                                    <li><i class="fa fa-user"></i> Posted By:<a href="#" title="" itemprop="url">Dalitso Chimwala</a></li>
                                                    <li>
                                                        <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                                    </li>
                                                </ul>
                                                <div class="news-meta">
                                                </div>
                                            </div>
                                        </div><!-- News Box -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="news-box style2">
                                            <div class="news-thumb">
                                                <a href="#" title="" itemprop="url"><img :src="fileUrl('images/hero-6.jpg')" alt="" itemprop="image" /></a>
                                            </div>
                                            <div class="news-detail">
                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">LUANAR launches Malawi Food Data System</a></h2>
                                                <ul class="pst-meta">
                                                    <li><i class="fa fa-user"></i> Posted By:<a href="#" title="" itemprop="url">Dalitso Chimwala</a></li>
                                                    <li>
                                                        <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                                    </li>
                                                </ul>
                                                <div class="news-meta">
                                                </div>
                                            </div>
                                        </div><!-- News Box -->
                                    </div>
                                    <div class="center-align">
                                        <a href="#" title="" class="btn1-drk" itemprop="url">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!--        <div>
                    &lt;!&ndash;====== Preloader ======&ndash;&gt;
        &lt;!&ndash;            <div id="preloader">
                        <div id="loading-center">
                            <div id="loading-center-absolute">
                                <div class="object" id="object_one"></div>
                                <div class="object" id="object_two"></div>
                                <div class="object" id="object_three"></div>
                                <div class="object" id="object_four"></div>
                            </div>
                        </div>
                    </div>&ndash;&gt;

                    &lt;!&ndash;====== Hero Area Start ======&ndash;&gt;
                    <section class="hero-area-one">
                        <div class="hero-text" style="background-image: url('images/hero.jpg')">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-10">
                                        <span class="tagline wow fadeInUp" data-wow-delay="0.3s">USAID funded Project conducted at LUANAR</span>
                                        <h1 class="title wow fadeInUp" data-wow-delay="0.4s">Malawi Food Data System</h1>
                                        <div class="search-widget wow fadeInUp" data-wow-delay="0.5s">
                                            <form class="relative" :action="route('search')" method="get">
                                                <button @click="search" class="absolute right-4 z-10"><i class="fas fa-search"></i></button>
                                                <input name="query" class="relative" placeholder="Search for food"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-shapes">
                                <div class="hero-line-one">
        &lt;!&ndash;                            <img src="assets/img/hero/hero-line.png" alt="Line">&ndash;&gt;
                                </div>
                                <div class="hero-line-two">
        &lt;!&ndash;                            <img src="assets/img/hero/hero-line-2.png" alt="Line">&ndash;&gt;
                                </div>
                                <div class="dot-one"></div>
                                <div class="dot-two"></div>
                            </div>
                        </div>
        &lt;!&ndash;                <div class="hero-images">
                            <div class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
                                <img :src="fileUrl('images/hero-img-1.jpg')" alt="Image">
                            </div>
                            <div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
                                <img :src="fileUrl('images/hero-img-2.jpg')" alt="Image">
                            </div>
                            <div class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
                                <img :src="fileUrl('images/hero-img-3.jpg')" alt="Image">
                            </div>
                        </div>&ndash;&gt;
                    </section>
                    &lt;!&ndash;====== Hero Area End ======&ndash;&gt;

                    &lt;!&ndash;====== Categories Section Start ======&ndash;&gt;
                    <section class="popular-categories section-gap">
                        <div class="container">
                            <div class="categories-header">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <div class="common-heading">
                                            <span class="tagline">
                                                <i class="fas fa-plus"></i> What to expect
                &lt;!&ndash;								<span class="heading-shadow-text">Category</span>&ndash;&gt;
                                            </span>
                                            <h2 class="title">Features</h2>
                                        </div>
                                    </div>
        &lt;!&ndash;                            <div class="col-auto mb-30 secondary-text">
                                        Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.
                                    </div>&ndash;&gt;
        &lt;!&ndash;                            <div class="col-auto">
                                        <a href="project-1.html" class="main-btn mb-30">Download <i class="far fa-angle-right"></i></a>
                                    </div>&ndash;&gt;
                                </div>
                            </div>
                            <div class="row justify-content-center fancy-icon-boxes">
                                <div class="col-md-6 col-sm-10 wow fadeInUp mb-10" data-wow-delay="0s">
                                    <div class="fancy-box-item">
                                        <div class="icon">
                                            <i class="flaticon-salad"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">Food Composition Table</a></h4>
                                            <p>Explore our database with 42 nutrients freely available </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-10 wow fadeInUp mb-10" data-wow-delay="0.2s">
                                    <div class="fancy-box-item">
                                        <div class="icon">
                                            <i class="flaticon-salad"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">Recipe Calculator</a></h4>
                                            <p>Develop recipes and calculate nutrient content of mixed dishes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-10 wow fadeInUp mb-10" data-wow-delay="0.3s">
                                    <div class="fancy-box-item">
                                        <div class="icon">
                                            <i class="flaticon-salad"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">ePublications</a></h4>
                                            <p>Download the food composition table v2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-10 wow fadeInUp mb-10" data-wow-delay="0.5s">
                                    <div class="fancy-box-item">
                                        <div class="icon">
                                             <i class="flaticon-salad"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">Advisory group</a></h4>
                                            <p>Provide overall guidance and support implementation and management of the Malawi Food Composition Data Program</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    &lt;!&ndash;====== Categories Section End ======&ndash;&gt;

                    &lt;!&ndash;====== About Section Start ======&ndash;&gt;
                    <section class="about-section section-gap">
                        <div class="container">
                            <div class="row align-items-center justify-content-lg-start justify-content-center">
                                <div class="col-xl-6 col-lg-7 col-md-9">
                                    <div class="video-post">
                                        <div class="post-thumbnail">
                                            <img :src="fileUrl('images/video-post.jpg')" alt="Thumbnail">
                                            <a href="https://www.youtube.com/watch?v=P_tQOAkZAf0" class="video-popup" data-lity><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-10 offset-xl-1">
                                    <div class="about-text mt-md-70 mb-md-50">
                                        <div class="common-heading mb-30">
                                            <span class="tagline">
                                                <i class="fas fa-plus"></i> who we are
                                            </span>
                                            <h2 class="title">About Project</h2>
                                        </div>
                                        <div class="mb-30">
                                            Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.
                                        </div>
                                        <div>
                                            <a href="project-1.html" class="main-btn mb-30">Learn More <i class="far fa-angle-right"></i></a>
                                        </div>
        &lt;!&ndash;                                <div class="author-note wow fadeInUp">
                                            <ul>
                                                <li><i class="far fa-check"></i> Provides support to dietitians, nutritionists, and other professionals</li>
                                                <li><i class="far fa-check"></i> Generate insights for policy makers and association of dietitians in Malawi</li>
                                                <li><i class="far fa-check"></i> Generates list of commonly consumed food data in Malawi and enhance research collaboration</li>
                                                <li><i class="far fa-check"></i> 4.	Increase public awareness of NCDs for increased outreach and capacity building</li>
                                            </ul>
                                        </div>&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    &lt;!&ndash;====== About Section End ======&ndash;&gt;

                    &lt;!&ndash;====== Latest News Start ======&ndash;&gt;
                    <section class="latest-blog-section section-gap">
                        <div class="container">
                            <div class="common-heading text-center mb-30">
                        <span class="tagline">
                            <i class="fas fa-plus"></i> Latest News and Updates
                        </span>
                                <h2 class="title">Get Every Single Update</h2>
                            </div>
                            <div class="row justify-content-center latest-blog-posts style-one">
                                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="latest-post-box mt-30">
                                        <div class="post-thumb" style="background-image: url('images/hero-img-1.jpg')">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 February 2023</a>
                                            <h6 class="title">
                                                <a href="#">LUANAR launches Malawi Food Data System</a>
                                            </h6>
                                            <a href="#" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="latest-post-box mt-30">
                                        <div class="post-thumb" style="background-image: url('images/hero-img-3.jpg')">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 February 2021</a>
                                            <h6 class="title">
                                                <a href="#">LUANAR launches Malawi Food Data System</a>
                                            </h6>
                                            <a href="#" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    &lt;!&ndash;====== Latest News End ======&ndash;&gt;

                </div>-->
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";


export default {
    name: "Home",
    props:['group'],

    components:{
        AppLayout
    },

    data(){
        return{
            selectedIngredient:'Carrot',
            ingredients:[]
        }
    },
    methods:{
        addIngredient(){
            this.ingredients.push(this.selectedIngredient)
        },
        removeIngredient(index){
            this.ingredients.splice(index,1)
        },
        search(){
            console.log("CLicked!")
            this.route('composition.table')


        }

    }

}
</script>

<style scoped>

</style>
