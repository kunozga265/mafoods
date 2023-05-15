<template>
    <app-layout>
        <div class="page-top style2 blackish opc7">
            <div class="fixed-bg2" :style="{ backgroundImage:`url(${fileUrl('images/page-top.jpg')})` }"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <h1 itemprop="headline">Recipe Calculator</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a :href="route('home')">Home</a></li>
                        <li class="breadcrumb-item active">Recipe Calculator</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block calculator">
                <div class="container">
                    <div class="steps">
                        <div>Step 1</div>
                        <h4>Enter Recipe Name</h4>
                    </div>
                    <div class="steps-content">
<!--                        <p>Enter Recipe Name</p>-->
                        <input v-model="recipe" type="text" placeholder="e.g. Carrot Cake">

                    </div>
                    <div class="steps">
                        <div>Step 2</div>
                        <h4>Add ingredients and amounts</h4>
                    </div>


<!--                                                    <option value="-1">Pick an ingredient</option>
                        <option
                            v-for="(food,index) in foods.data"
                            :key="index"
                            :value="food.id"
                        >
                            {{food.item}}
                        </option>
                    </select-2>-->
                    <div class="steps-content ingredients">
<!--                        <p>Pick An Ingredient</p>-->
                        <button :disabled="selectedIngredient == '-1'" type="button"  class="add" data-toggle="modal" data-target="#exampleModalCenter" >Add</button>
                        <select-2 class="select2 select2-container" v-model="selectedIngredient" :options="foodsList" />
                        <div class="row">
                            <div
                                v-for="(ingredient,index) in ingredientsList"
                                :key="index"
                                class="col-sm-12">
                                <div class="cause-box1 style2">
                                    <!--                                    <inertia-link :href="route('foods.show',food.code)">-->
                                    <div class="cause-info">
                                        <button type="button" @click="removeIngredient(index)"  class="remove" ><i class="fa fa-close"></i></button>
                                        <div class="weight">
                                            <span>GRAMS</span>
                                            <span class="line"></span>
                                            <input type="text" v-model="ingredient.grams">
                                        </div>

                                        <div class="content">
                                            <span class="cate"><span>{{ ingredient.group.name }}</span></span>
                                            <h2 itemprop="headline"><a href="#" title="" itemprop="url">{{ ingredient.item }}</a></h2>
                                            <div class="">
                                                <span>{{ingredient.food_type}}, </span>
                                                <span>{{ingredient.cooking_method}}</span>
                                            </div>
                                        </div>
<!--                                        <span class="dnt-gl">Code: <span class="price">{{ ingredient.code }}</span></span>-->
                                    </div>
                                    <!--                                    </inertia-link>-->
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form id="" class="form-wrap material" method="post" action="#" >
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLongTitle">Select Preparation Method</h5>
                                        </div>
                                        <div class="modal-body">
                                            <select-2 class="select2 select2-container" v-model="selectedFoodType" :options="foodTypesList" />
                                            <select-2 v-show="selectedFoodType != '-1' && selectedFoodType != '0'" class="select2 select2-container mt-10" v-model="selectedRetentionFactor" :options="retentionFactorsList" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                                            <button v-show="selectedRetentionFactor != '-1' || selectedFoodType == '0'" type="button" class="btn1" data-dismiss="modal" @click="addIngredient">Select</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="steps">
                        <div>Step 3</div>
                        <h4>Enter Recipe Weights</h4>
                    </div>
                    <div class="steps-content weights">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="weight-title">
                                    INITIAL WEIGHT (g)
                                </div>
                                <div class="weight">
                                    <!--                                <span>GRAMS</span>-->
                                    <input type="text" v-model="initialWeight" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="weight-title">
                                    FINAL WEIGHT (g)
                                </div>
                                <div class="weight">
                                    <!--                                <span>GRAMS</span>-->
                                    <input type="text" v-model="finalWeight">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="weight-title">
                                    WEIGHT CHANGE (%)
                                </div>
                                <div class="weight">
                                    <!--                                <span>GRAMS</span>-->
                                    <input type="text" v-model="weightChange" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div v-show="showResults" class="steps">
                        <div>Results</div>
