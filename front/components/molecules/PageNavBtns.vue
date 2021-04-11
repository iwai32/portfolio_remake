<template>
  <ul class="page-nav-btns" :class="PageClass">
    <li
      class="page-nav-btns__list"
      v-for="category in navCategoryData"
      :key="category.id"
    >
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
      <nuxt-link :to="category.link" class="page-nav-btns__list__text">
        {{ category.name }}
      </nuxt-link>
    </li>
  </ul>
  <!--page-nav-btns-->
</template>

<script>
export default {
  props: {
    navCategoryData: {
      type: Array,
      default: [],
    },
    PageClass: {
      type: String,
      default: "",
    },
  },
};
</script>

<style>
</style>