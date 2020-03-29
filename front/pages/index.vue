<template>
  <div class="top-container">
    <nuxt-link to='admin/' class="to-admin-page">admin</nuxt-link>
    <h1 class="key">Iwai's Portfolio</h1>

    <ul class="top-nav">
      <li>
        <nuxt-link to="profile/">Profile</nuxt-link>
      </li>
      <li>
        <nuxt-link to="works/">Works</nuxt-link>
      </li>
      <li>
        <a href="https://github.com/iwai32?tab=repositories" target="_blank">Github</a>
      </li>
    </ul>
    <p class="copy">
      <small>&copy; 2019~ IwaiKouhei</small>
    </p>
  </div>
</template>

<script>
export default {
  layout: 'top'
};
</script>

<style>
</style>
