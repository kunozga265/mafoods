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
<!--        <swiper-->
<!--            :centeredSlides="true"-->
<!--            :autoplay="{-->
<!--                  delay: 2500,-->
<!--                  disableOnInteraction: false,-->
<!--                }"-->
<!--            :pagination="{clickable: true,}"-->
<!--            :navigation="true"-->
<!--            :modules="modules"-->
<!--            class="mySwiper"-->
<!--            :slides-per-view="3"-->
<!--            :space-between="50"-->
<!--            @swiper="onSwiper"-->
<!--            @slideChange="onSlideChange"-->
<!--        >-->
<!--            <swiper-slide>Slide 1</swiper-slide>-->
<!--            <swiper-slide>Slide 2</swiper-slide>-->
<!--            <swiper-slide>Slide 3</swiper-slide>-->
<!--            ...-->
<!--        </swiper>-->
        <!-- Slider main container -->
        <!--        <div class="home-banner">-->
        <!--        <div class="swiper">-->
        <!--            &lt;!&ndash; Additional required wrapper &ndash;&gt;-->
        <!--            <div class="swiper-wrapper">-->
        <!--                &lt;!&ndash; Slides &ndash;&gt;-->
        <!--                <div class="swiper-slide">Slide 1</div>-->
        <!--                <div class="swiper-slide">Slide 2</div>-->
        <!--                <div class="swiper-slide">Slide 3</div>-->
        <!--                ...-->
        <!--            </div>-->
        <!--            &lt;!&ndash; If we need pagination &ndash;&gt;-->
        <!--            <div class="swiper-pagination"></div>-->

        <!--            &lt;!&ndash; If we need navigation buttons &ndash;&gt;-->
        <!--            <div class="swiper-button-prev"></div>-->
        <!--            <div class="swiper-button-next"></div>-->

        <!--            &lt;!&ndash; If we need scrollbar &ndash;&gt;-->
        <!--            <div class="swiper-scrollbar"></div>-->
        <!--        </div>-->
        <!--        </div>-->
        <section>
            <div class="block no-padding">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="feat-img image-placeholder image-overlay"
                             :style="{backgroundImage:`url(${fileUrl('images/overlay.png')})`}">
