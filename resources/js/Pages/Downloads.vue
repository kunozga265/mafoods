<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{backgroundImage:`url(${fileUrl('images/overlay.png')})`}"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Downloads</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">Downloads</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block whitish hgh-opc downloads-section">
<!--                <div class="fixed-bg" style="background: url(images/resource/parallax2.jpg);"></div>-->
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>Available</i> Files</h4>
<!--                                <span>Project Overview</span>-->
                                <p itemprop="description" v-text="page.data.contents.downloads_description"></p>
                            </div>
                            <div class="row">
                                <div class="masonry">
                                    <div class="col-md-6 col-sm-6 col-lg-4 flt-itm"
                                         v-for="(download, index) in downloads.data"
                                         :key="index"
                                    >
                                        <div class="gallery-box" :style="{backgroundImage:`url(${fileUrl(download.image)})`}">
<!--                                            <img :src="download.image" alt="" itemprop="image" />-->
                                            <div class="gallery-info">
                                                <h2 itemprop="headline" v-text="download.name"></h2>
<!--                                                <span class="cate" v-text="download.description"></span>-->
                                                <a :href="fileUrl(download.file)" target="_blank" class="btn1-drk">Download</a>
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


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Downloads",
    props:['page','downloads'],
    components: {AppLayout},
    data(){
        return{

        }
    },
}
</script>

<style scoped>

</style>
