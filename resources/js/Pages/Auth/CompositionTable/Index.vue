<template>
    <admin-layout>
        <template #header>
            Composition Table
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item active">Composition Table</li>
        </template>

        <template #actions>
            <inertia-link :href="route('admin.composition-table.create')" class="btn1">New</inertia-link>
           </template>

        <section>
            <div class="">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="fltrs style2 paddlr30 center-align">
                                <ul class="fltrs-lst">
                                    <li class="selected"><span @click="selectedGroup=0" :class="{selected:selectedGroup===0}">All Items ({{foodCount(null)}})</span></li>
                                    <li v-for="(group,index) in groups.data" :key="index">
                                        <span  @click="selectedGroup=group.id" :class="{selected:selectedGroup===group.id}">{{ group.name }} ({{foodCount(group.id)}})</span>
                                    </li>
                                </ul>
                                <div class="srch-fund">
                                    <div class="row">
                                        <div class=" ">
                                            <div class="srch-fund-inr">
                                                <form class="pg-srch-frm">
                                                    <input type="text" placeholder="Search for food" v-model="search"/>
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="remove-ext">
                                    <div class="row">
                                        <div class="row">
                                            <div
                                                v-for="(food,index) in filteredFoods"
                                                :key="index"
                                                class="">
                                                <div class="cause-box1 style2">
                                                    <inertia-link :href="route('admin.composition-table.show',food.code)">
                                                        <div class="cause-info">
                                                            <div>
                                                                <span class="cate"><span>{{ food.group.name }}</span></span>
                                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">{{ food.item }}</a></h2>
                                                            </div>
                                                            <span class="dnt-gl"><!--Code: --><span class="price">{{ food.code }}</span></span>
                                                        </div>
                                                    </inertia-link>
                                                </div>
                                            </div>
                                        </div>
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
    name: "CompositionTable",
    props:['groups','foods'],
    components: {AdminLayout},
    data(){
        return{
            search:"",
            selectedGroup:0,
            showMore:false
        }
    },
    computed:{
        filteredFoods(){
            let foods = this.foods.data

            if(this.selectedGroup!==0){
                foods = (foods).filter((food) => {
                    return food.group.id === this.selectedGroup
                })
            }

            if(this.search.length !==0){
                foods = (foods).filter((food) => {
                    return food.item.toLowerCase().includes(this.search.toLowerCase())
                })
            }

            return foods

        }
    },
    methods:{
        slug(str){
            return str.toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        },
        foodCount(id){
            let foods = this.foods.data

            if (id != null){
                foods = (foods).filter((food) => {
                    return food.group.id === id
                })
            }
            return foods.length
        },
        getRandomImage(){
            const group = this.groups.data[Math.floor(Math.random()*this.groups.data.length)];
            return this.fileUrl(group.image);
        }
    }
}
</script>

<style scoped>

</style>