<!--                             :style="{backgroundImage:`url(${fileUrl(group.image)})`}">-->
                            <div class="feat-cap">
                                <!--                                <i class="flaticon-ribbon"></i>
                                                                <img :src="fileUrl('images/malawi-map.svg')" alt="Map of Malawi">-->
                                <span>{{ page.data.contents.home_section_1_subtitle }}</span>
                                <h4 itemprop="headline">{{ page.data.contents.home_section_1_title }}</h4>
                                <!--                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>-->
                                <div>
                                    <form class="newsletter-frm" :action="route('search')" method="get">
                                        <input name="query" type="text" placeholder="Search for food"/>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!--                            <div class="feat-img-car">
                                                            <div class="fea-img image-placeholder" :style="{backgroundImage:`url(${fileUrl('images/hero-2.jpg')})`}"></div>
                            &lt;!&ndash;                                <div class="fea-img"><img :src="fileUrl('images/hero-2.jpg')" alt="" itemprop="image" /></div>&ndash;&gt;
                            &lt;!&ndash;                                <div class="fea-img"><img :src="fileUrl('images/hero-4.jpg')" alt="" itemprop="image" /></div>&ndash;&gt;
                            &lt;!&ndash;                                <div class="fea-img"><img :src="fileUrl('images/hero-5.jpg')" alt="" itemprop="image" /></div>&ndash;&gt;
                            &lt;!&ndash;                                <div class="fea-img"><img :src="fileUrl('images/hero-6.jpg')" alt="" itemprop="image" /></div>&ndash;&gt;
                            &lt;!&ndash;                                <div class="fea-img"><img :src="fileUrl('images/hero-7.jpg')" alt="" itemprop="image" /></div>&ndash;&gt;
                                                        </div>-->
                        </div><!-- Featured Image -->
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block whitish hgh-opc">
                <div class="fixed-bg" :style="{backgroundImage: `url(${fileUrl('images/hero-img-2.jpg')})`}"></div>
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline">Features</h4>
                                <span>What we are offering you!</span>
                                <!--                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>-->
                            </div>
                            <div class="">
                                <div class="w-full grid grid-cols-1 md:grid-cols-2">
                                    <div class=" ">
                                        <a :href="route('composition.table')" title="" itemprop="url">
                                            <div class="feature">
                                                <div class="image">
                                                    <img :src="fileUrl('images/table-icon.svg')" alt=""
                                                         itemprop="image"/>
                                                </div>
                                                <div class="details">
                                                    <h2 itemprop="headline">Malawi Food Composition Table</h2>
                                                    <p itemprop="description">Explore our database with 42 nutrients
                                                        freely available </p>
                                                    <a :href="route('composition.table')" title="" itemprop="url">Learn
                                                        More <i class="fa fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" ">
                                        <a :href="route('recipe.calculator')" title="" itemprop="url">
                                            <div class="feature">
                                                <div class="image">
                                                    <img :src="fileUrl('images/calculator-icon.svg')" alt=""
                                                         itemprop="image"/>
                                                </div>
                                                <div class="details">
                                                    <h2 itemprop="headline">Recipe Calculator</h2>
                                                    <p itemprop="description">Develop recipes and calculate nutrient
                                                        content of mixed dishes</p>
                                                    <a :href="route('recipe.calculator')" title="" itemprop="url">Learn
                                                        More <i class="fa fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" ">
                                        <a :href="route('downloads')" title="" itemprop="url">
                                            <div class="feature">
                                                <div class="image">
                                                    <img :src="fileUrl('images/epubs-icon.svg')" alt=""
                                                         itemprop="image"/>
                                                </div>
                                                <div class="details">
                                                    <h2 itemprop="headline">Downloads</h2>
                                                    <p itemprop="description">Download the food composition table and
                                                        other relevant resources</p>
                                                    <a :href="route('downloads')" title="" itemprop="url">Learn More <i
                                                        class="fa fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" ">
                                        <a :href="route('project-overview')" title="" itemprop="url">
                                            <div class="feature">
                                                <div class="image">
                                                    <img :src="fileUrl('images/advisory-icon.svg')" alt=""
                                                         itemprop="image"/>
                                                </div>
                                                <div class="details">
                                                    <h2 itemprop="headline">Advisory Group</h2>
                                                    <p itemprop="description">Provide overall guidance and support
                                                        implementation and management of the Malawi Food Composition
                                                        Data Program</p>
                                                    <a :href="route('project-overview')" title="" itemprop="url">Learn
                                                        More <i class="fa fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
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
                                <h4 itemprop="headline">{{ page.data.contents.home_section_2_title }}</h4>
                                <p itemprop="description">{{ page.data.contents.home_section_2_subtitle }}</p>
                            </div>
                            <div class="fun-facts center-align paddlr170">
                                <a :href="route('project-overview')" title="" class="btn1" itemprop="url">Learn More</a>
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
                                <h4 itemprop="headline">Latest News  <i>& Updates</i></h4>
                                <span>Get every single update</span>
                                <!--                                <p itemprop="description">Get every single update</p>-->
                            </div>
                            <div class="paddlr100">
                                <div class="w-full grid grid-cols-1 md:grid-cols-2">
                                    <div class=""
                                         v-for="(news_item,index) in news.data"
                                         :key="index"
                                    >
                                        <div class="news-box style2">
                                            <inertia-link :href="route('news.show',{slug:news_item.slug})">
                                                <div class="news-thumb image-placeholder"
                                                     :style="{backgroundImage: `url(${fileUrl(news_item.photo)})`}">
                                                </div>
                                                <div class="news-detail">
                                                    <h2 itemprop="headline" v-text="news_item.title"></h2>
                                                    <ul class="pst-meta">
                                                        <li><i class="fa fa-user"></i> Posted By: {{
                                                                news_item.user.name
                                                            }}
                                                        </li>
                                                        <li>
                                                            <span class="date"><i class="fa fa-calendar-check-o"></i> {{
                                                                    getDate(news_item.date)
                                                                }}</span>
                                                        </li>
                                                    </ul>
                                                    <div class="news-meta">
                                                    </div>
                                                </div>
                                            </inertia-link>
                                        </div><!-- News Box -->
                                    </div>

                                </div>
                                <div class="col-sm-12 center-align">
                                    <a :href="route('news')" title="" class="btn1-drk" itemprop="url">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
// Import Swiper Vue.js components
import {Swiper, SwiperSlide} from 'swiper/vue';
import {Autoplay, Pagination, Navigation} from 'swiper/modules';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

export default {
    name: "Home",
    props: ['page', 'news', 'group'],

    components: {
        AppLayout,
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log('slide change');
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Autoplay, Pagination, Navigation],
        };
    },

    data() {
        return {
            selectedIngredient: 'Carrot',
            ingredients: []
        }
    },
    methods: {
        addIngredient() {
            this.ingredients.push(this.selectedIngredient)
        },
        removeIngredient(index) {
            this.ingredients.splice(index, 1)
        },
        search() {
            console.log("CLicked!")
            this.route('composition.table')


        }

    }

}
</script>

<style scoped>

</style>
