<template>
    <app-layout>
        <!--====== Page Title Start ======-->
        <section class="page-header image-placeholder"
                 style="background-image: url('images/header-1.jpg')"
        >
            <div class="">
                <div class="">
                    <div class="title">
                        <span>Search Results</span>
                    </div>
<!--                    <div class="">
                        <ul class="page-breadcrumb">
                            <li><a :href="route('home')">Home</a></li>
                            <li>Search</li>
&lt;!&ndash;                            <li v-show="query != null">{{ query }}</li>&ndash;&gt;
                        </ul>
                    </div>-->
                </div>
            </div>
        </section>
        <!--====== Page Title End ======-->

        <!--====== Search Details Area Start ======-->
        <section class="">
            <div class="">
                <div class="main-section ">
                    <div class="">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
<!--                                <h5 class="widget-title">Search</h5>-->
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
<!--                            <p v-show="query != null">{{foods.data.length}} {{foods.data.length === 1? "Result" : "Results"}}</p>-->

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
        <!--====== Search Standard Area End ======-->





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

        }
    },


    computed:{
        filteredFoods(){
            let foods = this.foods.data

            if (this.filter != null){
                foods = (foods).filter((food) => {
                    return food.group.id === this.filter
                })
            }
            return foods
        }
    },
    methods:{
        searchCount(id){
            let foods = this.foods.data

            if (id != null){
                foods = (foods).filter((food) => {
                    return food.group.id === id
                })
            }
            return foods.length
        }
    }

}
</script>

<style scoped>

</style>
