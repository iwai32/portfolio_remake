<template>
  <div>
    <GlobalHeader/>
    <main>
      <transition name="page">
        <nuxt />
      </transition>
    </main>
  </div>
</template>

<script>
import GlobalHeader from '~/components/GlobalHeader'
export default {
  components: {
    GlobalHeader
  }
}
</script>



<style>

</style>
