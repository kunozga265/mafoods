<template>
    <div class="page-section">
        <div class="page-section-header">
            <div class="page-section-title">
                <slot name="title"></slot>
            </div>
        </div>
        <div class="page-section-content">
            <form @submit.prevent="$emit('submitted')">
                <div class="flex justify-center">
                    <div class="card w-full max-w-7xl">
                        <div
                            :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'">
                            <div class="">
                                <slot name="form"></slot>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4" v-if="hasActions">
                            <slot name="actions"></slot>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!--    <div class="md:grid md:grid-cols-3 md:gap-6">
        <jet-section-title>
            <template #title><slot name="title"></slot></template>
            <template #description><slot name="description"></slot></template>
        </jet-section-title>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <form @submit.prevent="$emit('submitted')">
                <div class="px-4 py-5 bg-white sm:p-6 shadow"
                    :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'">
                    <div class="grid grid-cols-6 gap-6">
                        <slot name="form"></slot>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md" v-if="hasActions">
                    <slot name="actions"></slot>
                </div>
            </form>
        </div>
    </div>-->
</template>

<script>
    import JetSectionTitle from './SectionTitle'

    export default {
        components: {
            JetSectionTitle,
        },

        computed: {
            hasActions() {
                return !! this.$slots.actions
            }
        }
    }
</script>
