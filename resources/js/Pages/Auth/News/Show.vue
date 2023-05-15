<template>
    <admin-layout>
        <template #header>
           News - Article
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item"><a :href="route('admin.news.index')">News</a></li>
            <li class="breadcrumb-item active">{{ news.data.title }}</li>
        </template>
        <template #actions>
            <inertia-link :href="route('admin.news.edit',news.data.slug)" class="btn1">Edit</inertia-link>
            <button @click="submit" class="btn1 btn-error">
                <svg v-show="form.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                </svg>
                Delete
            </button>
<!--            <button data-toggle="modal" data-target="#deleteModal" class="btn1 btn-error">Delete</button>-->
        </template>

<!--        <modal :show="deleteDialog" @close="deleteDialog=false">-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <form id="" class="form-wrap material" @submit.prevent="submit" >
                    <div class="modal-header">
                      <div>Are you sure you want to delete this article?</div>
                    </div>
                    <div class="modal-body">
                        The article {{news.data.title}} will be permanently deleted. Proceed?
                    </div>
                    <div class="modal-footer">
                      <button>
                          <svg v-show="form.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                          </svg>
                          Delete
                      </button>
                    </div>
                </form>
                </div>
                </div>
            </div>
<!--        </modal>-->

        <section class="">
            <div class="">
                <div class="card">
                    <img class="" :src="fileUrl(news.data.photo)" :alt="news.data.title">

                    <div class="blg-dtl style2">

                        <div class="blg-mta">
                            <h2> {{ news.data.title }}</h2>
                            <h1 itemprop="headline"></h1>
                            <ul class="pst-meta">
                                <li><i class="fa fa-calendar-check-o"></i> {{ getDate(news.data.date) }}</li>
                                <li><i class="fa fa-user"></i> Posted By: <a href="#" title="" itemprop="url">{{ news.data.user.name }}</a></li>
                            </ul>
                            <div class="body" v-html="news.data.body"></div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import Modal from "@/Jetstream/Modal";

export default {
    name: "Show",
    props:['news'],
    components: {AdminLayout,Modal},
    data(){
        return{
            deleteDialog:false,
            form: this.$inertia.form({

            }),
        }
    },
    computed:{

    },
    methods:{
        submit() {
            this.form
                .post(this.route('admin.news.delete',this.news.data.slug))
        },
    }
}
</script>

<style scoped>

</style>
