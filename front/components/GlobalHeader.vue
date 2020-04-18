<template>
  <header>
    <div class="header-inner">
      <h1 class="header-logo">
        <nuxt-link to="/">
          <img src="~/assets/img/logo.png" alt="Portfolio-iwai" />
        </nuxt-link>
      </h1>
      <nav id="g-nav">
        <ul class="navs">
          <li class="navs__list" :class="{ current: this.$route.name === '/' }">
            <nuxt-link to="/">top</nuxt-link>
          </li>
          <li class="navs__list" :class="{ current: this.$route.name === 'profile' }">
            <nuxt-link to="/profile/">profile</nuxt-link>
          </li>
          <li class="navs__list" :class="{ current: this.$route.name === 'works' }">
            <nuxt-link to="/works/">works</nuxt-link>
          </li>
          <li class="navs__list">
            <a href="https://github.com/iwai32?tab=repositories" target="_blank">github</a>
          </li>
        </ul>
      </nav>
    </div>
    <!--.header-inner-->
  </header>
</template>