<template>
  <div class="edit-profile-con">
    <section class="edit-profile-sec">
      <div class="edit-profile-sec__inner">
        <h2 class="edit-profile-title">Edit-Profile</h2>
        <div class="form edit-profile-form">
          <h3 class="section-title">プロフィール</h3>

          <div class="form__group">
            <label class="form__group__label" for="prof-name">お名前：</label>
            <div class="form__group__inputs">
              <input
                type="text"
                id="prof-name"
                required
                v-model="profileData.name"
              />
            </div>
          </div>
          <!--.formgroup-->

          <div class="form__group">
            <label class="form__group__label" for="prof-birth"
              >生年月日：</label
            >
            <div class="form__group__inputs">
              <input
                type="date"
                id="prof-birth"
                required
                v-model="profileData.birth_day"
              />
            </div>
          </div>
          <!--.formgroup-->

          <div class="form__group">
            <label class="form__group__label" for="prof-sp-skill">特技：</label>
            <div class="form__group__inputs">
              <span
                class="input-group"
                v-if="!_.isEmpty(profileData.special_skill)"
              >
                <span
                  v-for="(skill, skillKey) in profileData.special_skill"
                  :key="skillKey"
                  class="input"
                  ><input
                    type="text"
                    id="prof-sp-skill"
                    required
                    v-model="skill.content"
                /></span>
              </span>
              <span v-else>ありません</span>
            </div>
          </div>
          <!--.formgroup-->

          <div class="form__group">
            <label class="form__group__label">趣味：</label>
            <div class="form__group__inputs">
              <span
                v-if="!_.isEmpty(profileData.special_hobby)"
                class="input-group"
                ><span
                  v-for="(hobby, hobbyKey) in profileData.special_hobby"
                  :key="hobbyKey"
                  class="input"
                >
                  <input type="text" required v-model="hobby.content" /></span
              ></span>
              <span v-else>ありません</span>
            </div>
          </div>
          <!--.formgroup-->

          <hr class="under-line" />
          <!-- キャリア -->
          <h3 class="section-title">キャリア</h3>
          <dl
            class="career"
            v-for="(career, careerKey) in profileData.profile_career"
            :key="careerKey"
          >
            <dt class="career__term">
              <div class="form__group">
                <label class="form__group__label" for="prof-career-from"
                  >開始：</label
                >
                <div class="form__group__inputs">
                  <input
                    type="date"
                    id="prof-career-from"
                    required
                    v-model="career.date_from"
                  />
                </div>
              </div>
              <!--.formgroup-->

              <div class="form__group">
                <label class="form__group__label" for="prof-career-to"
                  >終了：</label
                >
                <div class="form__group__inputs">
                  <input
                    type="date"
                    id="prof-career-to"
                    required
                    v-model="career.date_to"
                  />
                </div>
              </div>
              <!--.formgroup-->
            </dt>
            <dd class="career__desc">
              <div class="form__group">
                <label class="form__group__label">企業名：</label>
                <div class="form__group__inputs content">
                  <input type="text" required v-model="career.content" />
                </div>
              </div>
              <!--.formgroup-->

              <div class="form__group">
                <label class="form__group__label">職種：</label>
                <div class="form__group__inputs occupation">
                  <input type="text" required v-model="career.occupation" />
                </div>
              </div>
              <!--.formgroup-->
            </dd>
          </dl>

          <hr class="under-line" />
          <h3 class="section-title">Pr</h3>
          <ul>
            <li
              class="pr"
              v-for="(pr, prKey) in profileData.profile_pr"
              :key="prKey"
            >
              <div class="form__group">
                <div class="form__group__inputs">
                  <input type="text" required v-model="pr.content" />
                </div>
              </div>
              <!--.formgroup-->
            </li>
          </ul>
        </div>
      </div>
      <!--.profile-sec__inner-->
    </section>
    <!--.profile-sec #profileArea-->
    <div class="buttons edit-button">
      <button class="button" @click.stop="editConfirm()">Edit</button>
    </div>
  </div>
  <!--.profile-con-->
</template>


<script>
import { mapGetters } from "vuex";

export default {
  //middlewareを定義する
  layout: "mypage",
  async asyncData({ store }) {
    return store.dispatch("profile/profileData").then((res) => {
      return { profileData: _.cloneDeep(res) };
    });
  },
  data() {
    return {};
  },
  computed: {
    careerDateFrom(date_from) {
      return function (date_from) {
        return !_.isNull(date_from)
          ? this.$moment(date_from).format("YYYY年MM月DD日")
          : "";
      };
    },
    careerDateTo(date_to) {
      return function (date_to) {
        return !_.isNull(date_to)
          ? this.$moment(date_to).format("YYYY年MM月DD日")
          : "";
      };
    },
  },
  methods: {
    editConfirm() {
      alert("on click");
    },
  },
};
</script>
