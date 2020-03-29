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
          <li class="navs__list">
            <nuxt-link to="/">top</nuxt-link>
          </li>
          <li class="navs__list current">
            <nuxt-link to="profile/">profile</nuxt-link>
          </li>
          <li class="navs__list">
            <nuxt-link to="works/">Works</nuxt-link>
          </li>
          <li class="navs__list">
            <a href="https://github.com/iwai32?tab=repositories" target="_blank">Github</a>
          </li>
        </ul>
      </nav>
    </div>
    <!--.header-inner-->
  </header>
</template>