<template>
  <div class="top-container">
    <p class="to-admin-page">
      <nuxt-link to="admin/" class="link">admin</nuxt-link>
    </p>
    <h1 class="key">Iwai's Portfolio</h1>

    <ul class="top-nav" v-if="!_.isEmpty(navCategoryData)">
      <li v-for="category in navCategoryData" :key="category.id">
        <nuxt-link :to="category.link" v-if="category.is_external_link === 0">{{
          category.name
        }}</nuxt-link>
        <a v-else :href="category.link" target="_blank">{{ category.name }}</a>
      </li>
    </ul>
    <p class="copy">
      <small>&copy; 2019~ IwaiKouhei</small>
    </p>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  layout: "top",
  async fetch({ store }) {
    await store.dispatch("navCategory/navCategoryData");
  },
  computed: {
    ...mapGetters({
      navCategoryData: "navCategory/navCategoryData",
    }),
  },
};
</script>

<style>
.top-container {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
</style>
