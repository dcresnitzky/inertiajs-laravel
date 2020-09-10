<template>
    <div class="flex flex-wrap px-20 py-10 justify-center">
        <div class="w-full">
            <div class="py-2  px-10">
                <span class="inline-block">Filtrar por tags:</span>
                <span v-for="tag in tags"
                      class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">
                    #{{tag}}
                </span>
            </div>
        </div>
        <div class="w-full flex flex-wrap justify-center">
            <job-card v-for="job in jobs" :job="job" v-bind:key="job.id"></job-card>
        </div>
    </div>
</template>

<script>
import Layout from './Layout'
import JobCard from '../Components/JobCard'

export default {

    layout: Layout,

    props: {
        jobs: Array,
        tags: Array,
    },

    components: {
        JobCard
    },

    metaInfo() {
        return {
            title: `Trabalhe conosco`,
        }
    }
}
</script>
