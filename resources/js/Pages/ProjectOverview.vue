<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Project Overview</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block whitish hgh-opc">
                <div class="fixed-bg" style="background: url(images/resource/parallax2.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline"><i>About</i> MAFOODS</h4>
                                <span>Project Overview</span>
                                <p itemprop="description">Malawi Food Data System is an integrated data system that provides expanded nutrient profile data and a recipe calculator that generates useful nutrient information.</p>
                            </div>
                            <div class="p">
                                <p>The Government of Malawi (GoM) has developed the first edition of the Malawian Food Composition Table (MFCT) which describes the content of commonly-consumed Malawian food items in terms of their nutrients and energy. Food composition data form the basis of all practices in human nutrition and health. It is therefore essential to have a reliable country-specific food composition database.</p>
                                <p>For many years, Malawi has relied on food composition data from other countries. However, the use of data from other sources is challenging as well as inaccurate due to the potential for significant variability in nutrition content as a function of different processing methods, variations in recipe preparations of composite dishes as well as geographical differences in food cultivation. In light of this, it was critical for Malawi to develop a local food composition database to address its country-specific nutrition concerns and meet current demand due to technological advances. International tools, guidelines and standards were used in developing the food composition table to ensure an accurate, reliable and trustworthy scientific tool. This food composition table will be used in various ways by nutritionists, dietitians, physicians, food technologists, epidemiologists, food manufacturers, public health scientists, economists and research institutions.</p>
                                <p>The GoM, through the Department of Nutrition and HIV/AIDS (DNHA), is the custodian of the Malawian Food Composition Database and Table. The Malawi food composition program which will be responsible for maintaining and updating of the food composition database and tables will be referred to as “The Malawian Food Data System” (MAFOODS). The DNHA will provide overall management and oversee MAFOODS. The DNHA will also provide operational support to the Malawian food data unit within its jurisdiction to ensure that the data are safe and continuously updated.</p>
                                <p>To ensure continuous and up-to-date information in the database, the GoM, in collaboration with Malawian research institutions, will update the food composition database on a regular basis with the Lilongwe University of Agriculture & Natural Resources (LUANAR) taking a lead role due to its comparative advantage of access to active research activities in generating food composition data in collaboration with other academic institutions. In addition to obtaining data, information generated through routine mandated roles and functions within established institutions such as research stations, will also be a valuable source of food composition data for compilation.</p>
                                <p>The Policy Advisory Team (PAT) which provides policy guidance on nutrition in Malawi, will provide overall guidance and support implementation and management of the Malawi Food composition data Program. The committee will act as an advisory body that will promote the science of food composition data in Malawi. The DNHA will work hand in hand with PAT to devise an updating plan and identify opportunities and partnerships that will lead to further research and the establishment of a comprehensive Malawian food composition database. In addition to the PAT, the Nutrition Research and Surveillance Technical Working Group which is under the National Nutrition Committee will actively support implementation of food composition data activities.</p>
                                <p>The technical working group will focus on identifying key activities and supporting them in order to ensure that the goals and objectives of the food composition program are met.</p>

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
    name: "ProjectOverview",
    components: {AppLayout},
    data(){
        return{

        }
    },
}
</script>

<style scoped>

</style>
