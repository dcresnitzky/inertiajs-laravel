<template>
    <main class="h-screen overflow-hidden">
        <nav class="flex items-center justify-between flex-wrap bg-primary p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Trablahe Conosco</span>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-md lg:flex-grow">
                    <inertia-link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Vagas
                    </inertia-link>
                </div>
            </div>
        </nav>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
export default {
}
</script>
