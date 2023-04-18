<template>
    <app-layout>
        <div>
            <!--====== Preloader ======-->
<!--            <div id="preloader">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="object" id="object_one"></div>
                        <div class="object" id="object_two"></div>
                        <div class="object" id="object_three"></div>
                        <div class="object" id="object_four"></div>
                    </div>
                </div>
            </div>-->

            <!--====== Hero Area Start ======-->
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
<!--                            <img src="assets/img/hero/hero-line.png" alt="Line">-->
                        </div>
                        <div class="hero-line-two">
<!--                            <img src="assets/img/hero/hero-line-2.png" alt="Line">-->
                        </div>
                        <div class="dot-one"></div>
                        <div class="dot-two"></div>
                    </div>
                </div>
<!--                <div class="hero-images">
                    <div class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
                        <img :src="fileUrl('images/hero-img-1.jpg')" alt="Image">
                    </div>
                    <div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
                        <img :src="fileUrl('images/hero-img-2.jpg')" alt="Image">
                    </div>
                    <div class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
                        <img :src="fileUrl('images/hero-img-3.jpg')" alt="Image">
                    </div>
                </div>-->
            </section>
            <!--====== Hero Area End ======-->

            <!--====== Categories Section Start ======-->
            <section class="popular-categories section-gap">
                <div class="container">
                    <div class="categories-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="common-heading">
                                    <span class="tagline">
                                        <i class="fas fa-plus"></i> What to expect
        <!--								<span class="heading-shadow-text">Category</span>-->
                                    </span>
                                    <h2 class="title">Features</h2>
                                </div>
                            </div>
<!--                            <div class="col-auto mb-30 secondary-text">
                                Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.
                            </div>-->
<!--                            <div class="col-auto">
                                <a href="project-1.html" class="main-btn mb-30">Download <i class="far fa-angle-right"></i></a>
                            </div>-->
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
            <!--====== Categories Section End ======-->

            <!--====== About Section Start ======-->
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
<!--                                <div class="author-note wow fadeInUp">
                                    <ul>
                                        <li><i class="far fa-check"></i> Provides support to dietitians, nutritionists, and other professionals</li>
                                        <li><i class="far fa-check"></i> Generate insights for policy makers and association of dietitians in Malawi</li>
                                        <li><i class="far fa-check"></i> Generates list of commonly consumed food data in Malawi and enhance research collaboration</li>
                                        <li><i class="far fa-check"></i> 4.	Increase public awareness of NCDs for increased outreach and capacity building</li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====== About Section End ======-->

            <!--====== Latest News Start ======-->
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
            <!--====== Latest News End ======-->


        </div>
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
