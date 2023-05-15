<template>
    <admin-layout>
        <template #header>
            Dashboard
        </template>

        <template #breadcrumbs>
<!--            <li class="breadcrumb-item active">Recipe Calculator</li>-->
        </template>


      <div class="card">
          Dashboard
      </div>

    </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";

export default {
    name: "Dashboard",
    components: {AdminLayout},
    data(){
        return{

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
