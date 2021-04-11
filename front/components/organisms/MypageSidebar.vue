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

    <PageNavBtns
      :nav-category-data="PageNavBtnList"
    />

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
import PageNavBtns from "~/components/molecules/PageNavBtns"
const MY_MESSAGES = [
  "技術書を読むのが好きで気づいたらネットでポチってます。",
  "好きな食べ物はステーキです！"
]
export default {
  name: "MypageSidebar",
  components: {
    PageNavBtns
  },
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
      PageNavBtnList: [
        {
          id: 1,
          name: "Profile",
          link: "/profile",
        },
        {
          id: 2,
          name: "Skill",
          link: "/skill",
        }
      ]
    };
  },
  methods: {
    meMessage() {
      let randomNum = Math.floor(Math.random() * Math.floor(2));
      this.typTxtValue = MY_MESSAGES[randomNum]
    },
  },
};
</script>

<style lang="scss">
.vue-typer .custom.char.typed {
  color: #ffffff;
}
</style>