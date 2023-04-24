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
                        <input type="text" placeholder="e.g. Carrot Cake">

                    </div>
                    <div class="steps">
                        <div>Step 2</div>
                        <h4>Add ingredients and amounts</h4>
                    </div>
                    <div class="steps-content ingredients">
<!--                        <p>Pick An Ingredient</p>-->
                        <button type="button"  class="add" data-toggle="modal" data-target="#exampleModalCenter" >Add</button>
                        <select v-model="selectedIngredient">
                            <option value="-1">Pick an ingredient</option>
                            <option
                                v-for="(food,index) in foods.data"
                                :key="index"
                                :value="food.id"
                            >
                                {{food.item}}
                            </option>
                        </select>

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
                                            <select v-model="selectedIngredient">
                                                <option value="-1">Select Food Item</option>
                                                <option
                                                    v-for="(food,index) in foods.data"
                                                    :key="index"
                                                    :value="food.id"
                                                >
                                                    {{food.item}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                                            <button type="submit" class="default-btn">Upload</button>
                                        </div>
                                    </form>

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
    name: "Home",
    props:['foods'],
    components:{
        AppLayout
    },

    data(){
        return{
            selectedIngredient:"-1",
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
