<template>
  <button class="button" @click.stop="editConfirm()">Edit</button>
</template>

<script>
export default {
  methods: {
    editConfirm() {
      alert("on click");
    },
  },
};
</script>

<style>
</style>