<template>
  <div class="profile-con">
      <section class="profile-sec skill-area">
        <div class="profile-sec__inner">
          <h2 class="profile-title">Skill</h2>
          <div class="skill-con">
            <div class="skill-con__inner--top">
              <ul class="skill-category">
                <li class="skill-category__list skill-category__list--lang">
                  <h3 class="skill-category__list__title">スキル</h3>

                  <ul class="skill-items">
                    <li
                      v-for="skill in skillData"
                      :key="skill.id"
                      class="skill-items__list"
                      @click="change(skill)"
                      :class="{ active: isActive === skill.name }"
                    >
                      <h4 class="skill-items__list__title">{{ skill.name }}</h4>
                      <img
                        class="skill-items__list__logo"
                        :src="skillUrl(skill)"
                        :alt="skill.name"
                      />
                      <!-- <p class="skill-items__list__level">Lv40</p> -->
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--skill-con__inner--top-->

            <div class="skill-con__inner--bottom">
              <div
                v-show="isActive === skill.name"
                class="skill-status-wrapp"
                v-for="skill in skillData"
                :key="skill.id"
              >
                <dl class="skill-status" v-if="isActive === skill.name">
                  <dt class="skill-status__title">
                    {{ skill.name }}
                    <img
                      class="skill-status__title__logo"
                      :src="skillUrl(skill)"
                      :alt="skill.name"
                    />
                  </dt>
                  <dd
                    class="skill-status__desc"
                    v-if="!_.isEmpty(skill.skill_category_detail)"
                  >
                    <ul>
                      <li
                        class="skill-status__point"
                        v-for="detail in skill.skill_category_detail"
                        :key="detail.id"
                      >
                        {{ detail.message }}
                      </li>
                    </ul>
                  </dd>
                </dl>
              </div>
            </div>
            <!--.skill-con__inner--bottom-->
          </div>
          <!--.skill-con-->
        </div>
        <!--profile-sec__inner-->
      </section>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  layout: "mypage",
  fetch({ store }) {
    store.dispatch("skill/skillData");
  },
  data() {
    return {
      isActive: "HTML",
      activeMessage: "",
    };
  },
  computed: {
    skillUrl(skill) {
      return function (skill) {
        return (
          process.env.API_URL + skill.profile_id + "/" + skill.skill_icon_img
        );
      };
    },
    ...mapGetters({
      skillData: "skill/skillData",
    }),
  },
  methods: {
    change(skill) {
      this.isActive = skill.name;
      this.activeMessage = skill.skill_category_comment.comment
    },
  },
};
</script>

