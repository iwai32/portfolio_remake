<template>
  <div>
    <transition name="fade">
      <div class="update-pop-up" v-show="isUpdate">更新しました。</div>
    </transition>
  </div>
</template>

<script>
export default {
  mounted() {
    this.updated();
  },
  data() {
    return {
      isUpdate: false
    }
  },
  methods: {
    updated() {
      if (this.$route.query.update === "true") {
        this.isUpdate = true;
        this.fadeOut();
      }
    },
    fadeOut() {
      setTimeout(() => {
        this.isUpdate = false;
      }, 1);
    },
  },
};
</script>

<style>
</style>