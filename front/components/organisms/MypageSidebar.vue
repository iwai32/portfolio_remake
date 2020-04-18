<template>
  <div class="profile-con__inner--left">
    <p class="icon-photo">
      <img src="~/assets/img/profile-photo.png" alt="iwaiのアイコン" />
    </p>

    <ul class="profile-navs">
      <li class="profile-navs__list"
      :class="{active: this.$route.name === 'profile'}"
      @click="toProfile()"
      >
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span>Profile</span>
      </li>
      <li class="profile-navs__list"
      :class="{active: this.$route.name === 'skill'}"
      @click="toSkill()"
      >
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span>Skill</span>
      </li>
    </ul>
    <!--profile-navs-->

    <div class="profile-typ">
      <p class="profile-typ__txt">{{ typTxt }}</p>
    </div>
    <!--.profile-typ-->
    <!--.profile-con__inner--left-->
  </div>
</template>

<script>
export default {
  name: "MypageSidebar",
  props: {
    typTxt: String
  },
  methods: {
    toProfile() {
      this.$router.push('/profile')
    },
    toSkill() {
      this.$router.push('/skill')
    }
  }
};
</script>