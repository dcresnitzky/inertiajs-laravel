<template>
    <div class="flex flex-wrap px-20 py-10">
        <!-- Scrollable container -->
        <div class="w-7/12" scroll-region>
            <div class="mb-3">
                <h1>{{ job.title }}</h1>
            </div>
            <div class="flex items-center mb-5">
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ job.type }}</p>
                    <p class="text-gray-600">Postado em: {{ job.created_at | formatDate }}</p>
                </div>
            </div>
            <div class="description" v-html="job.description"></div>
        </div>
        <!-- Fixed sidebar -->
        <div class="w-4/12 fixed right-0 ">
            <job-application :job="job"></job-application>
        </div>

    </div>
</template>

<script>
import Layout from './Layout'
import JobApplication from "../Components/JobApplication";

export default {

    layout: Layout,

    props: {
        job: Object
    },

    components: {
        JobApplication
    },

    metaInfo() {
        return {
            title: this.job.title,
        }
    }
}
</script>
