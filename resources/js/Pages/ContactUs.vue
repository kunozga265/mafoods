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
                                <p itemprop="description" v-text="page.data.contents.contacts_description"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4"
                             v-for="(contact,index) in page.data.contents.contacts"
                             :key="index"
                        >
                            <div class="contact news-detail">
                                <h2 itemprop="headline" v-text="contact.name"></h2>
                                <p v-text="contact.designation"></p>
                                <div class="news-meta">
                                    <ul class="pst-meta">
                                        <li>
                                            <p class="address" v-text="contact.address"></p>
                                        </li>
                                        <li><i class="fa fa-envelope"></i> <span v-text="contact.email"></span></li>
                                        <li><i class="fa fa-phone"></i> <span v-text="contact.phoneNumber1"></span> <span v-if="contact.phoneNumber2">/ {{contact.phoneNumber2}}</span></li>
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
    props:['page'],
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
