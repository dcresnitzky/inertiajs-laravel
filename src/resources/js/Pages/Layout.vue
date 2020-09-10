<template>
    <main class="w-full overflow-y-auto">
        <nav class="fixed flex items-center justify-between bg-primary py-6 px-20 w-full">
            <div class="flex items-center flex-shrink-0 text-white mr-6 text-xl">
                <i class="material-icons mr-2">assignment_ind</i>
                <inertia-link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    <span class="font-semibold tracking-tight">Trablahe Conosco</span>
                </inertia-link>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-md w-4/12 ml-5">
                    <div class="flex items-center py-0 bg-gray-200 rounded-full px-3">
                        <label for="search" class=" text-gray-500 text-sm">Buscar:</label>
                        <input v-on:keyup="search"
                               v-model="query"
                               id="search"
                               class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight text-sm focus:outline-none focus:bg-transparent"
                               type="text"
                               placeholder="Nome da vaga...">
                        <span class="no-appearance pt-2 focus:outline-none">
                            <i class="material-icons text-gray-500">search</i>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="block my-6">&bnsp</div>
        <slot />
    </main>
</template>

<script>
export default {

    data() {
        return {
            query: ''
        }
    },

    methods: {
        search: function() {
            return this.$inertia.visit(this.route('home'), {
                data: {
                    query: this.query.toLowerCase() || null
                },
                only: [ 'jobs' ]
            })
        }
    }
}
</script>
