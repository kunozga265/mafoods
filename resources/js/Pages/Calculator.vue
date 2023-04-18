<template>
    <app-layout>
        <div class="uk-container">
            <div class="uk-border-rounded-large uk-background-top-center uk-background-cover
    uk-background-norepeat uk-light uk-inline uk-overflow-hidden uk-width-1-1"
                 :style="{
                            backgroundImage:`url(${fileUrl('images/header.jpg')})`
                         }"
            >
                <div class="uk-position-cover uk-header-overlay"></div>
                <div class="uk-position-relative" data-uk-grid>
                    <div class="uk-width-1-2@m uk-flex uk-flex-middle">
                        <div class="uk-padding-large uk-padding-remove-right">
                            <h1 class="uk-heading-small uk-margin-remove-top">Recipe Nutrition Calculator</h1>
<!--                            <p class="uk-text-secondary">Appropriately integrate technically sound value with scalable infomediaries
                                negotiate sustainable strategic theme areas</p>
                            <a class="uk-text-secondary uk-text-600 uk-text-small hvr-forward" href="sign-up.html">Sign up today<span
                                class="uk-margin-small-left" data-uk-icon="arrow-right"></span></a>-->
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                    </div>
                </div>
            </div>
        </div>

        <section class="uk-container">

            <div class="calculator">
                <div class="select-ingredient" >
                    <h3>Select Ingredient</h3>
                    <div class="select-section" >
                        <div>
                            <select v-model="selectedIngredient" class="">
                                <option value="Carrot">Carrot</option>
                                <option value="Beans">Beans</option>
                                <option value="Potatoes">Potatoes</option>
                                <option value="Tomatoes">Tomatoes</option>
                                <option value="Rice">Rice</option>
                            </select>
                        </div>
                        <div>
                            <button @click="addIngredient" class="button">Select</button>
                        </div>
                    </div>
                </div>

                <div class="nutrient-profile" >
                    <h3>Nutrient Profile</h3>
                    <div class="table" >
                        <div class="">
                            <table class="">
                                <thead class="">
                                <tr>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">
                                        Ingredient
                                    </th>
                                    <th scope="col">
                                        Cooking Method
                                    </th>
                                    <th scope="col">
                                        Weight (before)
                                    </th>
                                    <th scope="col">
                                        Weight (after)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr
                                    v-for="(ingredient,index) in ingredients"
                                   :key="index"
                                >
                                    <td>
                                        <i @click="removeIngredient(index)" class="mdi mdi-close-circle cursor"></i>
                                    </td>
                                    <td>
                                        {{ingredient}}
                                    </td>
                                    <td>
                                        <select class="">
                                            <option value="Raw">Raw</option>
                                            <option value="Boiled">Boiled</option>
                                            <option value="Dry Heat">Dry Heat</option>
                                            <option value="Toasted">Toasted</option>
                                            <option value="Baked">Baked</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="E.g. 120">
                                    </td>
                                    <td>
                                        <input type="text" placeholder="E.g. 140">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="recipe-data" >
                    <h3>Recipe Data</h3>
                    <div class="table" >
                        <div class="">
                            <table class="">
                                <thead class="">
                                <tr>
                                    <th scope="col">
                                        Ingredient
                                    </th>
                                    <th scope="col">
                                        PROTCNT(g)
                                    </th>
                                    <th scope="col">
                                        FAT(g)
                                    </th>
                                    <th scope="col">
                                        FATCE(g)
                                    </th>
                                    <th scope="col">
                                        FASAT(g)
                                    </th>
                                    <th scope="col">
                                        CHOAVLDF(g)
                                    </th>
                                    <th scope="col">
                                        SUGAR(g)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr
                                    v-for="(ingredient,index) in ingredients"
                                   :key="index"
                                >
                                    <td>
                                        {{ingredient}}
                                    </td>
                                    <td>
                                        <div>12</div>
                                        <div>RF: 0.98</div>
                                    </td>
                                    <td>
                                        <div>6</div>
                                        <div>RF: 0.98</div>
                                    </td>
                                    <td>
                                        <div>42</div>
                                        <div>RF: 1</div>
                                    </td>
                                    <td>
                                        <div>12</div>
                                        <div>RF: 0.98</div>
                                    </td>
                                    <td>
                                        <div>6</div>
                                        <div>RF: 0.98</div>
                                    </td>
                                    <td>
                                        <div>42</div>
                                        <div>RF: 1</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="calculations" >
                    <h3>Calculations</h3>
                    <div>
                        <input type="text" placeholder="Weight of Raw Materials">
                        <input type="text" placeholder="Final Cooked Weight">
                        <p class="yield-factor">Yield Factor: 0.98</p>
                    </div>
                </div>
            </div>
        </section>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Home",

    components:{
        AppLayout
    },

    data(){
        return{
            selectedIngredient:'Carrot',
            ingredients:[]
        }
    },
    methods:{
        addIngredient(){
            this.ingredients.push(this.selectedIngredient)
        },
        removeIngredient(index){
            this.ingredients.splice(index,1)
        },
    }

}
</script>

<style scoped>

</style>
