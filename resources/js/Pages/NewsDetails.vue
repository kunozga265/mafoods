<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <!-- <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl(news.data.photo)})` }"></div> -->
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline" v-text="news.data.title"></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item"><a :href="route('news')">News</a></li>
                        <li class="breadcrumb-item active">News Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-9">
                                   <img class="" :src="fileUrl(news.data.photo)" :alt="news.data.title">
                                    <div class="blg-dtl style2">
                                        <div class="blg-mta">
<!--                                            <h2> {{ // news.data.title }}</h2>-->
                                            <h1 itemprop="headline"></h1>
                                            <ul class="pst-meta">
                                                <li><i class="fa fa-calendar-check-o"></i> {{ getDate(news.data.date) }}</li>
                                                <li><i class="fa fa-user"></i> Posted By: <a href="#" title="" itemprop="url">{{ news.data.user.name }}</a></li>
                                            </ul>
                                            <div class="body" v-html="news.data.body"></div>
                                        </div>
                                    </div>
<!--                                    <div class="shar-tag2">
                                        <div class="tagclouds">
                                            <span>Tags:</span>
                                            <a href="#" title="" itemprop="url">Welfair Project</a>,
                                            <a href="#" title="" itemprop="url">Charity</a>,
                                            <a href="#" title="" itemprop="url">Nature</a>,
                                            <a href="#" title="" itemprop="url">Kids</a>,
                                            <a href="#" title="" itemprop="url">Nonprofit</a>
                                        </div>
                                        <div class="share">
                                            <span>Share It:</span>
                                            <a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div> Share And Tags -->
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-3">
                                    <div class="sidebar">
                                        <div class="widget">
                                            <h4 class="widget-title2" itemprop="headline">Latest News</h4>
                                            <div class="widget-data">
                                                <div class="rcnt-pst"
                                                     v-for="(news_item,index) in popular_news.data"
                                                     :key="index"
                                                >
                                                    <div class="news-thumb image-placeholder" :style="{backgroundImage: `url(${fileUrl(news_item.photo)})`}"></div>
<!--                                                    <a :href="route('news.show',news_item.slug)" title="" itemprop="url"><img :src="fileUrl(news_item.photo)" alt="" itemprop="image" /></a>-->
                                                    <div class="rcnt-pst-inf">
                                                        <h2 itemprop="headline"><a :href="route('news.show',news_item.slug)" title="" itemprop="url" v-text="news_item.title"></a></h2>
                                                        <span class="date"><i class="fa fa-calendar-check-o"></i> {{ getDate(news_item.date) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Sidebar -->
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

export default {
    name: "NewsDetails",
    props:['news','popular_news'],
    components: {AppLayout},
    data(){
        return{

        }
    },
    computed:{

    },
    methods:{

    }
}
</script>

<style scoped>

</style>
