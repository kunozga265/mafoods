<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Frequently Asked Questions</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div
                            v-for="(faq,index) in page.data.contents"
                            :key="index"
                            class="col-sm-12">
                            <div class="faq">
                                    <div class="number">
                                        {{index + 1}}
                                    </div>
                                    <div class="question">
                                        <div>
                                            <div class="heading">
                                                {{ faq.question }}
                                            </div>
                                            <div class="answer" v-html="faq.answer"></div>
                                        </div>

                                    </div>
<!--                                    <div class="plus">+</div>-->
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
    name: "FAQS",
    props:['page'],
    components: {AppLayout},
    data(){
        return{
            selectedFaq:0,
            faqs:[
                {
                    question:"Where can l find Nutrient Composition of Commonly Consumed Malawian Foods?",
                    answer:"<p>Nutrient composition of Malawian Foods is available from the Malawian Food Database (MAFOOD). The data can be accessed in an electronic PDF format in the following websites Lilongwe University of Agriculture and Natural Resources, Tufts and Department of Nutrition, HIV and AIDS. The International Langual TM Food Composition Database System AFRO-FOODS page</p>" +
                        "<ul>" +
                        "<li>Lilongwe University of Agriculture and Natural Resources, Tufts and Department of Nutrition, HIV and AIDS</li>" +
                        "<li>The International Langual TM Food Composition Database System</li>" +
                        "<li>AFRO-FOODS page</li></ul>"
                },
                {
                    question:"Where can l get the information on the reference source for a specific nutrient and food item used in the database?",
                    answer:"<p>The reference source for each food item and nutrient of the Malawian Food Database are recorded in the reference database.</p>"
                },
                {
                    question:"Are the values in the MAFOOD of Malawian Origin?",
                    answer:"<p>NO, not all foods values are from Malawi. 63% Malawi, 30% South Africa,4% West Africa, 2% United States of America, 1% Mozambique and 23% Recipes.</p>"
                },
                {
                    question:"How is energy value of the food items in the MAFOOD calculated?",
                    answer:"<p>The energy values were calculated using the following formulas: Calculated as:</p><p>Energy (kCal)= [Protein (g) × 4kcal] + [Fat (g) × 9kcal] + [Total Carbohydrate (g) × 4kcal]\n</p>"
                },
                {
                    question:"What is the difference between total carbohydrate and available carbohydrate?",
                    answer:"<p>Total Carbohydrate is the sum of all available carbohydrates plus dietary fibre whereas available carbohydrates includes sugars that are glycogenic and polysaccharides hydrolysed in the digestive tract of humans (Greenfield and Southgate, 2003).</p>"
                },
                {
                    question:"Do foods in the Malawian Food Database have salt added when calculating recipes?",
                    answer:"<p>The recipe foods (calculated) do not include salt as an ingredient except the processed foods where sodium and chloride are added during processing. </p>"
                },
                {
                    question:"What should I do if I don’t find a food item I am looking for in the Malawian Food Database?",
                    answer:"<p>If you have challenges finding the food item you want try to enter the food item in a different way, for example if you cannot find cassava flour try flour, cassava. There are a lot of foods available in the Malawian markets which you cannot find in the Malawian Food Database. As such if you feel that the food is commonly consumed by Malawians you are working with feel free to register that food by sending an email to ffhs@luanar.ac.mw and secretary@dnha.gov.mw </p>"
                },
                {
                    question:"What does ‘zero’ or ‘trace’ value mean?",
                    answer:"<p>The use of ‘zero’ means that any amount present is below the detection or quantification limits of the method of measurement used. " +
                        "\nThe term trace value (“tr”) means that the nutrient is present in that food, but at such low levels that it cannot be adequately measured. A trace value can also be regarded as nutritionally insignificant as it is too small to be expressed in the unit of measurement used in the specific food database (Greenfield and Southgate, 2003)</p>"
                },
                {
                    question:"How many food groups are in the Malawian Food Database?",
                    answer:"<p>Eight (8) food groups are aligned according to Malawi food groups. Food items in the database are grouped into the following categories:\n" +
                        "MW01_Staples\n" +
                        "MW02_Legumes\n" +
                        "MW03_Animal Foods\n" +
                        "MW04_Vegetables\n" +
                        "MW05_Fruits\n" +
                        "MW06_Fats and Oils\n" +
                        "MW07_Baby Foods\n" +
                        "MW08_Miscellaneous\n</p>"
                },
                {
                    question:"How are food items described in the Malawian Food Database?",
                    answer:"<p>Food items are described using the following naming system: \n<strong>Food item, process state, English name, Scientific name, (local Malawi name) </strong>" +
                        "\nFor deep fried food with fat absorption between 8 to 25 percent, a 10 percent uptake of fat was assumed (Dunford, n/d).</p>"
                },
                {
                    question:"How can I read the tables in the Database? ",
                    answer:"<p>There are three main Columns in the Nutrient Tables:\n" +
                        "Column 1: The following information, presented as follows:</p>" +
                        "<ul>" +
                        "<li>The food group code (alphanumeric), separated by an underscore, followed by a four-digit food code number, appears in first row. e.g. MW01 represents the staples group; while 0003 represents the food item code\</li>" +
                        "<li>The second row of first column, lists the food group name: e.g. Staples</li>" +
                        "<li>The third row of first column, refers to the main reference source number for the nutrient composition of the food item: e.g. R44 refers to, Recipe 44; or number 2 refers to article number 2</li></ul>" +
                        "<p>Column 2: The food item name is presented as a description of the food item, its process state, English name, scientific name, and (local Malawian name). E.g. Bread, wheat, brown, homemade \n</p>" +
                        "<p>Column 3: lists nutrient values for 42 components. The full reference is listed in the References section. Values are presented per 100g edible portion.\n</p>" +
                        "<p>Black font means the value is from original Malawian food product analytical data.\n</p>" +
                        "<p>Blue font means the value was factored from a similar food item in another food composition database or scientific literature.\n</p>" +
                        "<p>Component values in italics reports on crude values.\n</p>" +
                        "<p>Square brackets [ ] mean compilers are not confident with value reported. \n</p>" +
                        "<p>Round brackets ( ) indicate that the value reported is based on an assumption. \n</p>" +
                        "<p>Curly brackets { } with an asterisk* means that the quality checks of Ash and some of the proximate did not add up, which is explainable due to the borrowing of data from matched sources. \n</p>" +
                        "<p> Blank values equate to missing data, i.e. reliable information not found, or the information.\n</p>"
                },
                {
                    question:"What are limitations of food composition data?",
                    answer:"<ol><li>Limited coverage of foods" +
                        "\nA database probably won't ever be finished. This is because there are so many foods available and new goods are always being introduced to the market. Information about nutrients in foods is not always readily available due to the high expense of analysis. According to the dietary habits of the local population, foods to be include in the national database should be prioritized for inclusion. Data from scientific literature, national food dietary surveys and publications on dietary intake and patters in Malawi formed a great part of data contribution to the priority food list. The Malawi Food Database is composed of food commonly used by Malawian.</li>" +
                        "<li>Limited coverage of nutrients" +
                        "The low number of nutrients (42) contained in a database is due in part to the expensive expense of food analysis as well as the high level of instrumentation and analytical expertise required. Even when nutrient values are taken from the databases of other nations, it is typical to find that certain nutrients are not covered entirely. The nutrients included also consider changes in dietary preferences throughout time. According to the needs stated by users and nutrients of public health significance, priority was given to recording certain nutrients in the Malawian Food Database </li></ol>"
                },
                {
                    question:"How do I estimate nutrient value of a food item based on recipe if the food item is not available in the database?",
                    answer:"<p>Guidelines on how to use a recipe calculation to estimate the nutrient content of a food item is given in the Recipe Calculations section of the electronic PDF FCT page 16.</p>"
                },
                {
                    question:"How do missing values affect interpretation of analysed dietary intake data?",
                    answer:"<p>You must be aware of any missing values in the food composition database as a user of data on food composition. Values that are missing should not be interpreted as zero. If a value is absent, it signifies that the nutrient is still unknown. Missing values should be noted or the results should be interpreted with the knowledge that missing values result in an underestimating of a person's or a population's nutritional intake.</p>" +
                        "<p>It is customary to estimate values using other reference sources or extrapolating the values from comparable foods in order to decrease the amount of missing values in a food composition database. Estimated values that have been created by carefully interpreting data on related foods are permitted in nutritional studies as long as their usage is made explicit.</p>  "
                },
                {
                    question:"Can I use the Malawian food database in another format?",
                    answer:"<p>Before any copy of the Malawian food database is reproduced, a written request must be submitted to DNHA who will give permission to use the database. Even though the database may be used for educational purposes or research a request should be sent in writing forwarded to secretary@dnha.gov.mw</p>  "
                },
            ]
        }
    },
    computed:{

    },
    methods:{

    }
}
</script>

<style scoped>

</style>
