<template>
    <admin-layout>
        <template #header>
            News
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item active">News</li>
        </template>
        <template #actions>
            <inertia-link :href="route('admin.news.create')" class="btn1">New</inertia-link>
        </template>

        <section>
            <div class="card"
                 v-for="(news_item,index) in news.data"
                 :key="index"
            >
                <inertia-link :href="route('admin.news.show',news_item.slug)">
                    <div class="news-box style2">
                        <div class="news-thumb image-placeholder" :style="{backgroundImage: `url(${fileUrl(news_item.photo)})`}">
                        </div>
                        <div class="news-detail">
                            <h2 itemprop="headline">{{ news_item.title }}</h2>
                            <ul class="pst-meta">
                                <li>
                                    <i class="fa fa-user"></i>
                                    Posted By:<a href="#" title="" itemprop="url">
                                    {{ news_item.user.name }}</a>
                                </li>
                                <li>
                                    <span class="date"><i class="fa fa-calendar-check-o"></i> {{ getDate(news_item.date) }}</span>
                                </li>
                            </ul>
                            <div class="news-meta">
                            </div>
                        </div>
                    </div>
                </inertia-link>
            </div>

        </section>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
    name: "Index",
    props:['news'],
    components: {AdminLayout},
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
