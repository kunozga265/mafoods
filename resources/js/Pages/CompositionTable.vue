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
            <div class="block composition-table">
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="title-style2 center-align">
<!--                                    <h4 itemprop="headline"><i>Malawian</i> Food Composition Database</h4>-->
                                    <h4 itemprop="headline"><i>Malawian Food</i> Composition Database</h4>
<!--                                    <span>Summary Statistics | 2019 Version 1</span>-->
<!--                                    <p itemprop="description">Summary Statistics</p>-->
                                    <div class="tagline">
                                        <div>Summary Statistics
                                        <span>| 2019 Version 1</span>
                                        </div>
                                    </div>
                                </div>
                              <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                      <div class="statistic">
                                          <div>
                                              <div class="number">
                                                  <div>125</div>
                                              </div>
                                          </div>
                                          <div class="info">
                                              <p>Number of Malawian Foods</p>
                                              <ul>
                                                  <li>Analytical data from literature sources of 32 publications</li>
                                                  <li>Theses data from Malawian Universities added into database</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                      <div class="statistic">
                                          <div>
                                              <div class="number">
                                              <div>73</div>
                                          </div>
                                          </div>
                                          <div class="info">
                                              <p>Number of Malawian Recipes</p>
                                              <ul>
                                                  <li>Recipe calculations accessed from local cookbooks</li>
                                                  <li>Information sourced from recipe books developed by Ministry of Health and other Malawian cookbooks available in country</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                      <div class="statistic">
                                          <div>
                                              <div class="number">
                                              <div>118</div>
                                          </div>
                                          </div>
                                          <div class="info">
                                              <p>Number of Foods Borrowed</p>
                                              <ul>
                                                  <li>Foods borrowed from international food databases</li>
                                                  <li>Only resorted to borrowing when local data did not pass stringent data quality checks</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                      <div class="statistic">
                                          <div>
                                              <div class="number">
                                              <div>316</div>
                                          </div>
                                          </div>
                                          <div class="info">
                                              <p>Total number of foods in Malawian Food Composition Database</p>
                                              <ul>
                                                  <li>Information reported as at February 2019</li>
                                                  <li>Information gathered from various data sources, inclusive of literature retrieved from Malawian tertiary institutions, recipe calculations and international food databases</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
<!--                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-4">
                                        <div class="prd-thm">
                                            <img :src="fileUrl('images/composition-table.jpg')" alt="" itemprop="image" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-8">
                                        <div class="product-detail-innr">
                                            <h1 itemprop="headline">Malawi Food Composition Table 2019</h1>
                                            <span class="prd-cate">{{foodCount(null)}} Food Items</span>
                                            <span>| 42 Nutrients</span>
&lt;!&ndash;
                                            <p itemprop="description">The Government of Malawi (GoM) has developed
                                                the first edition of the Malawian Food Composition
                                                Table (MFCT) which describes the content of
                                                commonly-consumed Malawian food items in terms
                                                of their nutrients and energy. Food composition data
                                                form the basis of all practices in human nutrition
                                                and health. It is therefore essential to have a reliable
                                                country-specific food composition database.</p>&ndash;&gt;
                                            <div class="description">
                                                <div v-html="page.data.contents.composition_table_description"></div>
&lt;!&ndash;                                                <div v-show="showMore">
                                                    <p itemprop="description">Users of the data should become familiar with the variables that affect how food composition data are produced and compiled as a precondition for making good use of the data.</p>
                                                    <p>MAFOODS. 2019. Malawian Food Composition Table. 1st Edition. Averalda van Graan, Joelaine Chetty, Malory Jumat, Sitilitha Masangwi, Agnes Mwangwela, Felix Pensulo Phiri, Lynne M. Ausman, Shibani Ghosh, Elizabeth Marino-Costello (Eds). Lilongwe, Malawi.)</p>
                                                    <p>In the Frequently Asked Questions (FAQ) section of this website, provides answers for a better understanding of the compilation process and understanding the tables.</p>
                                                    <p>Searching the Malawian Food Composition Tables, a total of 316 food items are presented in the publication. For each food item, energy and approximate composition data are reported and some minerals and vitamins are presented for 42 components, i.e. moisture, energy, macronutrients, minerals and vitamins, as well as phytate values for select items. The nutrient information in MAFOODS 2019 represents mean values and cannot always be considered as an exact reflection of the nutrient content. As was previously indicated, various factors influence the nutrient content of food. Nutrient information is presented per 100g edible food.</p>

                                                </div>&ndash;&gt;
                                            </div>

                                            <div class="prd-qunt">
