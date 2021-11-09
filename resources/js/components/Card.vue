<template>
    <card class="flex flex-col">
        <div class="px-3 py-3" v-html="renderedView"></div>
    </card>
</template>

<script>
export default {
    props: ["card"],
    data() {
        return {
            renderedView: null
        };
    },
    mounted() {
        this.renderedView = this.card.view;
    }
}
</script>
