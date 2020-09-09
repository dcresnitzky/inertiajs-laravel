<template>
    <layout title="Home">
        <h1>Welcome</h1>
        <p>Hello, welcome to your first Inertia app!</p>
    </layout>
</template>

<script>
import Layout from './Layout'

export default {
    layout: Layout,

    props: {
        user: Object,
    },
}
</script>