&lt;!&ndash;                        <h4>Nutrition Information</h4>&ndash;&gt;
                    </div>-->
                    <div class="steps-content" v-show="showResults">
                        <div class="results">
                            <div class="row">
                                <div class="nutrition-info">
                                    <h3>Nutrition Information</h3>
                                    <!--                                <p>Recipe Name: {{recipe}}</p>-->
                                    <div>Yield Factor: {{yieldFactor.toFixed(2)}}</div>
                                    <div>Serving per 100g</div>
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <tr class="">
                                            <td>Sum of Proximates</td>
                                            <td class="text-left ">
                                                <span>{{ (results.moisture + results.protein + results.fats + results.cho_avail + results.fibre + results.ash).toFixed(2) }}</span>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Moisture (g)</td>
                                            <td class="text-left ">
                                                <span v-if="results.moisture">{{ (results.moisture).toFixed(2) }}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Energy Calculated (kCal)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.energy_kcal">{{ ((results.protein*4) + (results.fats*9) + (results.cho_avail*4) + (results.fibre*2)).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Energy Calculated (kJ)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.energy_kj">{{ ((results.protein*17) + (results.fats*37) + (results.cho_avail*17) + (results.fibre*8)).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Nitrogen (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.nitrogen">{{ (results.nitrogen).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Total protein (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.protein">{{ (results.protein).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Total Fats (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.fats">{{ (results.fats).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Saturated FA (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.saturated_fa ">{{ (results.saturated_fa ).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Mono-unsaturated FA (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.monounsaturated_fa">{{ (results.monounsaturated_fa).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Polyunsaturated FA (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.polyunsaturated_fa">{{ (results.polyunsaturated_fa).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Cholesterol (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.cholesterol">{{ (results.cholesterol).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Total CHO for UDB</td>
                                            <td class="text-left ">
                                                <span  v-if="results.cho_udb">{{ (results.cho_udb).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Carbohydrate, avail. (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.cho_avail">{{ (results.cho_avail).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Total sugars (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.sugars">{{ (results.sugars).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Added sugar (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.added_sugar">{{ (results.added_sugar).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Total fibre (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.fibre">{{ (results.fibre).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Starch (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.starch">{{ (results.starch).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Ash (g)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.ash">{{ (results.ash).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Ca (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.ca">{{ (results.ca).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Fe (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.fe">{{ (results.fe).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Mg (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.mg">{{ (results.mg).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>P (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.p">{{ (results.p).toFixed(2)}}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <tr class="">
                                            <td>K (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.k">{{ (results.k).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Na (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.na">{{ (results.na).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Zn (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.zn">{{ (results.zn).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Cu (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.cu">{{ (results.cu).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Mn (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.mn">{{ (results.mn).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>I (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.i">{{ (results.i).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Se (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.se">{{ (results.se).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin A (RAE) (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_a_rae">{{ (results.vitamin_a_rae).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin A (RE) (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_a_re">{{ (results.vitamin_a_re).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Thiamin (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.thiamin">{{ (results.thiamin).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Riboflavin (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.riboflavin">{{ (results.riboflavin).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Niacin (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.niacin">{{ (results.niacin).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin B6 (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_b6">{{ (results.vitamin_b6).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Folic acid (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.folic_acid">{{ (results.folic_acid).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin B12 (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_b12">{{ (results.vitamin_b12).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Pantothenate (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.pantothenate">{{ (results.pantothenate).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Biotin (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.biotin">{{ (results.biotin).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin C (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_c">{{ (results.vitamin_c).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin D (mcg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_d">{{ (results.vitamin_d).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Vitamin E (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.vitamin_e">{{ (results.vitamin_e).toFixed(2)}}</span>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td>Phytic Acid (mg)</td>
                                            <td class="text-left ">
                                                <span  v-if="results.phytic_acid">{{ (results.phytic_acid).toFixed(2)}}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button  v-if="!showResults" @click="logResults" type="submit" class="btn1" :disabled="!validation">
                            <svg v-show="form.processing" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                            Show results
                        </button>
                        <button  v-else @click="generatePDF" class="btn1">
                            <svg v-show="loading" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                            Generate PDF
                        </button>
                    </div>
                </div>
            </div>
        </section>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Select2 from 'v-select2-component';

export default {
    name: "RecipeCalculator",
    props:['foods','foodTypes'],
    components:{
        AppLayout,
        Select2
    },

    data(){
        return{
            recipe:"",
            selectedIngredient:"-1",
            selectedFoodType:"-1",
            selectedRetentionFactor:"-1",
            ingredientsList:[],
            finalWeight:0,
            form: this.$inertia.form({}),
            showResults:false,
            loading:false,
        }
    },
    computed:{
        foodsList(){
            let arr = [{
                id:-1,
                text:"Pick an ingredient"
            }]
            for (let x in this.foods.data){
                arr.push({
                    'id' : this.foods.data[x].id,
                    'text' : this.foods.data[x].item,
                })
            }
            return arr
        },
        foodTypesList(){
            let arr = [
                {
                    id:-1,
                    text:"Select Food Group"
                },
                {
                    id:0,
                    text:"None"
                },
            ]
            for (let x in this.foodTypes.data){
                arr.push({
                    'id' : this.foodTypes.data[x].id,
                    'text' : this.foodTypes.data[x].item,
                })
            }
            return arr
        },
        retentionFactorsList(){
            let arr = [{
                id:-1,
                text:"Select Cooking Method"
            }]
            for (let x in this.foodTypes.data){
                if(parseInt(this.foodTypes.data[x].id) === parseInt(this.selectedFoodType)) {
                    let retentionFactors = this.foodTypes.data[x].retention_factors
                    for (let y in retentionFactors) {
                        arr.push({
                            'id': retentionFactors[y].id,
                            'text': retentionFactors[y].cooking_method,
                        })
                    }
                    break;
                }
            }
            return arr
        },
        initialWeight(){
            let grams = 0;

            for (let x in this.ingredientsList)
                grams += parseFloat(this.ingredientsList[x].grams)

            return grams
        },
        weightChange(){
            if (this.initialWeight !== 0 && this.finalWeight !== null && this.finalWeight.length > 1 && !isNaN(this.finalWeight))
                return (((this.finalWeight - this.initialWeight)/this.initialWeight) * 100).toFixed(2)
            else
                return ""
        },
        recipeNutrientValues(){
            let arr= {
                "moisture":0,
                "energy_kcal":0,
                "energy_kj":0,
                "nitrogen":0,
                "protein":0,
                "fats":0,
                "saturated_fa":0,
                "monounsaturated_fa":0,
                "polyunsaturated_fa":0,
                "cholesterol":0,
                "cho_udb":0,
                "cho_avail":0,
                "sugars":0,
                "added_sugar":0,
                "fibre":0,
                "starch":0,
                "ash":0,
                "mn":0,
                "i":0,
                "se":0,
                "vitamin_a_re":0,
                "phytic_acid":0,

                //corrected by retention factors
                "ca":0,
                "fe":0,
                "mg":0,
                "p":0,
                "k":0,
                "na":0,
                "zn":0,
                "cu":0,
                "vitamin_a_rae":0,
                "thiamin":0,
                "riboflavin":0,
                "niacin":0,
                "vitamin_b6":0,
                "folic_acid":0,
                "vitamin_b12":0,
                "pantothenate":0,
                "biotin":0,
                "vitamin_c":0,
                "vitamin_d":0,
                "vitamin_e":0,
            }

            for (let x in this.ingredientsList){
                arr.moisture += parseFloat(this.ingredientsList[x].moisture) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.energy_kcal += parseFloat(this.ingredientsList[x].energy_kcal) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.energy_kj += parseFloat(this.ingredientsList[x].energy_kj) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.nitrogen += parseFloat(this.ingredientsList[x].nitrogen) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.protein += parseFloat(this.ingredientsList[x].protein) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.fats += parseFloat(this.ingredientsList[x].fats) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.saturated_fa += parseFloat(this.ingredientsList[x].saturated_fa) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.monounsaturated_fa += parseFloat(this.ingredientsList[x].monounsaturated_fa) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.polyunsaturated_fa += parseFloat(this.ingredientsList[x].polyunsaturated_fa) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.cholesterol += parseFloat(this.ingredientsList[x].cholesterol) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.cho_udb += parseFloat(this.ingredientsList[x].cho_udb) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.cho_avail += parseFloat(this.ingredientsList[x].cho_avail) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.sugars += parseFloat(this.ingredientsList[x].sugars) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.added_sugar += parseFloat(this.ingredientsList[x].added_sugar) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.fibre += parseFloat(this.ingredientsList[x].fibre) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.starch += parseFloat(this.ingredientsList[x].starch) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.ash += parseFloat(this.ingredientsList[x].ash) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.mn += parseFloat(this.ingredientsList[x].mn) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.i += parseFloat(this.ingredientsList[x].i) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.se += parseFloat(this.ingredientsList[x].se) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_a_re += parseFloat(this.ingredientsList[x].vitamin_a_re) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.phytic_acid += parseFloat(this.ingredientsList[x].phytic_acid) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.ca += parseFloat(this.ingredientsList[x].ca) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.fe += parseFloat(this.ingredientsList[x].fe) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.mg += parseFloat(this.ingredientsList[x].mg) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.p += parseFloat(this.ingredientsList[x].p) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.k += parseFloat(this.ingredientsList[x].k) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.na += parseFloat(this.ingredientsList[x].na) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.zn += parseFloat(this.ingredientsList[x].zn) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.cu += parseFloat(this.ingredientsList[x].cu) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_a_rae += parseFloat(this.ingredientsList[x].vitamin_a_rae) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.thiamin += parseFloat(this.ingredientsList[x].thiamin) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.riboflavin += parseFloat(this.ingredientsList[x].riboflavin) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.niacin += parseFloat(this.ingredientsList[x].niacin) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_b6 += parseFloat(this.ingredientsList[x].vitamin_b6) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.folic_acid += parseFloat(this.ingredientsList[x].folic_acid) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_b12 += parseFloat(this.ingredientsList[x].vitamin_b12) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.pantothenate += parseFloat(this.ingredientsList[x].pantothenate) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.biotin += parseFloat(this.ingredientsList[x].biotin) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_c += parseFloat(this.ingredientsList[x].vitamin_c) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_d += parseFloat(this.ingredientsList[x].vitamin_d) * (parseFloat(this.ingredientsList[x].grams) / 100)
                arr.vitamin_e += parseFloat(this.ingredientsList[x].vitamin_e) * (parseFloat(this.ingredientsList[x].grams) / 100)
            }

            return arr
        },
        results(){
            return {
                "moisture":((this.recipeNutrientValues.moisture- (this.initialWeight - this.finalWeight)))/this.finalWeight * 100,
                "energy_kcal":(this.recipeNutrientValues.energy_kcal / this.finalWeight) * 100,
                "energy_kj":(this.recipeNutrientValues.energy_kj / this.finalWeight) * 100,
                "nitrogen":(this.recipeNutrientValues.nitrogen / this.finalWeight) * 100,
                "protein":(this.recipeNutrientValues.protein / this.finalWeight) * 100,
                "fats":(this.recipeNutrientValues.fats / this.finalWeight) * 100,
                "saturated_fa":(this.recipeNutrientValues.saturated_fa / this.finalWeight) * 100,
                "monounsaturated_fa":(this.recipeNutrientValues.monounsaturated_fa / this.finalWeight) * 100,
                "polyunsaturated_fa":(this.recipeNutrientValues.polyunsaturated_fa / this.finalWeight) * 100,
                "cholesterol":(this.recipeNutrientValues.cholesterol / this.finalWeight) * 100,
                "cho_udb":(this.recipeNutrientValues.cho_udb / this.finalWeight) * 100,
                "cho_avail":(this.recipeNutrientValues.cho_avail / this.finalWeight) * 100,
                "sugars":(this.recipeNutrientValues.sugars / this.finalWeight) * 100,
                "added_sugar":(this.recipeNutrientValues.added_sugar / this.finalWeight) * 100,
                "fibre":(this.recipeNutrientValues.fibre / this.finalWeight) * 100,
                "starch":(this.recipeNutrientValues.starch / this.finalWeight) * 100,
                "ash":(this.recipeNutrientValues.ash / this.finalWeight) * 100,
                "mn":(this.recipeNutrientValues.mn / this.finalWeight) * 100,
                "i":(this.recipeNutrientValues.i / this.finalWeight) * 100,
                "se":(this.recipeNutrientValues.se / this.finalWeight) * 100,
                "vitamin_a_re":(this.recipeNutrientValues.vitamin_a_re / this.finalWeight) * 100,
                "phytic_acid":(this.recipeNutrientValues.phytic_acid / this.finalWeight) * 100,

                //corrected by retention factors
                "ca":(this.recipeNutrientValues.ca / this.finalWeight) * 100,
                "fe":(this.recipeNutrientValues.fe / this.finalWeight) * 100,
                "mg":(this.recipeNutrientValues.mg / this.finalWeight) * 100,
                "p":(this.recipeNutrientValues.p / this.finalWeight) * 100,
                "k":(this.recipeNutrientValues.k / this.finalWeight) * 100,
                "na":(this.recipeNutrientValues.na / this.finalWeight) * 100,
                "zn":(this.recipeNutrientValues.zn / this.finalWeight) * 100,
                "cu":(this.recipeNutrientValues.cu / this.finalWeight) * 100,
                "vitamin_a_rae":(this.recipeNutrientValues.vitamin_a_rae / this.finalWeight) * 100,
                "thiamin":(this.recipeNutrientValues.thiamin / this.finalWeight) * 100,
                "riboflavin":(this.recipeNutrientValues.riboflavin / this.finalWeight) * 100,
                "niacin":(this.recipeNutrientValues.niacin / this.finalWeight) * 100,
                "vitamin_b6":(this.recipeNutrientValues.vitamin_b6 / this.finalWeight) * 100,
                "folic_acid":(this.recipeNutrientValues.folic_acid / this.finalWeight) * 100,
                "vitamin_b12":(this.recipeNutrientValues.vitamin_b12 / this.finalWeight) * 100,
                "pantothenate":(this.recipeNutrientValues.pantothenate / this.finalWeight) * 100,
                "biotin":(this.recipeNutrientValues.biotin / this.finalWeight) * 100,
                "vitamin_c":(this.recipeNutrientValues.vitamin_c / this.finalWeight) * 100,
                "vitamin_d":(this.recipeNutrientValues.vitamin_d / this.finalWeight) * 100,
                "vitamin_e":(this.recipeNutrientValues.vitamin_e / this.finalWeight) * 100,
            }
        },
        yieldFactor(){
            return (1 - (this.initialWeight - this.finalWeight)/this.initialWeight)
        },
        validation(){
            return !isNaN(this.yieldFactor) && !isNaN(this.finalWeight) && this.finalWeight > 0 && (this.recipe.length > 0)
        }
    },
    watch:{
        selectedIngredient(){
            this.selectedFoodType = "-1"
        },
        selectedFoodType(){
            this.selectedRetentionFactor = "-1"
        },
        results(){
            this.showResults=false
        }
    },
    methods:{
        addIngredient(){
            let _ingredient;
            let _foodType;
            let retentionFactors;
            let _retentionFactor;

            //get ingredient
            for (let x in this.foods.data){
                if (parseInt(this.selectedIngredient) === parseInt(this.foods.data[x].id)){
                    _ingredient = this.foods.data[x];
                    break;
                }
            }

            if (parseInt(this.selectedFoodType) === 0){
                    _retentionFactor = {
                        "ca": 1,
                        "fe": 1,
                        "mg": 1,
                        "p": 1,
                        "k": 1,
                        "na": 1,
                        "zn": 1,
                        "cu": 1,
                        "vitamin_a_rae": 1,
                        "thiamin": 1,
                        "riboflavin": 1,
                        "niacin": 1,
                        "vitamin_b6": 1,
                        "folic_acid": 1,
                        "vitamin_b12": 1,
                        "pantothenate": 1,
                        "biotin": 1,
                        "vitamin_c": 1,
                        "vitamin_d": 1,
                        "vitamin_e": 1,
                        "cooking_method":"None"
                }

                _foodType = {
                        'item' : "None",
                }
            }else {
                //get Food Type
                for (let y in this.foodTypes.data){
                    if (parseInt(this.selectedFoodType) === parseInt(this.foodTypes.data[y].id)){
                        _foodType = this.foodTypes.data[y];
                        break;
                    }
                }

                retentionFactors = _foodType.retention_factors;

                //get retention factor
                for (let z in retentionFactors){
                    if (parseInt(this.selectedRetentionFactor) === parseInt(retentionFactors[z].id)){
                        _retentionFactor = retentionFactors[z];
                        break;
                    }
                }
            }

            this.ingredientsList.push({
                //default value
                "code": _ingredient.code,
                "ref_no": _ingredient.ref_no,
                "item": _ingredient.item,
                "group": _ingredient.group,
                "moisture": _ingredient.moisture,
                "energy_kcal": _ingredient.energy_kcal,
                "energy_kj": _ingredient.energy_kj,
                "nitrogen": _ingredient.nitrogen,
                "protein": _ingredient.protein,
                "fats": _ingredient.fats,
                "saturated_fa": _ingredient.saturated_fa,
                "monounsaturated_fa": _ingredient.monounsaturated_fa,
                "polyunsaturated_fa": _ingredient.polyunsaturated_fa,
                "cholesterol": _ingredient.cholesterol,
                "cho_udb": _ingredient.cho_udb,
                "cho_avail": _ingredient.cho_avail,
                "sugars": _ingredient.sugars,
                "added_sugar": _ingredient.added_sugar,
                "fibre": _ingredient.fibre,
                "starch": _ingredient.starch,
                "ash": _ingredient.ash,
                "mn": _ingredient.mn,
                "i": _ingredient.i,
                "se": _ingredient.se,
                "vitamin_a_re": _ingredient.vitamin_a_re,
                "phytic_acid": _ingredient.phytic_acid,

                //corrected by retention factors
                "ca": _ingredient.ca * _retentionFactor.ca,
                "fe": _ingredient.fe * _retentionFactor.fe,
                "mg": _ingredient.mg * _retentionFactor.mg,
                "p": _ingredient.p * _retentionFactor.p,
                "k": _ingredient.k * _retentionFactor.k,
                "na": _ingredient.na * _retentionFactor.na,
                "zn": _ingredient.zn * _retentionFactor.zn,
                "cu": _ingredient.cu * _retentionFactor.cu,
                "vitamin_a_rae": _ingredient.vitamin_a_rae * _retentionFactor.vitamin_a_rae,
                "thiamin": _ingredient.thiamin * _retentionFactor.thiamin,
                "riboflavin": _ingredient.riboflavin * _retentionFactor.riboflavin,
                "niacin": _ingredient.niacin * _retentionFactor.niacin,
                "vitamin_b6": _ingredient.vitamin_b6 * _retentionFactor.vitamin_b6,
                "folic_acid": _ingredient.folic_acid * _retentionFactor.folic_acid,
                "vitamin_b12": _ingredient.vitamin_b12 * _retentionFactor.vitamin_b12,
                "pantothenate": _ingredient.pantothenate * _retentionFactor.pantothenate,
                "biotin": _ingredient.biotin * _retentionFactor.biotin,
                "vitamin_c": _ingredient.vitamin_c * _retentionFactor.vitamin_c,
                "vitamin_d": _ingredient.vitamin_d * _retentionFactor.vitamin_d,
                "vitamin_e": _ingredient.vitamin_e * _retentionFactor.vitamin_e,

                //food type
                "food_type": _foodType.item,
                "cooking_method": _retentionFactor.cooking_method,

                //additions
                "grams":0

            })

            this.selectedIngredient = "-1"
        },
        removeIngredient(index){
            this.ingredientsList.splice(index,1)
        },
        logResults(){
            this.form
                .transform(data => ({
                    ... data,
                    ingredients:this.ingredients,
                    results:this.results,
                    initialWeight:this.initialWeight,
                    finalWeight:this.finalWeight,
                }))
                .post(this.route('recipe.calculator.store'),{
                    preserveScroll: true,
                    onSuccess: () => this.showResults = true,
                })
        },
        generatePDF(){
            this.loading = true;

            axios.post(this.fileUrl("api/recipe/generate"),{
                recipe: this.recipe,
                yieldFactor: this.yieldFactor,
                results: this.results,

            },{ responseType: "blob" }).then(res => {
                const headerContentDisp = res.headers["content-disposition"];
                const filename =
                    headerContentDisp &&
                    headerContentDisp.split("filename=")[1].replace(/["']/g, ""); // TODO improve parcing
                const contentType = res.headers["content-type"];

                const blob = new Blob([res.data], { contentType });
                const href = window.URL.createObjectURL(blob);

                const el = document.createElement("a");
                el.setAttribute("href", href);
                el.setAttribute(
                    "download",
                    filename || (config && config.filename) || "someFile"
                );
                el.click();

                this.loading = false;

                window.URL.revokeObjectURL(blob);
                return res;
            }).catch(res =>
                console.log(res)
            );

        }
    }

}
</script>

<style scoped>

</style>
