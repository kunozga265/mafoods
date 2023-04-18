<template>
    <app-layout>
        <div class="max-w-7xl mx-auto">

            <nav class="bg-white ">
                <div class="">
                    <div class="uk-position-z-index" data-uk-navbar>
                        <div class="uk-navbar-left bg-white">
                            <a class="uk-navbar-item uk-logo" href="/">
                                <img :src="fileUrl('images/weblog.png')" alt="">
                            </a>
                            <!--                        <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
                                                        <li class="uk-active"><a href="#">Home</a></li>
                                                    </ul>-->
                        </div>
                    </div>
                </div>
            </nav>

            <div class="text-center text-3xl font-semibold mb-4">
                Malawi Food Composition Table 2019
            </div>



            <div class="relative mb-4">
                <i class="text-gray-400 text-3xl px-4 py-2 sm:py-4 mt-1 absolute mdi mdi-magnify"></i>
                <input v-model="search" class="border-0 shadow rounded-2xl pl-16 py-4 sm:py-6 w-full focus:ring-0 focus:shadow-lg transition duration-500 ease-in-out" type="text" placeholder="Search food">
            </div>

            <div v-show="search.length > 0">

                <div class="my-2 text-lg">Search Results:</div>

                <table  class="table-fixed overflow-x-scroll border">
                    <tr class="border-b">
                        <th class="text-left p-2">Code</th>
                        <th class="text-left p-2">Ref. No</th>
                        <th class="text-left p-2">Food Item</th>
                        <th class="text-left p-2">Food Group</th>
                        <th class="p-2">Moisture (g)</th>
                        <th class="p-2">Energy Calculated (kCal)</th>
                        <th class="p-2">Energy Calculated (kJ)</th>
                        <th class="p-2">Nitrogen (g)</th>
                        <th class="p-2">Total protein (g)</th>
                        <th class="p-2">Total Fats (g)</th>
                    </tr>


                    <tr v-for="(food,f_index) in filteredFoods" :key="f_index">
                        <td class="px-2">{{ food.code }}</td>
                        <td class="px-2">{{ food.ref_no }}</td>
                        <td class="px-2">{{ food.item }}</td>
                        <td class="px-2">{{ food.group.name}}</td>
                        <td class="text-center px-2">
                            <span v-if="food.moisture">{{ (food.moisture).toFixed(1) }}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.energy_kcal">{{ (food.energy_kcal).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.energy_kj">{{ (food.energy_kj).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.nitrogen">{{ (food.nitrogen).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.protein">{{ (food.protein).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.fats">{{ (food.fats).toFixed(1)}}</span>
                        </td>
                    </tr>
                </table>
            </div>


            <div v-show="search.length === 0" class="mb-8" v-for="(group,g_index) in groups.data" :key="g_index">






                <table  class="table-fixed overflow-x-scroll border">
                    <tr class="border-b">
                        <th class="text-lg font-bold p-4" colspan="3">Group {{g_index+1}}: {{group.name}}</th>
                    </tr>
                    <tr class="border-b">
                        <th class="text-left p-2">Code</th>
                        <th class="text-left p-2">Ref. No</th>
                        <th class="text-left p-2">Food Item</th>
                        <th class="p-2">Moisture (g)</th>
                        <th class="p-2">Energy Calculated (kCal)</th>
                        <th class="p-2">Energy Calculated (kJ)</th>
                        <th class="p-2">Nitrogen (g)</th>
                        <th class="p-2">Total protein (g)</th>
                        <th class="p-2">Total Fats (g)</th>
                    </tr>


                    <tr v-for="(food,f_index) in group.foods" :key="f_index">
                        <td class="px-2">{{ food.code }}</td>
                        <td class="px-2">{{ food.ref_no }}</td>
                        <td class="px-2">{{ food.item }}</td>
                        <td class="text-center px-2">
                            <span v-if="food.moisture">{{ (food.moisture).toFixed(1) }}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.energy_kcal">{{ (food.energy_kcal).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.energy_kj">{{ (food.energy_kj).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.nitrogen">{{ (food.nitrogen).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.protein">{{ (food.protein).toFixed(1)}}</span>
                        </td>
                        <td class="text-center px-2">
                            <span  v-if="food.fats">{{ (food.fats).toFixed(1)}}</span>
                        </td>
                    </tr>
                </table>

            </div>

        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "CompositionTable",
    props:['groups','foods'],
    components: {AppLayout},
    data(){
        return{
            search:""
        }
    },
    computed:{
        filteredFoods(){
            let foods = this.foods.data

            if(this.search.length !==0){
                foods = (foods).filter((food) => {
                    return food.item.toLowerCase().includes(this.search.toLowerCase())
                })
            }

            return foods

        }
    }
}
</script>

<style scoped>

</style>
