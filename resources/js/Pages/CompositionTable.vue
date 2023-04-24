<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Composition Table</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">Composition Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block pb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-4">
                                        <div class="prd-thm">
                                            <img :src="fileUrl('images/composition-table.jpg')" alt="" itemprop="image" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-8">
                                        <div class="product-detail-innr">
                                            <h1 itemprop="headline">Malawi Food Composition Table 2019</h1>
                                            <span class="prd-cate">316 Food Items</span>
                                            <span>| 42 Nutrients</span>
<!--
                                            <p itemprop="description">The Government of Malawi (GoM) has developed
                                                the first edition of the Malawian Food Composition
                                                Table (MFCT) which describes the content of
                                                commonly-consumed Malawian food items in terms
                                                of their nutrients and energy. Food composition data
                                                form the basis of all practices in human nutrition
                                                and health. It is therefore essential to have a reliable
                                                country-specific food composition database.</p>-->
                                            <div class="description">
                                                <p itemprop="description">Data reference sources- 63% Malawi, 30% South Africa, 4% West Africa, 2% United states of America, 1% Mozambique, 23% Recipes
                                                    All foods are biological materials and exhibit natural variations in composition.
                                                    This variability is increased by factors such as:
                                                </p>
                                                <ul class="listing">
                                                    <li>different methods of plant and animal husbandry</li>
                                                    <li>storage methods</li>
                                                    <li>transportation</li>
                                                    <li>different marketing strategies</li>
                                                    <li>agriculture practices</li>
                                                    <li>processing methods</li>
                                                </ul>
                                                <div v-show="showMore">
                                                    <p itemprop="description">Users of the data should become familiar with the variables that affect how food composition data are produced and compiled as a precondition for making good use of the data.</p>
                                                    <p>MAFOODS. 2019. Malawian Food Composition Table. 1st Edition. Averalda van Graan, Joelaine Chetty, Malory Jumat, Sitilitha Masangwi, Agnes Mwangwela, Felix Pensulo Phiri, Lynne M. Ausman, Shibani Ghosh, Elizabeth Marino-Costello (Eds). Lilongwe, Malawi.)</p>
                                                    <p>In the Frequently Asked Questions (FAQ) section of this website, provides answers for a better understanding of the compilation process and understanding the tables.</p>
                                                    <p>Searching the Malawian Food Composition Tables, a total of 316 food items are presented in the publication. For each food item, energy and approximate composition data are reported and some minerals and vitamins are presented for 42 components, i.e. moisture, energy, macronutrients, minerals and vitamins, as well as phytate values for select items. The nutrient information in MAFOODS 2019 represents mean values and cannot always be considered as an exact reflection of the nutrient content. As was previously indicated, various factors influence the nutrient content of food. Nutrient information is presented per 100g edible food.</p>

                                                </div>
                                            </div>

                                            <div class="prd-qunt">
                                                <span v-if="showMore === true" class="btn1-drk" @click="showMore=!showMore">Show Less</span>
                                                <span v-else class="btn1-drk" @click="showMore=!showMore">Show More</span>
                                                <a href="#" title="" class="btn1" itemprop="url">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Product Detail -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="block gray pt-0">
                <div class="container">
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

        <!--        <div class="container">

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

                </div>-->

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
