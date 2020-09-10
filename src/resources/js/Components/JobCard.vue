<template>
    <div class="w-1/5 text-gray-700 px-4 py-2 m-2 h-auto">
        <div class="border-r border-b border-l border-t border-gray-400 lg:border-l lg:border-t lg:border-gray-300 bg-white rounded p-5 leading-normal">
            <div class="mb-5">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ job.title }}</div>
                <p class="text-gray-700 text-base">{{ job.short_description }}</p>
            </div>
            <div class="mb-3">
                <inertia-link :href="route('show', {id: job.id})">
                    <button class="rounded-full pointer inline-block bg-primary text-white px-4 py-1 font-semibold hover:text-gray-100">Saiba mais</button>
                </inertia-link>
            </div>
            <div class="flex items-center">
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ job.type }}</p>
                    <p class="text-gray-600">Postado em: {{ job.created_at | formatDate }}</p>
                </div>
            </div>
            <div class="px-0 pt-1 pb-1 mt-2">
                <span v-for="tag in job.tags" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#{{ tag.title }}</span>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        job: Object,
    },
}
</script>