&lt;!&ndash;                                                <span v-if="showMore === true" class="btn1-drk" @click="showMore=!showMore">Show Less</span>&ndash;&gt;
&lt;!&ndash;                                                <span v-else class="btn1-drk" @click="showMore=!showMore">Show More</span>&ndash;&gt;
                                                <a :href="fileUrl('files/Malawian Food Composition Table 2019.pdf')" target="_blank" title="" class="btn1" itemprop="url">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-sm-12">
                                    <a :href="fileUrl('files/Malawian Food Composition Table 2019.pdf')" target="_blank">
                                        <div class="pdf">
                                            <img :src="fileUrl('images/pdf.png')" alt="">
                                            <div>Click to download Malawi Food Composition Table</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block  whitish hgh-opc composition-table">
                <div class="fixed-bg" :style="{backgroundImage: `url(${fileUrl('images/hero-img-2.jpg')})`}"></div>
                <div class="container">
                    <div class="title-style2 center-align">
                        <h3>Data reference source contribution</h3>
<!--                        <span>What we are offering you!</span>-->
                        <!--                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>-->
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="charts">
                                    <div class="display">
                                        <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                            <div>
                                                <div>63%</div>
                                                <!--                                        <div class="source">Malawi</div>-->
                                            </div>
                                        </div>
                                        <DoughnutChart
                                            :chart-data="malawiData"
                                            :chart-options="chartOptions"
                                            chart-id="malawi"
                                            dataset-id-key="malawi"
                                        />
                                    </div>
                                    <div class="source">
                                        Malawi
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="charts">
                                    <div class="display">
                                        <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                            <div>
                                                <div>30%</div>
                                                <!--                                        <div class="source">Malawi</div>-->
                                            </div>
                                        </div>
                                        <DoughnutChart
                                            :chart-data="southAfricaData"
                                            :chart-options="chartOptions"
                                            chart-id="malawi"
                                            dataset-id-key="malawi"
                                        />
                                    </div>
                                    <div class="source">
                                        South Africa
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="charts">
                                    <div class="display">
                                        <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                            <div>
                                                <div>4%</div>
                                                <!--                                        <div class="source">Malawi</div>-->
                                            </div>
                                        </div>
                                        <DoughnutChart
                                            :chart-data="westData"
                                            :chart-options="chartOptions"
                                            chart-id="malawi"
                                            dataset-id-key="malawi"
                                        />
                                    </div>
                                    <div class="source">
                                        West Africa
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="charts">
                                    <div class="display">
                                        <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                            <div>
                                                <div>2%</div>
                                                <!--                                        <div class="source">Malawi</div>-->
                                            </div>
                                        </div>
                                        <DoughnutChart
                                            :chart-data="unitedStatesData"
                                            :chart-options="chartOptions"
                                            chart-id="malawi"
                                            dataset-id-key="malawi"
                                        />
                                    </div>
                                    <div class="source">
                                        United States of America
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="charts">
                                    <div class="display">
                                        <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                            <div>
                                                <div>1%</div>
                                                <!--                                        <div class="source">Malawi</div>-->
                                            </div>
                                        </div>
                                        <DoughnutChart
                                            :chart-data="mozambiqueData"
                                            :chart-options="chartOptions"
                                            chart-id="malawi"
                                            dataset-id-key="malawi"
                                        />
                                    </div>
                                    <div class="source">
                                        Mozambique
                                        <div class="news-meta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ul>
                                <li>Data for 8 food groups collated: Staples; Legumes; Animal Foods; Vegetables; Fruits; Fats & Oils; Baby Foods and Miscellaneous group </li>
                                <li>>50 Publications reviewed using data quality checklist tool developed</li>
                                <li>Number of food components captured equals 42</li>
                                <li>More missing data for vitamins than for mineral data, whilst proximate values are well represented</li>
                            </ul>
                        </div>
                    </div>
