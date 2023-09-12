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
                    <div class="">
                        <div class="">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>Get</i> In Touch</h4>
                                <span>Feel free to reach out to us</span>
                                <p itemprop="description" v-text="page.data.contents.contacts_description"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-4"
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
                                            <li><i class="fa fa-envelope"></i> <span v-text="contact.email1"></span></li>
                                            <li v-if="contact.email2"><i class="fa fa-envelope"></i> <span v-text="contact.email2"></span></li>
                                            <li v-if="contact.phoneNumber1"><i class="fa fa-phone"></i> <span v-text="contact.phoneNumber1"></span> <span v-if="contact.phoneNumber2">/ {{contact.phoneNumber2}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block contact-form">
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="">
                                <h4 itemprop="headline">Do You Have Any Question?</h4>
                                <p itemprop="description">Send us a message on any enquiry you may have</p>
                                <form @submit.prevent="submit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input v-model="form.name" type="text" placeholder="Full Name"  required/>
                                        </div>
                                        <div class="col-md-6">
                                            <input v-model="form.email" type="email" placeholder="Email" required />
                                        </div>
                                        <div class="col-md-12">
                                            <textarea v-model="form.message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn1-drk" :disabled="form.processing">
                                                <svg v-show="form.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                </svg>
                                                Send Message
                                            </button>
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
            form:this.$inertia.form({
                'name' : "",
                'email' : "",
                'message' : "",
            })
        }
    },
    computed:{

    },
    methods:{
        submit(){
            this.form
                .transform(data => ({
                    ... data,
                }))
                .post(this.route('contact-us.send'), {
                    onFinish: () => {
                        this.form.reset('name')
                        this.form.reset('email')
                        this.form.reset('message')
                    },
                })
        }
    }
}
</script>

<style scoped>

</style>
