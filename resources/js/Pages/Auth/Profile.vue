<template>
    <admin-layout>
        <template #header>
            Profile Information
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item active">Profile</li>
        </template>

        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form @submit.prevent="submit"  class="form">
                            <div class="row">

                                <div class="col-md-12">
                                    <label for="name">Full Name</label>
                                    <input v-model="form.name" id="name" type="text" required>
                                     <div class="error-message" v-if="$page.props.errors.submit">{{$page.props.errors.submit.name }}</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input v-model="form.email" id="email" type="email" required>
                                     <div class="error-message" v-if="$page.props.errors.submit">{{$page.props.errors.submit.email }}</div>
                                </div>

                            </div>
                            <div class="action">
                                <button type="submit" class="btn1">
                                      <svg v-show="profileUpdateLoading" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                    Update Profile
                                </button>
                                <span v-show="profileUpdated">Information Updated!</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <form @submit.prevent="updatePassword"  class="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="current_password">Current Password</label>
                                    <input v-model="form.current_password" id="current_password" type="password" required>
                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.current_password }}</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="password">New Password</label>
                                    <input v-model="form.password" id="password" type="password" required>
                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password }}</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input v-model="form.password_confirmation" id="password_confirmation" type="password" required>
                                    <div class="error-message" v-if="$page.props.errors.updatePassword">{{$page.props.errors.updatePassword.password_confirmation }}</div>
                                </div>
                            </div>
                            <div class="action">
                                <button type="submit" class="btn1">
                                      <svg v-show="passwordUpdateLoading" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                    Update Password
                                </button>
                                <span v-show="passwordUpdated">Password Updated!</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <form @submit.prevent="addNew"  class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="user_name">Name</label>
                                    <input v-model="user_name" id="user_name" type="text" required>
                                    <div class="error-message" v-if="form.errors.name">{{form.errors.name }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="user_email">Email</label>
                                    <input v-model="user_email" id="user_email" type="email" required>
                                    <div class="error-message" v-if="form.errors.email">{{form.errors.email }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="user_password">Password</label>
                                    <input v-model="user_password" id="user_password" type="password" required>
                                    <div class="error-message" v-if="form.errors.password">{{form.errors.password }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="user_password_confirmation">Password Confirmation</label>
                                    <input v-model="user_password_confirmation" id="user_password_confirmation" type="password" required>
                                    <div class="error-message" v-if="form.errors.password_confirmation">{{form.errors.password_confirmation }}</div>
                                </div>
                            </div>
                            <div class="action">
                                <button type="submit" class="btn1">
                                      <svg v-show="addNewLoading" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                    Add New User
                                </button>
<!--                                <span v-show="userAdded">User added!</span>-->
                            </div>
                        </form>
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
import ActionMessage from "@/Jetstream/ActionMessage";
import validationErrors from "@/Jetstream/ValidationErrors";

export default {
    name: "Profile",
    components: {AdminLayout,ActionMessage,validationErrors},
    data(){
        return{
            form: this.$inertia.form({
                name:this.$page.props.auth.name,
                email: this.$page.props.auth.email,
                current_password:"",
                password_confirmation:"",
                password:""
            }),
            profileUpdated:false,
            profileUpdateLoading:false,
            passwordUpdated:false,
            passwordUpdateLoading:false,
            userAdded:false,
            addNewLoading:false,
            editor: ClassicEditor,
            editorConfig: {
                toolbar:['bold','italic','|','blockquote','link','|','bulletedList','numberedList','|', 'imageUpload','|','undo','redo'],
                extraPlugins:[uploader]
            },
            user_name:"",
            user_email: "",
            user_password:"",
            user_password_confirmation:"",
        }
    },
    computed:{
    },
    methods:{
        submit() {
            this.profileUpdateLoading=true
            this.form
                .transform(data => ({
                    ... data,
                }))
                .put(this.route('user-profile-information.update'),{
                    onSuccess: () => this.profileUpdated = true,
                    onFinish: () => this.profileUpdateLoading=false
                })
        },
        updatePassword() {
            this.passwordUpdateLoading=true
            this.form
                .transform(data => ({
                    ... data,
                }))
                .put(this.route('user-password.update'),{
                    onSuccess: () => {
                        this.passwordUpdated = true
                        this.form.reset('current_password')
                        this.form.reset('password_confirmation')
                        this.form.reset('password')
                    },
                    onFinish: () => {
                         this.passwordUpdateLoading=false
                    },
                })
        },
        addNew() {
            this.addNewLoading=true
            this.form
                .transform(data => ({
                    ... data,
                    name: this.user_name,
                    email: this.user_email,
                    password: this.user_password,
                    password_confirmation: this.user_password_confirmation,
                }))
                .post(this.route('user.store'),{
                    onSuccess: () => {
                        this.userAdded = true
                        this.user_name=""
                        this.user_email=""
                        this.user_password=""
                        this.user_password_confirmation=""
                    },
                    onFinish: () => {
                         this.addNewLoading=false
                    },
                })
        },
    }
}
</script>

<style scoped>

</style>
