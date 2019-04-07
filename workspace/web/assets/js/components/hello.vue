<template>
    <div id='test'>
      hello world!!
    </div>
</template>

<script>
    export default {
        data () {
            return {
            }
        },
        mounted () {
        },
        created () {
          console.log('hello Components');
        },
        methods: {

        },
    }
</script>

<style scoped>
  #test {
    font-size: 25pt;
  }
</style>
