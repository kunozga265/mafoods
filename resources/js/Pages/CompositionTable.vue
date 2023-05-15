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
                                                <div v-html="page.data.contents.composition_table_description"></div>
<!--                                                <div v-show="showMore">
                                                    <p itemprop="description">Users of the data should become familiar with the variables that affect how food composition data are produced and compiled as a precondition for making good use of the data.</p>
                                                    <p>MAFOODS. 2019. Malawian Food Composition Table. 1st Edition. Averalda van Graan, Joelaine Chetty, Malory Jumat, Sitilitha Masangwi, Agnes Mwangwela, Felix Pensulo Phiri, Lynne M. Ausman, Shibani Ghosh, Elizabeth Marino-Costello (Eds). Lilongwe, Malawi.)</p>
                                                    <p>In the Frequently Asked Questions (FAQ) section of this website, provides answers for a better understanding of the compilation process and understanding the tables.</p>
                                                    <p>Searching the Malawian Food Composition Tables, a total of 316 food items are presented in the publication. For each food item, energy and approximate composition data are reported and some minerals and vitamins are presented for 42 components, i.e. moisture, energy, macronutrients, minerals and vitamins, as well as phytate values for select items. The nutrient information in MAFOODS 2019 represents mean values and cannot always be considered as an exact reflection of the nutrient content. As was previously indicated, various factors influence the nutrient content of food. Nutrient information is presented per 100g edible food.</p>

                                                </div>-->
                                            </div>

                                            <div class="prd-qunt">
<!--                                                <span v-if="showMore === true" class="btn1-drk" @click="showMore=!showMore">Show Less</span>-->
<!--                                                <span v-else class="btn1-drk" @click="showMore=!showMore">Show More</span>-->
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
                                                class="">
                                                <div class="cause-box1 style2">
                                                    <inertia-link :href="route('foods.show',food.code)">
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

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "CompositionTable",
    props:['groups','foods','page'],
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
