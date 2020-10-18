<template>
  <div class="profile-con">
    <MypageSidebar :typTxt="'こちらはプロフィールを紹介するページです。'" />
    <div class="profile-con__inner--right">
      <section class="profile-sec">
        <div class="profile-sec__inner">
          <h2 class="profile-title">Profile</h2>
          <h3 class="my-name">{{ profileData.name }}</h3>
          <!-- 特技、趣味 -->
          <ul class="about-me">
            <li class="about-me__list">
              {{ $moment(profileData.birth_day).format("YYYY年MM月DD日") }}
            </li>
            <li class="about-me__list">
              特技は
              <span
                v-for="(skill, skillKey) in profileData.special_skill"
                :key="skillKey"
                >{{ skill.content }}</span
              >
            </li>
            <li class="about-me__list">
              趣味は
              <span
                v-for="(hobby, hobbyKey) in profileData.special_hobby"
                :key="hobbyKey"
                >{{ hobby.content }}</span
              >
            </li>
          </ul>
          <hr class="under-line" />
          <!-- キャリア -->
          <dl
            class="career"
            v-for="(career, careerKey) in profileData.profile_career"
            :key="careerKey"
          >
            <dt class="career__term">
              {{ careerDateFrom(career.date_from) }}
              〜{{ careerDateTo(career.date_to) }}
            </dt>
            <dd class="career__desc">
              <div>{{ career.content }}</div>
              <div class="occupation">({{career.occupation}})</div>
            </dd>
          </dl>
          <hr class="under-line" />
          <ul>
            <li
              class="pr"
              v-for="(pr, prKey) in profileData.profile_pr"
              :key="prKey"
            >
              {{ pr.content }}
            </li>
          </ul>
        </div>
        <!--.profile-sec__inner-->
      </section>
      <!--.profile-sec #profileArea-->
    </div>
    <!--.profile-con__inner--right-->
  </div>
  <!--.profile-con-->
</template>


<script>
import MypageSidebar from "~/components/organisms/MypageSidebar";
import { mapGetters } from "vuex";

export default {
  layout: "mypage",
  components: {
    MypageSidebar,
  },
  fetch({ store }) {
    store.dispatch("profile/profileData");
  },
  data() {
    return {};
  },
  computed: {
    careerDateFrom(date_from) {
      return function (date_from) {
        return !_.isNull(date_from) ? this.$moment(date_from).format("YYYY年MM月DD日"): "";
      };
    },
    careerDateTo(date_to) {
      return function (date_to) {
        return !_.isNull(date_to) ? this.$moment(date_to).format("YYYY年MM月DD日"): "";
      };
    },
    ...mapGetters({
      profileData: "profile/profileData",
    }),
  },
};
</script>
