<template>
    <app-layout>
        <div class="page-top blackish style2 opc7">
            <div class="fixed-bg2" style="background-color: white; background-blend-mode: normal " :style="{ backgroundImage:`url(${fileUrl(food.data.group.image)})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Food Item - {{ food.data.group.name }}</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item"><a :href="route('composition.table')">Composition Table</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->


        <!--====== Search Details Area Start ======-->
        <section class="block">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="bg-white">

                            <div class="title-style2 center-align">
                                <h3 style="text-transform: none"> {{ food.data.item }}</h3>
                                <span>{{ food.data.code }}</span>
                            </div>


                            <div class="w-full grid grid-col-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                                <!--                                <div class=" ">-->
                                <!--                                    <div class="food-item-content">-->
                                <!--                                        <div class="food-item-content-title">-->
                                <!--                                            Code-->
                                <!--                                        </div>-->
                                <!--                                        <div class="food-item-content-body">-->
                                <!--                                            {{ food.data.code }}-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Moisture (g)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.moisture">{{
                                                    (food.data.moisture).toFixed(1)
                                                }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Energy Calculated (kCal)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.energy_kcal">{{ (food.data.energy_kcal).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Energy Calculated (kJ)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.energy_kj">{{ (food.data.energy_kj).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Nitrogen (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.nitrogen">{{ (food.data.nitrogen).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Total protein (g)
                                        </div>
                                        <div class="food-item-content-body">
                                              <span
                                                  v-if="food.data.protein">{{ (food.data.protein).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Total Fats (g)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.fats">{{ (food.data.fats).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Saturated FA (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.saturated_fa ">{{ (food.data.saturated_fa).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Mono-unsaturated FA (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.monounsaturated_fa">{{ (food.data.monounsaturated_fa).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Polyunsaturated FA (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.polyunsaturated_fa">{{ (food.data.polyunsaturated_fa).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Cholesterol (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.cholesterol">{{ (food.data.cholesterol).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Total CHO for UDB
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.cho_udb">{{ (food.data.cho_udb).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Carbohydrate, avail. (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.cho_avail">{{ (food.data.cho_avail).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Added sugar (g)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.sugars">{{ (food.data.sugars).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Total fibre (g)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.added_sugar">{{ (food.data.added_sugar).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Starch (g)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.fibre">{{ (food.data.fibre).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Ash (g)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.starch">{{ (food.data.starch).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Ca (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.ash">{{ (food.data.ash).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Fe (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.ca">{{ (food.data.ca).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Mg (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.fe">{{ (food.data.fe).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            P (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.mg">{{ (food.data.mg).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            K (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.p">{{ (food.data.p).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Na (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.k">{{ (food.data.k).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Zn (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.na">{{ (food.data.na).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Cu (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.zn">{{ (food.data.zn).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Mn (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.cu">{{ (food.data.cu).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            I (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.mn">{{ (food.data.mn).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Se (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.i">{{ (food.data.i).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin A (RE) (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.se">{{ (food.data.se).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Thiamin (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                           <span
                                               v-if="food.data.vitamin_a_rae">{{ (food.data.vitamin_a_rae).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Riboflavin (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.vitamin_a_re">{{ (food.data.vitamin_a_re).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Niacin (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.thiamin">{{ (food.data.thiamin).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin B6 (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                             <span
                                                 v-if="food.data.riboflavin">{{ (food.data.riboflavin).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Folic acid (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.niacin">{{ (food.data.niacin).toFixed(1) }}</span><span v-else>-</span>

                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin B12 (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.vitamin_b12">{{ (food.data.vitamin_b12).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Pantothenate (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.pantothenate">{{ (food.data.pantothenate).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Biotin (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span v-if="food.data.biotin">{{ (food.data.biotin).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin C (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.vitamin_c">{{ (food.data.vitamin_c).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin D (mcg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.vitamin_d">{{ (food.data.vitamin_d).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Vitamin E (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.vitamin_e">{{ (food.data.vitamin_e).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" ">
                                    <div class="food-item-content">
                                        <div class="food-item-content-title">
                                            Phytic Acid (mg)
                                        </div>
                                        <div class="food-item-content-body">
                                            <span
                                                v-if="food.data.phytic_acid">{{ (food.data.phytic_acid).toFixed(1) }}</span><span v-else>-</span>
                                        </div>
                                    </div>
                                </div>


                                <!--                                <div class="col-md-6 col-sm-12">
                                                                    <table class="food-details w-full">
                                                                        &lt;!&ndash;                                    <tr class="border-b">
                                                                                                                <th class="text-left p-2">Item</th>
                                                                                                                <th class="text-left p-2">Value</th>
                                                                                                            </tr>&ndash;&gt;

                                                                        <tr class="border-b border-t">
                                                                            <td>Group</td>
                                                                            <td class="text-left px-2">{{ food.data.group.name }}</td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Code</td>
                                                                            <td class="text-left px-2">{{ food.data.code }}</td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Moisture (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.moisture">{{
                                                                                        (food.data.moisture).toFixed(1)
                                                                                    }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Energy Calculated (kCal)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.energy_kcal">{{ (food.data.energy_kcal).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Energy Calculated (kJ)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.energy_kj">{{ (food.data.energy_kj).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Nitrogen (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.nitrogen">{{ (food.data.nitrogen).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Total protein (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.protein">{{ (food.data.protein).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Total Fats (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.fats">{{ (food.data.fats).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Saturated FA (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.saturated_fa ">{{ (food.data.saturated_fa).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Mono-unsaturated FA (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.monounsaturated_fa">{{ (food.data.monounsaturated_fa).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Polyunsaturated FA (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.polyunsaturated_fa">{{ (food.data.polyunsaturated_fa).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Cholesterol (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.cholesterol">{{ (food.data.cholesterol).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Total CHO for UDB</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.cho_udb">{{ (food.data.cho_udb).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Carbohydrate, avail. (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.cho_avail">{{ (food.data.cho_avail).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Total sugars (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.sugars">{{ (food.data.sugars).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Added sugar (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.added_sugar">{{ (food.data.added_sugar).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Total fibre (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.fibre">{{ (food.data.fibre).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Starch (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.starch">{{ (food.data.starch).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Ash (g)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.ash">{{ (food.data.ash).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Ca (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.ca">{{ (food.data.ca).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Fe (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.fe">{{ (food.data.fe).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Mg (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.mg">{{ (food.data.mg).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>P (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.p">{{ (food.data.p).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>K (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.k">{{ (food.data.k).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Na (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.na">{{ (food.data.na).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Zn (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.zn">{{ (food.data.zn).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Cu (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.cu">{{ (food.data.cu).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Mn (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.mn">{{ (food.data.mn).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>I (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.i">{{ (food.data.i).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Se (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.se">{{ (food.data.se).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin A (RAE) (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_a_rae">{{ (food.data.vitamin_a_rae).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin A (RE) (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_a_re">{{ (food.data.vitamin_a_re).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Thiamin (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.thiamin">{{ (food.data.thiamin).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Riboflavin (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.riboflavin">{{ (food.data.riboflavin).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Niacin (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.niacin">{{ (food.data.niacin).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin B6 (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_b6">{{ (food.data.vitamin_b6).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Folic acid (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.folic_acid">{{ (food.data.folic_acid).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin B12 (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_b12">{{ (food.data.vitamin_b12).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Pantothenate (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.pantothenate">{{ (food.data.pantothenate).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Biotin (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.biotin">{{ (food.data.biotin).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin C (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_c">{{ (food.data.vitamin_c).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin D (mcg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_d">{{ (food.data.vitamin_d).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Vitamin E (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.vitamin_e">{{ (food.data.vitamin_e).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Phytic Acid (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.phytic_acid">{{ (food.data.phytic_acid).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;
                                                                    </table>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12">
                                                                    <table class="food-details w-full">
                                                                        &lt;!&ndash;                                    <tr class="border-b">
                                                                                                                <th class="text-left p-2">Item</th>
                                                                                                                <th class="text-left p-2">Value</th>
                                                                                                            </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b border-t">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Group</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">{{ food.data.group.name }}</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Code</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">{{ food.data.code }}</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Moisture (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span v-if="food.data.moisture">{{ (food.data.moisture).toFixed(1) }}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Energy Calculated (kCal)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.energy_kcal">{{ (food.data.energy_kcal).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Energy Calculated (kJ)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.energy_kj">{{ (food.data.energy_kj).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Nitrogen (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.nitrogen">{{ (food.data.nitrogen).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Total protein (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.protein">{{ (food.data.protein).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Total Fats (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.fats">{{ (food.data.fats).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Saturated FA (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.saturated_fa ">{{ (food.data.saturated_fa ).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Mono-unsaturated FA (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.monounsaturated_fa">{{ (food.data.monounsaturated_fa).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Polyunsaturated FA (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.polyunsaturated_fa">{{ (food.data.polyunsaturated_fa).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Cholesterol (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.cholesterol">{{ (food.data.cholesterol).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Total CHO for UDB</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.cho_udb">{{ (food.data.cho_udb).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Carbohydrate, avail. (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.cho_avail">{{ (food.data.cho_avail).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Total sugars (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.sugars">{{ (food.data.sugars).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Added sugar (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.added_sugar">{{ (food.data.added_sugar).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Total fibre (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.fibre">{{ (food.data.fibre).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Starch (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.starch">{{ (food.data.starch).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Ash (g)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.ash">{{ (food.data.ash).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Ca (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.ca">{{ (food.data.ca).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Fe (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.fe">{{ (food.data.fe).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>Mg (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.mg">{{ (food.data.mg).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        &lt;!&ndash;                                       <tr class="border-b">&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td>P (mg)</td>&ndash;&gt;
                                                                        &lt;!&ndash;                                           <td class="text-left px-2">&ndash;&gt;
                                                                        &lt;!&ndash;                                               <span  v-if="food.data.p">{{ (food.data.p).toFixed(1)}}</span>&ndash;&gt;
                                                                        &lt;!&ndash;                                           </td>&ndash;&gt;
                                                                        &lt;!&ndash;                                       </tr>&ndash;&gt;

                                                                        <tr class="border-b">
                                                                            <td>K (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.k">{{ (food.data.k).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Na (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.na">{{ (food.data.na).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Zn (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.zn">{{ (food.data.zn).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Cu (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.cu">{{ (food.data.cu).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Mn (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.mn">{{ (food.data.mn).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>I (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.i">{{ (food.data.i).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Se (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.se">{{ (food.data.se).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin A (RAE) (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_a_rae">{{ (food.data.vitamin_a_rae).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin A (RE) (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_a_re">{{ (food.data.vitamin_a_re).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Thiamin (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.thiamin">{{ (food.data.thiamin).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Riboflavin (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.riboflavin">{{ (food.data.riboflavin).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Niacin (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.niacin">{{ (food.data.niacin).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin B6 (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_b6">{{ (food.data.vitamin_b6).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Folic acid (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.folic_acid">{{ (food.data.folic_acid).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin B12 (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_b12">{{ (food.data.vitamin_b12).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Pantothenate (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.pantothenate">{{ (food.data.pantothenate).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Biotin (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span v-if="food.data.biotin">{{ (food.data.biotin).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin C (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_c">{{ (food.data.vitamin_c).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin D (mcg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_d">{{ (food.data.vitamin_d).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Vitamin E (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.vitamin_e">{{ (food.data.vitamin_e).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="border-b">
                                                                            <td>Phytic Acid (mg)</td>
                                                                            <td class="text-left px-2">
                                                                                <span
                                                                                    v-if="food.data.phytic_acid">{{ (food.data.phytic_acid).toFixed(1) }}</span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>-->
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
    name: "Food",
    props: ['query', 'food', 'groups'],
    components: {AppLayout}

}
</script>

<style scoped>

</style>
