<template>
  <header>
    <div class="header-inner">
      <h1 class="header-logo">
        <nuxt-link to="/">
          <img src="~/assets/img/logo.png" alt="Portfolio-iwai" />
        </nuxt-link>
      </h1>

      <nav id="g-nav">
        <ul class="navs" v-if="!_.isEmpty(navCategoryData)">
          <li class="navs__list">
            <nuxt-link to="/">top</nuxt-link>
          </li>
          <li
            v-for="category in navCategoryData"
            :key="category.id"
            class="navs__list"
          >
            <span :class="{ current: $route.name === category.link.replace('/', '') }">
              <nuxt-link
                :to="category.link"
                v-if="category.is_external_link === 0"
                >{{ category.name }}</nuxt-link
              >
              <a v-else :href="category.link" target="_blank">{{
                category.name
              }}</a>
            </span>
          </li>
        </ul>
      </nav>
    </div>
    <!--.header-inner-->
  </header>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  created() {
    this.$store.dispatch("navCategory/navCategoryData");
  },
  computed: {
    ...mapGetters({
      navCategoryData: "navCategory/navCategoryData",
    }),
  },
};
</script>