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
                                    <li class="active"><a @click="form.page = 'home'" href="#home" data-toggle="tab">Home</a></li>
                                    <li><a @click="form.page = 'composition_table'" href="#composition_table" data-toggle="tab">Composition Table</a></li>
                                    <li><a @click="form.page = 'project_overview'" href="#project_overview" data-toggle="tab">Project Overview</a></li>
                                    <li><a @click="form.page = 'faqs'" href="#faqs" data-toggle="tab">Frequently Asked Questions</a></li>
                                    <li><a @click="form.page = 'contacts'" href="#contacts" data-toggle="tab">Contact</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <form  class="form">
                                            <div class="">
                                                <div>
                                                    <label for="home_section_1_title">Section #1: Title</label>
                                                    <input v-model="form.home_section_1_title" id="home_section_1_title" type="text" required>
<!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.current_password }}</div>-->
                                                </div>
                                                <div>
                                                    <label for="home_section_1_subtitle">Section #1: Subtitle</label>
                                                    <input v-model="form.home_section_1_subtitle" id="home_section_1_subtitle" type="text" required>
<!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                                <div>
                                                    <label for="home_section_2_title">Section #2: Title</label>
                                                    <input v-model="form.home_section_2_title" id="home_section_2_title" type="text" required>
<!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.current_password }}</div>-->
                                                </div>
                                                <div>
                                                    <label for="home_section_2_subtitle">Section #2: Subtitle</label>
                                                    <input v-model="form.home_section_2_subtitle" id="home_section_2_subtitle" type="text" required>
<!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="composition_table">
                                        <form class="form">
                                            <label>Description</label>
                                            <ckeditor :editor="editor" v-model="form.composition_table_description" :config="editorConfig"></ckeditor>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="project_overview">
                                        <form class="form">
                                            <div>
                                                <label for="project_overview_description">Description</label>
                                                <input v-model="form.project_overview_description" id="project_overview_description" type="text" required>
                                                <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                            </div>
                                            <div>
                                                <label>Main Text</label>
                                                <ckeditor :editor="editor" v-model="form.project_overview_main_text" :config="editorConfig"></ckeditor>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="faqs">
                                        <form class="form">
                                            <div
                                                v-for="(faq,index) in form.faqs"
                                                :key="index"
                                                class="mb-40"
                                            >
                                                <div>
                                                    <button type="button" @click="removeFaq(index)"  class="remove" ><i class="fa fa-close"></i></button>
                                                    <label class="question">Question #{{index+1}}</label>
                                                    <input v-model="faq.question" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                                <div>
                                                    <label>Answer</label>
                                                    <ckeditor :editor="editor" v-model="faq.answer" :config="editorConfig"></ckeditor>
                                                </div>
                                            </div>
                                            <button @click="addFaq" type="submit" class="btn1-drk">
                                                Add
                                            </button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="contacts">
                                        <form class="form">
                                            <div class="mb-40">
                                                <label for="contacts_description">Description</label>
                                                <input v-model="form.contacts_description" id="contacts_description" type="text" required>
                                                <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                            </div>
                                            <div
                                                v-for="(contact,index) in form.contacts"
                                                :key="index"
                                                class="row mb-40"
                                            >
                                                <div class="col-sm-12">
                                                    <button type="button" @click="removeContact(index)"  class="remove" ><i class="fa fa-close"></i></button>
                                                    <label class="contact-number">Contact #{{index+1}}</label>
                                                </div>
                                                 <div class="col-md-6">
                                                    <label>Name</label>
                                                    <input v-model="contact.name" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Designation</label>
                                                    <input v-model="contact.designation" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                               <div class="col-md-12">
                                                    <label>Address</label>
                                                    <input v-model="contact.address" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email - 1</label>
                                                    <input v-model="contact.email1" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email - 2</label>
                                                    <input v-model="contact.email2" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Phone Number - 1</label>
                                                    <input v-model="contact.phoneNumber1" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                               <div class="col-md-6">
                                                    <label>Phone Number - 2</label>
                                                    <input v-model="contact.phoneNumber2" type="text" required>
                                                    <!--                                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>-->
                                                </div>
                                            </div>
                                            <button @click="addContact" type="submit" class="btn1-drk">
                                                Add
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button @click="update" type="submit" class="btn1">
                                        <svg v-show="form.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                        Update
                                    </button>
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
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import uploader from "@/Plugins/uploader";

export default {
    name: "PageContent",
    props:["home", "composition_table", "project_overview", "faqs", "contacts"],
    components: {AdminLayout},
    data(){
        return{
            form:this.$inertia.form({
                //home
                home_section_1_title:this.home.data.contents.home_section_1_title,
                home_section_1_subtitle:this.home.data.contents.home_section_1_subtitle,
                home_section_2_title:this.home.data.contents.home_section_2_title,
                home_section_2_subtitle:this.home.data.contents.home_section_2_subtitle,

                //composition table
                composition_table_description:this.composition_table.data.contents.composition_table_description,

                //project overview
                project_overview_description:this.project_overview.data.contents.project_overview_description,
                project_overview_main_text:this.project_overview.data.contents.project_overview_main_text,
                faqs:this.faqs.data.contents,
                contacts:this.contacts.data.contents.contacts,
                contacts_description:this.contacts.data.contents.contacts_description,
                page:'home',
            }),
            editor: ClassicEditor,
            editorConfig: {
                toolbar:['bold','italic','|','blockquote','link','|','bulletedList','numberedList','|','undo','redo'],
            },

        }
    },
    computed:{

    },
    methods:{
        update(){
            this.form
                .transform(data => ({
                    ... data,
                }))
                .post(this.route('admin.page-content.update'))
        },
        addContact(){
            this.form.contacts.push({
                name:"",
                designation:"",
                address:"",
                email:"",
                phoneNumber1:"",
                phoneNumber2:"",
            })
        },
        removeContact(index){
            this.form.contacts.splice(index,1)
        },
        addFaq(){
            this.form.faqs.push({
                question:"",
                answer:"",
            })
        },
        removeFaq(index){
            this.form.faqs.splice(index,1)
        },
    }
}
</script>

<style scoped>

</style>
