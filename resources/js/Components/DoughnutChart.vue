<template>
    <Doughnut
    :options="chartOptions"
    :data="chartData"
    :id="chartId"
    :dataset-id-key="datasetIdKey"
    :plugins="plugins"
    :css-classes="cssClasses"
    :styles="styles"
    :width="width"
    :height="height"
    />
</template>

<script>
import {Doughnut} from  'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, ArcElement } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, ArcElement)

export default {
    name: "DoughnutChart",

    components:{
        Doughnut
    },
    props: {
        chartOptions: {
            type: Object,
        },
        chartData: {
            type: Object,
        },
        chartId: {
            type: String,
            default: 'doughnut-chart'
        },
        datasetIdKey: {
            type: String,
            default: 'label'
        },
        width: {
            type: Number,
            default: 48
        },
        height: {
            type: Number,
            default: 48
        },
        cssClasses: {
            default: '',
            type: String
        },
        styles: {
            type: Object,
            default: () => {}
        },
        plugins: {
            type: Object,
            default: () => {}
        }
    },
}
</script>

<style scoped>

</style>
