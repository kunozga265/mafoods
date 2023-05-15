<template>
    <admin-layout>
        <template #header>
            Update Page Content
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item active">Page Content </li>
        </template>


        <section>
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="rviw-tbs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                                    <li><a href="#composition-table" data-toggle="tab">Composition Table</a></li>
                                    <li><a href="#project-overview" data-toggle="tab">Project Overview</a></li>
                                    <li><a href="#faqs" data-toggle="tab">Frequently Asked Questions</a></li>
                                    <li><a href="#contact" data-toggle="tab">Contact</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <form >

                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="composition-table">
                                      "composition-
                                    </div>
                                    <div class="tab-pane fade" id="project-overview">
                                        "project-
                                    </div>
                                    <div class="tab-pane fade" id="faqs">
                                      "faqs"
                                    </div>   <div class="tab-pane fade" id="contact">
                                      "contact"
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
    name: "Dashboard",
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
