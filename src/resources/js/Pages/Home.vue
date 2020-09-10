<template>
    <div class="flex flex-wrap px-20 py-10 justify-center">
        <div class="w-full">
            <div class="py-2  px-10">
                <span class="inline-block">Filtrar por tags:</span>
                <button v-for="tag in selectionTags"
                      v-on:click="toggleTag(tag)"
                      class="pointer inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2 hover:text-grey-500 focus:outline-none"
                      v-bind:class="{'bg-primary' : tag.selected }">
                    #{{ tag.title }}
                </button>
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

    mounted() {
        const urlParams = new URLSearchParams(window.location.search)
        const tags = urlParams.getAll('tags[]') || []

        this.selectionTags = this.tags.map((tag) => {
            return {
                title: tag,
                selected: tags.includes(tag)
            }
        })
    },

    data() {
        return {
            selectionTags: []
        }
    },

    methods: {
        toggleTag: function(tag) {
            tag.selected = !tag.selected

            this.$inertia.replace(this.route('home'), {
                data: {
                    query: this.$parent.query.toLowerCase() || null,
                    tags: this.selectedTags.map(tag => tag.title) || null,
                },
                only: [ 'jobs' ],
                replace: true,
                preserveScroll: true,
            })
        }
    },

    computed: {
        selectedTags: function () {
            return this.selectionTags.filter(tag => tag.selected)
        }
    },

    metaInfo() {
        return {
            title: `Trabalhe conosco`,
        }
    }
}
</script>
