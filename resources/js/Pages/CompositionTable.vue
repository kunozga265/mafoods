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
                                        <div class="">
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
           /* data: {
                columns: [
                    {
                        label: 'Name',
                        field: 'name',
                        sort: 'asc'
                    },
                    {
                        label: 'Position',
                        field: 'position',
                        sort: 'asc'
                    },
                    {
                        label: 'Office',
                        field: 'office',
                        sort: 'asc'
                    },
                    {
                        label: 'Age',
                        field: 'age',
                        sort: 'asc'
                    },
                    {
                        label: 'Start date',
                        field: 'date',
                        sort: 'asc'
                    },
                    {
                        label: 'Salary',
                        field: 'salary',
                        sort: 'asc'
                    }
                ],
                rows: [
                    {
                        name: 'Tiger Nixon',
                        position: 'System Architect',
                        office: 'Edinburgh',
                        age: '61',
                        date: '2011/04/25',
                        salary: '$320'
                    },
                    {
                        name: 'Garrett Winters',
                        position: 'Accountant',
                        office: 'Tokyo',
                        age: '63',
                        date: '2011/07/25',
                        salary: '$170'
                    },
                    {
                        name: 'Ashton Cox',
                        position: 'Junior Technical Author',
                        office: 'San Francisco',
                        age: '66',
                        date: '2009/01/12',
                        salary: '$86'
                    },
                    {
                        name: 'Cedric Kelly',
                        position: 'Senior Javascript Developer',
                        office: 'Edinburgh',
                        age: '22',
                        date: '2012/03/29',
                        salary: '$433'
                    },
                    {
                        name: 'Airi Satou',
                        position: 'Accountant',
                        office: 'Tokyo',
                        age: '33',
                        date: '2008/11/28',
                        salary: '$162'
                    },
                    {
                        name: 'Brielle Williamson',
                        position: 'Integration Specialist',
                        office: 'New York',
                        age: '61',
                        date: '2012/12/02',
                        salary: '$372'
                    },
                    {
                        name: 'Herrod Chandler',
                        position: 'Sales Assistant',
                        office: 'San Francisco',
                        age: '59',
                        date: '2012/08/06',
                        salary: '$137'
                    },
                    {
                        name: 'Rhona Davidson',
                        position: 'Integration Specialist',
                        office: 'Tokyo',
                        age: '55',
                        date: '2010/10/14',
                        salary: '$327'
                    },
                    {
                        name: 'Colleen Hurst',
                        position: 'Javascript Developer',
                        office: 'San Francisco',
                        age: '39',
                        date: '2009/09/15',
                        salary: '$205'
                    },
                    {
                        name: 'Sonya Frost',
                        position: 'Software Engineer',
                        office: 'Edinburgh',
                        age: '23',
                        date: '2008/12/13',
                        salary: '$103'
                    },
                    {
                        name: 'Jena Gaines',
                        position: 'Office Manager',
                        office: 'London',
                        age: '30',
                        date: '2008/12/19',
                        salary: '$90'
                    },
                    {
                        name: 'Quinn Flynn',
                        position: 'Support Lead',
                        office: 'Edinburgh',
                        age: '22',
                        date: '2013/03/03',
                        salary: '$342'
                    },
                    {
                        name: 'Charde Marshall',
                        position: 'Regional Director',
                        office: 'San Francisco',
                        age: '36',
                        date: '2008/10/16',
                        salary: '$470'
                    },
                    {
                        name: 'Haley Kennedy',
                        position: 'Senior Marketing Designer',
                        office: 'London',
                        age: '43',
                        date: '2012/12/18',
                        salary: '$313'
                    },
                    {
                        name: 'Tatyana Fitzpatrick',
                        position: 'Regional Director',
                        office: 'London',
                        age: '19',
                        date: '2010/03/17',
                        salary: '$385'
                    },
                    {
                        name: 'Michael Silva',
                        position: 'Marketing Designer',
                        office: 'London',
                        age: '66',
                        date: '2012/11/27',
                        salary: '$198'
                    },
                    {
                        name: 'Paul Byrd',
                        position: 'Chief Financial Officer (CFO)',
                        office: 'New York',
                        age: '64',
                        date: '2010/06/09',
                        salary: '$725'
                    },
                    {
                        name: 'Gloria Little',
                        position: 'Systems Administrator',
                        office: 'New York',
                        age: '59',
                        date: '2009/04/10',
                        salary: '$237'
                    },
                    {
                        name: 'Bradley Greer',
                        position: 'Software Engineer',
                        office: 'London',
                        age: '41',
                        date: '2012/10/13',
                        salary: '$132'
                    },
                    {
                        name: 'Dai Rios',
                        position: 'Personnel Lead',
                        office: 'Edinburgh',
                        age: '35',
                        date: '2012/09/26',
                        salary: '$217'
                    },
                    {
                        name: 'Jenette Caldwell',
                        position: 'Development Lead',
                        office: 'New York',
                        age: '30',
                        date: '2011/09/03',
                        salary: '$345'
                    },
                    {
                        name: 'Yuri Berry',
                        position: 'Chief Marketing Officer (CMO)',
                        office: 'New York',
                        age: '40',
                        date: '2009/06/25',
                        salary: '$675'
                    },
                    {
                        name: 'Caesar Vance',
                        position: 'Pre-Sales Support',
                        office: 'New York',
                        age: '21',
                        date: '2011/12/12',
                        salary: '$106'
                    },
                    {
                        name: 'Doris Wilder',
                        position: 'Sales Assistant',
                        office: 'Sidney',
                        age: '23',
                        date: '2010/09/20',
                        salary: '$85'
                    },
                    {
                        name: 'Angelica Ramos',
                        position: 'Chief Executive Officer (CEO)',
                        office: 'London',
                        age: '47',
                        date: '2009/10/09',
                        salary: '$1'
                    },
                    {
                        name: 'Gavin Joyce',
                        position: 'Developer',
                        office: 'Edinburgh',
                        age: '42',
                        date: '2010/12/22',
                        salary: '$92'
                    },
                    {
                        name: 'Jennifer Chang',
                        position: 'Regional Director',
                        office: 'Singapore',
                        age: '28',
                        date: '2010/11/14',
                        salary: '$357'
                    },
                    {
                        name: 'Brenden Wagner',
                        position: 'Software Engineer',
                        office: 'San Francisco',
                        age: '28',
                        date: '2011/06/07',
                        salary: '$206'
                    },
                    {
                        name: 'Fiona Green',
                        position: 'Chief Operating Officer (COO)',
                        office: 'San Francisco',
                        age: '48',
                        date: '2010/03/11',
                        salary: '$850'
                    },
                    {
                        name: 'Shou Itou',
                        position: 'Regional Marketing',
                        office: 'Tokyo',
                        age: '20',
                        date: '2011/08/14',
                        salary: '$163'
                    },
                    {
                        name: 'Michelle House',
                        position: 'Integration Specialist',
                        office: 'Sidney',
                        age: '37',
                        date: '2011/06/02',
                        salary: '$95'
                    },
                    {
                        name: 'Suki Burks',
                        position: 'Developer',
                        office: 'London',
                        age: '53',
                        date: '2009/10/22',
                        salary: '$114'
                    },
                    {
                        name: 'Prescott Bartlett',
                        position: 'Technical Author',
                        office: 'London',
                        age: '27',
                        date: '2011/05/07',
                        salary: '$145'
                    },
                    {
                        name: 'Gavin Cortez',
                        position: 'Team Leader',
                        office: 'San Francisco',
                        age: '22',
                        date: '2008/10/26',
                        salary: '$235'
                    },
                    {
                        name: 'Martena Mccray',
                        position: 'Post-Sales support',
                        office: 'Edinburgh',
                        age: '46',
                        date: '2011/03/09',
                        salary: '$324'
                    },
                    {
                        name: 'Unity Butler',
                        position: 'Marketing Designer',
                        office: 'San Francisco',
                        age: '47',
                        date: '2009/12/09',
                        salary: '$85'
                    },
                    {
                        name: 'Howard Hatfield',
                        position: 'Office Manager',
                        office: 'San Francisco',
                        age: '51',
                        date: '2008/12/16',
                        salary: '$164'
                    },
                    {
                        name: 'Hope Fuentes',
                        position: 'Secretary',
                        office: 'San Francisco',
                        age: '41',
                        date: '2010/02/12',
                        salary: '$109'
                    },
                    {
                        name: 'Vivian Harrell',
                        position: 'Financial Controller',
                        office: 'San Francisco',
                        age: '62',
                        date: '2009/02/14',
                        salary: '$452'
                    },
                    {
                        name: 'Timothy Mooney',
                        position: 'Office Manager',
                        office: 'London',
                        age: '37',
                        date: '2008/12/11',
                        salary: '$136'
                    },
                    {
                        name: 'Jackson Bradshaw',
                        position: 'Director',
                        office: 'New York',
                        age: '65',
                        date: '2008/09/26',
                        salary: '$645'
                    },
                    {
                        name: 'Olivia Liang',
                        position: 'Support Engineer',
                        office: 'Singapore',
                        age: '64',
                        date: '2011/02/03',
                        salary: '$234'
                    },
                    {
                        name: 'Bruno Nash',
                        position: 'Software Engineer',
                        office: 'London',
                        age: '38',
                        date: '2011/05/03',
                        salary: '$163'
                    },
                    {
                        name: 'Sakura Yamamoto',
                        position: 'Support Engineer',
                        office: 'Tokyo',
                        age: '37',
                        date: '2009/08/19',
                        salary: '$139'
                    },
                    {
                        name: 'Thor Walton',
                        position: 'Developer',
                        office: 'New York',
                        age: '61',
                        date: '2013/08/11',
                        salary: '$98'
                    },
                    {
                        name: 'Finn Camacho',
                        position: 'Support Engineer',
                        office: 'San Francisco',
                        age: '47',
                        date: '2009/07/07',
                        salary: '$87'
                    },
                    {
                        name: 'Serge Baldwin',
                        position: 'Data Coordinator',
                        office: 'Singapore',
                        age: '64',
                        date: '2012/04/09',
                        salary: '$138'
                    },
                    {
                        name: 'Zenaida Frank',
                        position: 'Software Engineer',
                        office: 'New York',
                        age: '63',
                        date: '2010/01/04',
                        salary: '$125'
                    },
                    {
                        name: 'Zorita Serrano',
                        position: 'Software Engineer',
                        office: 'San Francisco',
                        age: '56',
                        date: '2012/06/01',
                        salary: '$115'
                    },
                    {
                        name: 'Jennifer Acosta',
                        position: 'Junior Javascript Developer',
                        office: 'Edinburgh',
                        age: '43',
                        date: '2013/02/01',
                        salary: '$75'
                    },
                    {
                        name: 'Cara Stevens',
                        position: 'Sales Assistant',
                        office: 'New York',
                        age: '46',
                        date: '2011/12/06',
                        salary: '$145'
                    },
                    {
                        name: 'Hermione Butler',
                        position: 'Regional Director',
                        office: 'London',
                        age: '47',
                        date: '2011/03/21',
                        salary: '$356'
                    },
                    {
                        name: 'Lael Greer',
                        position: 'Systems Administrator',
                        office: 'London',
                        age: '21',
                        date: '2009/02/27',
                        salary: '$103'
                    },
                    {
                        name: 'Jonas Alexander',
                        position: 'Developer',
                        office: 'San Francisco',
                        age: '30',
                        date: '2010/07/14',
                        salary: '$86'
                    },
                    {
                        name: 'Shad Decker',
                        position: 'Regional Director',
                        office: 'Edinburgh',
                        age: '51',
                        date: '2008/11/13',
                        salary: '$183'
                    },
                    {
                        name: 'Michael Bruce',
                        position: 'Javascript Developer',
                        office: 'Singapore',
                        age: '29',
                        date: '2011/06/27',
                        salary: '$183'
                    },
                    {
                        name: 'Donna Snider',
                        position: 'Customer Support',
                        office: 'New York',
                        age: '27',
                        date: '2011/01/25',
                        salary: '$112'
                    }
                ]
            }*/
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
