<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">News & Updates</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">News</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block pb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="news-box style2">
                                <inertia-link :href="route('news.show',{slug:'article'})">
                                    <div class="news-thumb">
                                        <img :src="fileUrl('images/hero-3.jpg')" alt="" itemprop="image" />
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline">LUANAR launches Malawi Food Data System</h2>
                                        <ul class="pst-meta">
                                            <li><i class="fa fa-user"></i> Posted By:<a href="#" title="" itemprop="url">Dalitso Chimwala</a></li>
                                            <li>
                                                <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                            </li>
                                        </ul>
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </inertia-link>
                            </div><!-- News Box -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="news-box style2">
                                <inertia-link :href="route('news.show',{slug:'article'})">
                                    <div class="news-thumb">
                                        <img :src="fileUrl('images/hero-6.jpg')" alt="" itemprop="image" />
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline">LUANAR launches Malawi Food Data System</h2>
                                        <ul class="pst-meta">
                                            <li><i class="fa fa-user"></i> Posted By:<a href="#" title="" itemprop="url">Dalitso Chimwala</a></li>
                                            <li>
                                                <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                            </li>
                                        </ul>
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </inertia-link>
                            </div><!-- News Box -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="news-box style2">
                                <inertia-link :href="route('news.show',{slug:'article'})">
                                    <div class="news-thumb">
                                        <img :src="fileUrl('images/hero-2.jpg')" alt="" itemprop="image" />
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline">LUANAR launches Malawi Food Data System</h2>
                                        <ul class="pst-meta">
                                            <li><i class="fa fa-user"></i> Posted By:<a href="#" title="" itemprop="url">Dalitso Chimwala</a></li>
                                            <li>
                                                <span class="date"><i class="fa fa-calendar-check-o"></i> November 25,2016</span>
                                            </li>
                                        </ul>
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </inertia-link>
                            </div><!-- News Box -->
                        </div>
                        <div class="pagination">
                            <ul>
                                <li class="prev-pg"><a href="#" title="" itemprop="url"><i class="fa fa-angle-double-left"></i></a></li>

                                <li class="next-pg"><a href="#" title="" itemprop="url"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div><!-- Pagination -->
                    </div>
                </div>
            </div>
        </section>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "News",
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
