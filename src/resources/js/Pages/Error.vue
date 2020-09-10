<template>
    <div class="flex flex-wrap px-20 py-10 justify-center">
        <h1>{{ title }}</h1>
        <div>{{ description }}</div>
    </div>
</template>

<script>
export default {
    props: {
        status: Number,
    },
    computed: {
        title() {
            return {
                503: '503: Service Unavailable',
                500: '500: Server Error',
                404: '404: Page Not Found',
                403: '403: Forbidden',
            }[this.status] ?? '?: Unknown Error'
        },
        description() {
            return {
                503: 'Sorry, we are doing some maintenance. Please check back soon.',
                500: 'Whoops, something went wrong on our servers.',
                404: 'Sorry, the page you are looking for could not be found.',
                403: 'Sorry, you are forbidden from accessing this page.',
            }[this.status] ?? 'Whoops, something went wrong.'
        },
    },
}
</script>
