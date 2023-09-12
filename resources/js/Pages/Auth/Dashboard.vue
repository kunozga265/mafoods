<template>
    <admin-layout>
        <template #header>
            Dashboard
        </template>

        <template #breadcrumbs>
            <!--            <li class="breadcrumb-item active">Recipe Calculator</li>-->
        </template>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="charts">
                        <div class="display">
                            <div class="chart-info absolute h-full w-full font-bold flex justify-center items-center">
                                <div>
                                    <div v-text="foods"></div>
                                    <!--                                        <div class="source">Malawi</div>-->
                                </div>
                            </div>
                            <DoughnutChart :chart-data="data" :chart-options="chartOptions" chart-id="dashboard"
                                dataset-id-key="dashboard" />
                        </div>
                        <div class="source">
                           Food Items
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
                                    <div v-text="recipes"></div>
                                    <!--                                        <div class="source">Malawi</div>-->
                                </div>
                            </div>
                            <DoughnutChart :chart-data="data" :chart-options="chartOptions" chart-id="dashboard"
                                dataset-id-key="dashboard" />
                        </div>
                        <div class="source">
                           Recipes
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
                                    <div v-text="users"></div>
                                    <!--                                        <div class="source">Malawi</div>-->
                                </div>
                            </div>
                            <DoughnutChart :chart-data="data" :chart-options="chartOptions" chart-id="dashboard"
                                dataset-id-key="dashboard" />
                        </div>
                        <div class="source">
                           Users
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
                                    <div v-text="news"></div>
                                    <!--                                        <div class="source">Malawi</div>-->
                                </div>
                            </div>
                            <DoughnutChart :chart-data="data" :chart-options="chartOptions" chart-id="dashboard"
                                dataset-id-key="dashboard" />
                        </div>
                        <div class="source">
                           News
                            <div class="news-meta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import DoughnutChart from "@/Components/DoughnutChart";

export default {
    name: "Dashboard",
    props:['users','recipes','news','foods'],
    components: { AdminLayout, DoughnutChart },
    data() {
        return {
            chartOptions: {
                plugins: {
                    tooltip: {
                        enabled: false
                    },
                    legend: {
                        display: false
                    }
                }, cutout: 30
            },
            data: {
                datasets: [{
                    data: [0, (100)],
                    backgroundColor: ['#58bf00', '#f2f2f4'],
                }],
            },
        }
    },
    computed: {

    },
    methods: {

    }
}
</script>

<style scoped></style>
