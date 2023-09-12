<template>
    <admin-layout>
        <template #header>
            Composition Table - Create
        </template>

        <template #breadcrumbs>
            <li class="breadcrumb-item"><a :href="route('admin.composition-table')">Composition Table</a></li>
            <li class="breadcrumb-item active">Create</li>
        </template>


        <section>
            <div class="card">
                <form @submit.prevent="submit"  class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="item">Item</label>
                            <input type="text" v-model="form.item" id="item">
                            <div class="error-message" v-if="$page.props.errors">{{$page.props.errors.item }}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="code">Code</label>
                            <input type="text" v-model="form.code" id="code">
                            <div class="error-message" v-if="$page.props.errors">{{$page.props.errors.code }}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="group">Group</label>
                            <div>
                                <select id="group" class="select2 select2-container" v-model="form.group">
                                    <option
                                        v-for="(group, index) in groups.data"
                                        :key="index"
                                        :value="group.id">
                                        {{ group.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="error-message" v-if="$page.props.errors">{{$page.props.errors.group }}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="source">Source</label>
                            <div>
                                <select id="source" class="select2 select2-container" v-model="form.source">
                                    <option
                                        v-for="(source, index) in sources"
                                        :key="index"
                                        :value="source.id">
                                        {{ source.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="error-message" v-if="$page.props.errors">{{$page.props.errors.source }}</div>
                        </div>
                          <div class="col-md-6">
                            <label for="ref_no">REF NO</label>
                            <input type="text" v-model="form.ref_no" id="ref_no">
                        </div>
                        <div class="col-md-6">
                            <label for="moisture">Moisture (g)</label>
                            <input type="text" v-model="form.moisture" id="moisture">
                        </div>
                        <div class="col-md-6">
                            <label for="energy_kcal">Energy Calculated (kCal)</label>
                            <input type="text" v-model="form.energy_kcal" id="energy_kcal">
                        </div>
                        <div class="col-md-6">
                            <label for="energy_kj">Energy Calculated (kJ)</label>
                            <input type="text" v-model="form.energy_kj" id="energy_kj">
                        </div>
                        <div class="col-md-6">
                            <label for="nitrogen">Nitrogen (g)</label>
                            <input type="text" v-model="form.nitrogen" id="nitrogen">
                        </div>
                        <div class="col-md-6">
                            <label for="protein">Total protein (g)</label>
                            <input type="text" v-model="form.protein" id="protein">
                        </div>
                        <div class="col-md-6">
                            <label for="fats">Total Fats (g)</label>
                            <input type="text" v-model="form.fats" id="fats">
                        </div>
                        <div class="col-md-6">
                            <label for="saturated_fa">Saturated FA (g)</label>
                            <input type="text" v-model="form.saturated_fa" id="saturated_fa">
                        </div>
                        <div class="col-md-6">
                            <label for="monounsaturated_fa">Mono-unsaturated FA (g)</label>
                            <input type="text" v-model="form.monounsaturated_fa" id="monounsaturated_fa">
                        </div>
                        <div class="col-md-6">
                            <label for="polyunsaturated_fa">Polyunsaturated FA (g)</label>
                            <input type="text" v-model="form.polyunsaturated_fa" id="polyunsaturated_fa">
                        </div>
                        <div class="col-md-6">
                            <label for="cholesterol">Cholesterol (mg)</label>
                            <input type="text" v-model="form.cholesterol" id="cholesterol">
                        </div>
                        <div class="col-md-6">
                            <label for="cho_udb">Total CHO for UDB</label>
                            <input type="text" v-model="form.cho_udb" id="cho_udb">
                        </div>
                        <div class="col-md-6">
                            <label for="cho_avail">Carbohydrate, avail. (g)</label>
                            <input type="text" v-model="form.cho_avail" id="cho_avail">
                        </div>
                        <div class="col-md-6">
                            <label for="sugars">Total sugars (g)</label>
                            <input type="text" v-model="form.sugars" id="sugars">
                        </div>
                        <div class="col-md-6">
                            <label for="added_sugar">Added sugar (g)</label>
                            <input type="text" v-model="form.added_sugar" id="added_sugar">
                        </div>
                        <div class="col-md-6">
                            <label for="fibre">Total fibre (g)</label>
                            <input type="text" v-model="form.fibre" id="fibre">
                        </div>
                        <div class="col-md-6">
                            <label for="starch">Starch (g)</label>
                            <input type="text" v-model="form.starch" id="starch">
                        </div>
                        <div class="col-md-6">
                            <label for="ash">Ash (g)</label>
                            <input type="text" v-model="form.ash" id="ash">
                        </div>
                        <div class="col-md-6">
                            <label for="ca">Ca (mg)</label>
                            <input type="text" v-model="form.ca" id="ca">
                        </div>
                        <div class="col-md-6">
                            <label for="fe">Fe (mg)</label>
                            <input type="text" v-model="form.fe" id="fe">
                        </div>
                        <div class="col-md-6">
                            <label for="mg">Mg (mg)</label>
                            <input type="text" v-model="form.mg" id="mg">
                        </div>
                        <div class="col-md-6">
                            <label for="p">P (mg)</label>
                            <input type="text" v-model="form.p" id="p">
                        </div>
                        <div class="col-md-6">
                            <label for="k">K (mg)</label>
                            <input type="text" v-model="form.k" id="k">
                        </div>
                        <div class="col-md-6">
                            <label for="na">Na (mg)</label>
                            <input type="text" v-model="form.na" id="na">
                        </div>
                        <div class="col-md-6">
                            <label for="zn">Zn (mg)</label>
                            <input type="text" v-model="form.zn" id="zn">
                        </div>
                        <div class="col-md-6">
                            <label for="cu">Cu (mg)</label>
                            <input type="text" v-model="form.cu" id="cu">
                        </div>
                        <div class="col-md-6">
                            <label for="mn">Mn (mcg)</label>
                            <input type="text" v-model="form.mn" id="mn">
                        </div>
                        <div class="col-md-6">
                            <label for="i">I (mcg)</label>
                            <input type="text" v-model="form.i" id="i">
                        </div>
                        <div class="col-md-6">
                            <label for="se">Se (mcg)</label>
                            <input type="text" v-model="form.se" id="se">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_a_rae">Vitamin A (RAE) (mcg)</label>
                            <input type="text" v-model="form.vitamin_a_rae" id="vitamin_a_rae">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_a_re">Vitamin A (RE) (mcg)</label>
                            <input type="text" v-model="form.vitamin_a_re" id="vitamin_a_re">
                        </div>
                        <div class="col-md-6">
                            <label for="thiamin">Thiamin (mg)</label>
                            <input type="text" v-model="form.thiamin" id="thiamin">
                        </div>
                        <div class="col-md-6">
                            <label for="riboflavin">Riboflavin (mg)</label>
                            <input type="text" v-model="form.riboflavin" id="riboflavin">
                        </div>
                        <div class="col-md-6">
                            <label for="niacin">Niacin (mg)</label>
                            <input type="text" v-model="form.niacin" id="niacin">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_b6">Vitamin B6 (mg)</label>
                            <input type="text" v-model="form.vitamin_b6" id="vitamin_b6">
                        </div>
                        <div class="col-md-6">
                            <label for="folic_acid">Folic acid (mcg)</label>
                            <input type="text" v-model="form.folic_acid" id="folic_acid">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_b12">Vitamin B12 (mcg)</label>
                            <input type="text" v-model="form.vitamin_b12" id="vitamin_b12">
                        </div>
                        <div class="col-md-6">
                            <label for="pantothenate">Pantothenate (mg)</label>
                            <input type="text" v-model="form.pantothenate" id="pantothenate">
                        </div>
                        <div class="col-md-6">
                            <label for="biotin">Biotin (mcg)</label>
                            <input type="text" v-model="form.biotin" id="biotin">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_c">Vitamin C (mg)</label>
                            <input type="text" v-model="form.vitamin_c" id="vitamin_c">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_d">Vitamin D (mcg)</label>
                            <input type="text" v-model="form.vitamin_d" id="vitamin_d">
                        </div>
                        <div class="col-md-6">
                            <label for="vitamin_e">Vitamin E (mg)</label>
                            <input type="text" v-model="form.vitamin_e" id="vitamin_e">
                        </div>
                        <div class="col-md-6">
                            <label for="phytic_acid">Phytic Acid (mg)</label>
                            <input type="text" v-model="form.phytic_acid" id="phytic_acid">
                        </div>
                    </div>
                    <div class="action">
                        <button type="submit" class="btn1" :disabled="form.processing">
                            <svg v-show="form.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                            Post
                        </button>
                    </div>

                </form>
            </div>
        </section>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import Select2 from "v-select2-component";


export default {
    name: "Create",
    props:['groups', 'sources'],
    components: {AdminLayout, Select2},
    data(){
        return{
            form: this.$inertia.form({
                "code":"",
                "ref_no":"",
                "item":"",
                "group":null,
                "source":null,
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
                "ca":0,
                "fe":0,
                "mg":0,
                "p":0,
                "k":0,
                "na":0,
                "zn":0,
                "cu":0,
                "mn":0,
                "i":0,
                "se":0,
                "vitamin_a_rae":0,
                "vitamin_a_re":0,
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
                "phytic_acid":0,
            }),
        }
    },
    computed:{

    },
    methods:{
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                }))
                .post(this.route('admin.composition-table.store'))
        },
    }
}
</script>

<style scoped>

</style>
