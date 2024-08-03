<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{backgroundImage:`url(${fileUrl('images/overlay.png')})`}"></div>
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
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        <div class=""
                             v-for="(news_item,index) in news.data"
                             :key="index"
                        >
                            <div class="news-box style2">
                                <inertia-link :href="route('news.show',{slug:news_item.slug})">
                                    <div class="news-thumb image-placeholder" :style="{backgroundImage: `url(${fileUrl(news_item.photo)})`}">
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline" v-text="news_item.title"></h2>
                                        <ul class="pst-meta">
                                            <li><i class="fa fa-user"></i> Posted By: {{ news_item.user.name }}</li>
                                            <li>
                                                <span class="date"><i class="fa fa-calendar-check-o"></i> {{ getDate(news_item.date) }}</span>
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
                                <li class="prev-pg"><a :href="news.links.prev" title="" itemprop="url"><i class="fa fa-angle-double-left"></i></a></li>

                                <li class="next-pg"><a :href="news.links.next" title="" itemprop="url"><i class="fa fa-angle-double-right"></i></a></li>
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
    props:['news'],
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
