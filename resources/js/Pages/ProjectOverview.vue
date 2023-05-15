<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Project Overview</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block whitish hgh-opc">
                <div class="fixed-bg" style="background: url(images/resource/parallax2.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>About</i> MAFOODS</h4>
                                <span>Project Overview</span>
                                <p itemprop="description" v-text="page.data.contents.project_overview_description"></p>
                            </div>
                            <div class="p" v-html="page.data.contents.project_overview_main_text"></div>
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
    name: "ProjectOverview",
    props:['page'],
    components: {AppLayout},
    data(){
        return{

        }
    },
}
</script>

<style scoped>

</style>
