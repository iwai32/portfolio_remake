<template>
  <ul class="page-nav-btns" :class="PageClass">
    <li
      class="page-nav-btns__list"
      v-for="(list, listKey) in PageNavBtnList"
      :key="listKey"
      :class="{ active: $route.name === list.activeRoute }"
      @click="toPage(list.url)"
    >
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
      <span>{{ list.title }}</span>
    </li>
  </ul>
  <!--page-nav-btns-->
</template>

<script>
export default {
  props: {
    PageNavBtnList: {
      type: Array,
      default: [],
    },
    PageClass: {
      type: String,
      default: "",
    },
  },
  methods: {
    toPage(pageUrl) {
      this.$router.push(pageUrl);
    },
  },
};
</script>

<style>
</style>