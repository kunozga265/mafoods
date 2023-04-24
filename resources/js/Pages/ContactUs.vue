<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Contact Us</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>Get</i> In Touch</h4>
                                <span>Feel free to reach out to us</span>
                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="contact news-detail">
                                <h2 itemprop="headline">Dr Agnes Mwangwela</h2>
                                <p>Senior Scientist <br>MAFOODS</p>
                                <div class="news-meta">
                                    <ul class="pst-meta">
                                        <li>
                                            <p class="address">Lilongwe University of Agriculture and Natural Resources <br>
                                                P. O. Box 219 <br>
                                                Lilongwe.
                                            </p>
                                        </li>
                                        <li><i class="fa fa-envelope"></i> amwangwela@luanar.ac.mw</li>
                                        <li><i class="fa fa-phone"></i> +265 888 878 777</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="contact news-detail">
                                <h2 itemprop="headline">Ms. Dalitso Chimwala</h2>
                                <p>Food Composition Data Compiler <br>MAFOODS</p>
                                <div class="news-meta">
                                    <ul class="pst-meta">
                                        <li>
                                            <p class="address">Lilongwe University of Agriculture and Natural Resources <br>
                                                P. O. Box 219 <br>
                                                Lilongwe.
                                            </p>
                                        </li>
                                        <li><i class="fa fa-envelope"></i> dchimwala@luanar.ac.mw</li>
                                        <li><i class="fa fa-phone"></i> +265 882 856 052 / +265 997 255 086</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="contact news-detail">
                                <h2 itemprop="headline">Dr Felix Pensulo Phiri</h2>
                                <p>Director of Nutrition Department of Nutrition, HIV and AIDS</p>
                                <div class="news-meta">
                                    <ul class="pst-meta">
                                        <li>
                                            <p class="address">Department of Nutrition, HIV and AIDS <br>
                                                Ministry of Health <br>
                                                Private Bag B401 <br>
                                                Lilongwe.

                                            </p>
                                        </li>
                                        <li><i class="fa fa-envelope"></i> felixphiri8@gmail.com</li>
                                        <li><i class="fa fa-phone"></i> +265 888 959 900 / +265 999 953 747</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cnt-frm">
                                <h4 itemprop="headline">Do You Have Any Question?</h4>
                                <p itemprop="description">Send us a message on any enquiry you may have</p>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" placeholder="Full Name" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="email" placeholder="Email" />
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn1">Send Message</button>
                                        </div>
                                    </div>
                                </form>
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
    name: "ContactUs",
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
