<template>
  <div class="profile-con__inner--left">
    <p class="icon-photo" @click="meMessage()">
      <img
        v-show="talk === false"
        src="~/assets/img/profile-photo.png"
        alt="iwaiのアイコン"
      />
      <img
        v-show="talk === true"
        src="~/assets/img/profile-photo.gif"
        alt="iwaiのアイコン"
      />
    </p>

    <ul class="profile-navs">
      <li
        class="profile-navs__list"
        :class="{ active: this.$route.name === 'profile' }"
        @click="toProfile()"
      >
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span>Profile</span>
      </li>
      <li
        class="profile-navs__list"
        :class="{ active: this.$route.name === 'skill' }"
        @click="toSkill()"
      >
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span>Skill</span>
      </li>
    </ul>
    <!--profile-navs-->

    <div class="profile-typ">
      <p class="profile-typ__txt">
        <client-only>
          <vue-typer
            :text="typTxtValue"
            :repeat="0"
            @completed="talk = false"
          ></vue-typer>
        </client-only>
      </p>
    </div>
    <!--.profile-typ-->
    <!--.profile-con__inner--left-->
  </div>
</template>

<script>
const MY_MESSAGES = [
  "技術書を読むのが好きで気づいたらネットでポチってます。",
  "好きな食べ物はステーキです！"
]
export default {
  name: "MypageSidebar",
  props: {
    typTxt: {
      type: String,
      default: "",
    },
  },
  watch: {
    typTxtValue() {
      this.talk = true;
    },
    typTxt(value) {
      this.typTxtValue = value
    }
  },
  data() {
    return {
      typTxtValue: this.typTxt,
      talk: true,
    };
  },
  methods: {
    meMessage() {
      let randomNum = Math.floor(Math.random() * Math.floor(2));
      this.typTxtValue = MY_MESSAGES[randomNum]
    },
    toProfile() {
      this.$router.push("/profile");
    },
    toSkill() {
      this.$router.push("/skill");
    },
  },
};
</script>

<style lang="scss" scoped>
.vue-typer .custom.char.typed {
  color: #ffffff;
}
</style>