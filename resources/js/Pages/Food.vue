<template>
    <app-layout>
        <!--====== Page Title Start ======-->
<!--        <section class="page-header image-placeholder"
                 :style="{backgroundImage:`url(${fileUrl(food.data.group.image)})`}"
        >
            <div class="">
                <div class="">
                    <div class="title">

&lt;!&ndash;                        <span>{{food.data.item}}</span>&ndash;&gt;
&lt;!&ndash;                        <span>Code: {{food.data.code}}</span>&ndash;&gt;
                    </div>
                </div>
            </div>
        </section>-->
        <!--====== Page Title Start ======-->

        <!--====== Page Title End ======-->

        <!--====== Search Details Area Start ======-->
        <section class="container">
            <div class="food-item">
<!--                <div class="image-placeholder"
                     :style="{backgroundImage:`url(${fileUrl(food.data.group.image)})`}"
                ></div>-->
                <img :src="fileUrl(food.data.group.image)" alt="">
                <div class="heading">
                    <div class="title">{{food.data.item}}</div>
                    <span class="group">{{food.data.group.name}}</span>
                </div>
            </div>

            <div class="">
                <div class="">
<!--                    <div class="">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <h4 class="widget-title">Search Here</h4>
                                <form :action="route('search')" method="get">
                                    <input name="query" type="text" placeholder="Search for food" :value="query">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
&lt;!&ndash;                            <div class="widget category-widget">
                                <h4 class="widget-title">Food Groups</h4>
                                <ul>
                                    <li v-for="(group,index) in groups.data"
                                    :key="index">
                                        <a href="#">{{ group.name }} <i class="far fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>&ndash;&gt;
                        </div>
                    </div>-->
                    <div class="">
                        <div class="bg-white">



<!--
                            <h3 class="title">{{food.data.item}}</h3>
                            <div>{{food.data.group.name}} </div>
-->

                            <div class="">
                                <table  class="w-full">
                                    <tr class="border-b">
                                        <th class="text-left p-2">Item</th>
                                        <th class="text-left p-2">Value</th>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Code</td>
                                        <td class="text-left px-2">{{ food.data.code }}</td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Moisture (g)</td>
                                        <td class="text-left px-2">
                                            <span v-if="food.data.moisture">{{ (food.data.moisture).toFixed(1) }}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Energy Calculated (kCal)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.energy_kcal">{{ (food.data.energy_kcal).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Energy Calculated (kJ)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.energy_kj">{{ (food.data.energy_kj).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Nitrogen (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.nitrogen">{{ (food.data.nitrogen).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Total protein (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.protein">{{ (food.data.protein).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Total Fats (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.fats">{{ (food.data.fats).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Saturated FA (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.saturated_fa ">{{ (food.data.saturated_fa ).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Mono-unsaturated FA (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.monounsaturated_fa">{{ (food.data.monounsaturated_fa).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Polyunsaturated FA (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.polyunsaturated_fa">{{ (food.data.polyunsaturated_fa).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Cholesterol (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.cholesterol">{{ (food.data.cholesterol).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Total CHO for UDB</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.cho_udb">{{ (food.data.cho_udb).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Carbohydrate, avail. (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.cho_avail">{{ (food.data.cho_avail).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Total sugars (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.sugars">{{ (food.data.sugars).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Added sugar (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.added_sugar">{{ (food.data.added_sugar).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Total fibre (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.fibre">{{ (food.data.fibre).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Starch (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.starch">{{ (food.data.starch).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Ash (g)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.ash">{{ (food.data.ash).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Ca (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.ca">{{ (food.data.ca).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Fe (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.fe">{{ (food.data.fe).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Mg (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.mg">{{ (food.data.mg).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>P (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.p">{{ (food.data.p).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>K (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.k">{{ (food.data.k).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Na (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.na">{{ (food.data.na).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Zn (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.zn">{{ (food.data.zn).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Cu (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.cu">{{ (food.data.cu).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Mn (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.mn">{{ (food.data.mn).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>I (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.i">{{ (food.data.i).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Se (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.se">{{ (food.data.se).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin A (RAE) (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_a_rae">{{ (food.data.vitamin_a_rae).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin A (RE) (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_a_re">{{ (food.data.vitamin_a_re).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Thiamin (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.thiamin">{{ (food.data.thiamin).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Riboflavin (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.riboflavin">{{ (food.data.riboflavin).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Niacin (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.niacin">{{ (food.data.niacin).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin B6 (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_b6">{{ (food.data.vitamin_b6).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Folic acid (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.folic_acid">{{ (food.data.folic_acid).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin B12 (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_b12">{{ (food.data.vitamin_b12).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Pantothenate (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.pantothenate">{{ (food.data.pantothenate).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Biotin (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.biotin">{{ (food.data.biotin).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin C (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_c">{{ (food.data.vitamin_c).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin D (mcg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_d">{{ (food.data.vitamin_d).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Vitamin E (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.vitamin_e">{{ (food.data.vitamin_e).toFixed(1)}}</span>
                                        </td>
                                    </tr>

                                    <tr class="border-b">
                                        <td>Phytic Acid (mg)</td>
                                        <td class="text-left px-2">
                                            <span  v-if="food.data.phytic_acid">{{ (food.data.phytic_acid).toFixed(1)}}</span>
                                        </td>
                                    </tr>
                                </table>
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
    props:['query','food','groups'],
    components: {AppLayout}

}
</script>

<style scoped>

</style>