<!--                    <doughnut></doughnut>-->
                </div>
            </div>
        </section>




        <section>
            <div class="block gray composition-table">
                <div class="container">
                    <div class="title-style2 center-align">
                        <h3 >Browse Malawi Food Composition Table</h3>
                    </div>
                    <div class="">
                        <div class="">
                            <div class="fltrs style2 center-align ">
<!--                                <ul class="fltrs-lst">
                                    <li class="selected"><span @click="selectedGroup=0" :class="{selected:selectedGroup===0}">All Items ({{foodCount(null)}})</span></li>
                                    <li v-for="(group,index) in groups.data" :key="index">
                                        <span  @click="selectedGroup=group.id" :class="{selected:selectedGroup===group.id}">{{ group.name }} ({{foodCount(group.id)}})</span>
                                    </li>
                                </ul>
                                <div class="srch-fund">
                                    <div class="">
                                        <div class=" ">
                                            <div class="srch-fund-inr">
                                                <form class="pg-srch-frm">
                                                    <input type="text" placeholder="Search for food" v-model="search"/>
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="">
                                    <div class="">
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
                                        <div class="table-view">
<!--                                            <div
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
                                                            <div class="dnt-gl">&lt;!&ndash;Code: &ndash;&gt;<span class="price">{{ food.code }}</span></div>
                                                        </div>
                                                    </inertia-link>
                                                </div>
                                            </div>-->
                                            <mdb-datatable :data="data" striped bordered />

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
import DoughnutChart from "@/Components/DoughnutChart";
// import Doughnut from "@/Components/Doughnut";
import {mdbDatatable} from 'mdbvue';

export default {
    name: "CompositionTable",
    props:['groups','foods','page'],
    components: {AppLayout,DoughnutChart,mdbDatatable},
    data(){
        return{
            search:"",
            selectedGroup:0,
            showMore:false,
            chartOptions:{
                plugins: {
                    tooltip: {
                        enabled: false
                    },
                    legend:{
                        display:false
                    }
                }, cutout:30
            },
            malawiData:{
                datasets: [{
                    data: [63, (100-63)],
                    backgroundColor: ['#58bf00','#f2f2f4'],
                }],
            },
            southAfricaData:{
                datasets: [{
                    data: [30, (100-30)],
                    backgroundColor: ['#58bf00','#f2f2f4'],
                }],
            },
            westData:{
                datasets: [{
                    data: [4, (100-4)],
                    backgroundColor: ['#58bf00','#f2f2f4'],
                }],
            },
            unitedStatesData:{
                datasets: [{
                    data: [2, (100-2)],
                    backgroundColor: ['#58bf00','#f2f2f4'],
                }],
            },
            mozambiqueData:{
                datasets: [{
                    data: [1, (100-1)],
                    backgroundColor: ['#58bf00','#f2f2f4'],
                }],
            },
        }
    },
    computed:{
        data(){
            let arr= {
                columns: [
                    {
                        label: 'Food Code',
                        field: 'code',
                        sort: 'asc'
                    },
                    {
                        label: 'Food Item',
                        field: 'item',
                        sort: 'asc'
                    },
                    {
                        label: 'Food Group',
                        field: 'group',
                        sort: 'asc'
                    },
                    {
                        label: 'Source',
                        field: 'source',
                        sort: 'asc'
                    },
                ],
                rows: []
            }

            let foods = this.foods.data

            for(let x in foods){
                arr.rows.push({
                    code:foods[x].code,
                    item:foods[x].item,
                    group:foods[x].group.name,
                    source:foods[x].source.name,
                    // clickEvent: () => this.navigateToFood(foods[x].id),
                    // clickEvent: () => this.handleClick(foods[x].code)
                    // item:<button className="food-item" onClick={() => this.navigateToFood(foods[x].code)}>Add</button>
                })
            }

            return arr
        },
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
        },
        navigateToFood(id){
            console.log(id)
        }
    }
}
</script>

<style scoped>

</style>
