<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">My Recipes</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">My Recipes</li>
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
                                <h4 itemprop="headline"><i>Recipe</i> List</h4>
                                <p itemprop="description">A list of recipes you have generated with our calculator.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-4"
                                 v-for="(recipe,index) in recipes.data"
                                 :key="index"
                            >
                                <div class="contact news-detail">
                                    <h2 itemprop="headline">{{recipe.name}} Recipe</h2>
<!--                                    <p v-text="contact.designation"></p>-->
                                    <div class="news-meta">
                                        <ul class="pst-meta">
                                            <li><i class="fa fa-download"></i> <a :href="route('recipes.print',{'id': recipe.id })">Download Recipe</a></li>
                                        </ul>
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
    name: "ContactUs",
    props:['page','recipes'],
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
