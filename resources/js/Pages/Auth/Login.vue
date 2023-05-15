<template>
    <app-layout>

        <section>
            <div class="block">
                <div class="container auth-card">
                    <div class="title-style2 center-align">
                        <h4 itemprop="headline"><i>Admin</i> Panel</h4>
<!--                        <span>Project Overview</span>-->
                    </div>
                   <form @submit.prevent="submit" class="form">
                       <div>
                           <label for="email">Email</label>
                           <input v-model="form.email" id="email" type="email">
                       </div>
                       <div>
                           <label for="password">Password</label>
                           <input v-model="form.password" id="password" type="password">
                       </div>
                       <div class="action">
                           <button type="submit" class="btn1">Login</button>
                           <div>
                               <a href="#"><span>Forgot password?</span></a>
                           </div>
                       </div>
                   </form>
                </div>
            </div>
        </section>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Login",
    components: {AppLayout},
    data(){
        return{
            form: this.$inertia.form({
                email:"",
                password:"",
            })
        }
    },
    computed:{

    },
    methods:{
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}
</script>

<style scoped>

</style>
