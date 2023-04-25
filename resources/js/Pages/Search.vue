<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Search Results</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item"><a :href="route('search')">Search</a></li>
                        <li class="breadcrumb-item active">{{ query }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="srch-fund">
                        <div class="row">
                            <div class=" ">
                                <div class="srch-fund-inr">
                                    <form class="pg-srch-frm" :action="route('search')" method="get">
                                        <input name="query" type="text" placeholder="Search" :value="query"/>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="fltrs style2 paddlr30 center-align">
                                <ul class="fltrs-lst">
                                    <li class="selected"><span @click="selectedGroup=0" :class="{selected:selectedGroup===0}">All Items ({{foodCount(null)}})</span></li>
                                    <li v-for="(group,index) in groups.data" :key="index">
                                        <span  @click="selectedGroup=group.id" :class="{selected:selectedGroup===group.id}">{{ group.name }} ({{foodCount(group.id)}})</span>
                                    </li>
                                </ul>
                                <div class="remove-ext">
                                    <div class="row">
                                        <!--                                        <div class="masonry" v-if="search.length === 0">
                                                                                    <div
                                                                                        v-for="(food,index) in foods.data"
                                                                                        :key="index"
                                                                                        class="col-md-6 col-sm-6 col-lg-4 flt-itm" :class="slug(food.group.name)">
                                                                                        <div class="cause-box1 style2">
                                                                                            <div class="cause-info">
                                                                                                <span class="cate"><span>{{ food.group.name }}</span></span>
                                                                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">{{ food.item }}</a></h2>
                                                                                                <span class="dnt-gl">Code: <span class="price">{{ food.code }}</span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                        <div class="row">
                                            <div
                                                v-for="(food,index) in filteredFoods"
                                                :key="index"
                                                class="col-sm-12">
                                                <div class="cause-box1 style2">
                                                    <inertia-link :href="route('foods.show',food.code)">
                                                        <div class="cause-info">
                                                            <div>
                                                                <span class="cate"><span>{{ food.group.name }}</span></span>
                                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">{{ food.item }}</a></h2>
                                                            </div>
                                                            <span class="dnt-gl">Code: <span class="price">{{ food.code }}</span></span>
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

<!--        ====== Search Details Area Start ======
        <section class="">
            <div class="">
                <div class="main-section ">
                    <div class="">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <h5 class="widget-title">Search</h5>
                                <form :action="route('search')" method="get">
                                    <input name="query" type="text" placeholder="Search for food" :value="query">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h5 class="widget-title">Filter by group</h5>
                                <ul>
                                    <li @click="filter = null"  :class="{'active' : filter === null}">
                                        All ({{searchCount(null)}}) <i class="far fa-angle-right"></i>
                                    </li>
                                    <li v-for="(group,index) in groups.data"
                                        :key="index"
                                        @click="filter = group.id"
                                        :class="{'active' : filter === group.id}"
                                    >
                                       {{ group.name }} ({{searchCount(group.id)}}) <i class="far fa-angle-right"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-body">
                        <div class="search-results bg-white" >
                            <p v-show="query != null">{{foods.data.length}} {{foods.data.length === 1? "Result" : "Results"}}</p>

                            <div v-if="filteredFoods.length > 0">
                                <table  class="w-full transition duration-1000 ease-in-out">
                                    <tr class="border-b">
                                        <th class="text-left p-2">Code</th>
                                        <th class="text-left p-2 min-w-75">Ref. No</th>
                                        <th class="text-left p-2">Food Item</th>
                                    </tr>

                                    <tr v-for="(food,index) in filteredFoods" :key="index">
                                        <td class="px-2">{{ food.code }}</td>
                                        <td class="px-2">{{ food.ref_no }}</td>
                                        <td class="px-2">
                                            <inertia-link :href="route('foods.show',food.code)">
                                            {{ food.item }}
                                            </inertia-link>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div v-else>
                                No results found
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        ====== Search Standard Area End ======-->





    </app-layout>

</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Search",
    props:['query','foods','groups'],
    components: {AppLayout},
    data(){
        return{
            filter:null,
            selectedGroup:0,
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

            return foods
        }
    },
    methods:{
        foodCount(id){
            let foods = this.foods.data

            if (id != null){
                foods = (foods).filter((food) => {
                    return food.group.id === id
                })
            }
            return foods.length
        },
    }

}
</script>

<style scoped>

</style>
