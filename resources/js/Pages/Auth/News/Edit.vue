<template>
    <admin-layout>
        <template #header>
            News - Article Edit
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item"><a :href="route('admin.news.index')">News</a></li>
            <li class="breadcrumb-item"><a :href="route('admin.news.show',news.data.slug)">{{news.data.title}}</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </template>


        <section>
            <div class="card">
                <form @submit.prevent="submit"  class="form">
                    <div class="row">
                        <div v-if="form.photo !==''" class="col-md-12">
                            <img class="w-full" :src="fileUrl(form.photo)" alt="News Photo">
                        </div>
                        <div class="col-md-12">
                            <label >Upload Photo</label>
                            <input type="file" id="photo" @input="photoUpload($event.target.files[0])"/>
                        </div>
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input v-model="form.title" id="title" type="text" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date">Date</label>
                            <input v-model="date" id="date" type="date" required>
                        </div>
                        <div class="col-md-12">
                            <label >Body</label>
                            <ckeditor :editor="editor" v-model="form.body" :config="editorConfig"></ckeditor>
                        </div>

                    </div>
                    <div class="action">
                        <button type="submit" class="btn1">Update</button>
                    </div>

                </form>
            </div>
        </section>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import uploader from "@/Plugins/uploader";


export default {
    name: "Edit",
    props:['news'],
    components: {AdminLayout},
    data(){
        return{
            form: this.$inertia.form({
                title:this.news.data.title,
                body: this.news.data.body,
                photo:this.news.data.photo
            }),
            date:this.news.data.date_ISO,
            editor: ClassicEditor,
            editorConfig: {
                toolbar:['bold','italic','|','blockquote','link','|','bulletedList','numberedList','|', 'imageUpload','|','undo','redo'],
                extraPlugins:[uploader]
            }
        }
    },
    computed:{
        timestamp(){
            return this.date?(new Date(this.date).getTime())/1000:null
        }

    },
    methods:{
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                    date:this.timestamp
                }))
                .post(this.route('admin.news.update',this.news.data.slug))
        },
        photoUpload(file){
            const reader=new FileReader();
            if (file){
                reader.readAsDataURL(file);
                reader.onload=(e)=>{
                    axios.post(this.$page.props.publicPath+"api/file-upload",{
                        file:e.target.result
                    }).then(res=>{
                        this.form.photo= res.data.file
                        document.getElementById('photo').value = ""
                    }).catch(function(res){
                        // this.form.errors.push(res.data.message)
                    })
                };
            }
        },
    }
}
</script>

<style scoped>

</style>
