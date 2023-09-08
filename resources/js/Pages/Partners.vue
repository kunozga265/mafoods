<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Our Partners</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">Partners</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block whitish hgh-opc">
<!--                <div class="fixed-bg" style="background: url(images/resource/parallax2.jpg);"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>Our</i> Partners</h4>
<!--                                <span>Project Overview</span>-->
                                <p itemprop="description" v-text="page.data.contents.partners_description"></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 "
                                     v-for="(partner, index) in page.data.contents.partners"
                                     :key="index"
                                >
                                    <div class="partners">
                                        <img :src="fileUrl(partner.image)" :alt="partner.name">
<!--                                        <p v-text="partner.name"></p>-->
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
    name: "Partners",
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
