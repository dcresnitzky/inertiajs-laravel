<template>
    <div class="overflow-y-auto flex mb-4" scroll-region>
        <job-card v-for="job in jobs" :job="job" v-bind:key="job.id"></job-card>
    </div>
</template>

<script>
import Layout from './Layout'
import JobCard from '../Components/JobCard'

export default {

    layout: Layout,

    props: {
        jobs: Array,
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
