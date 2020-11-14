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
                  class="input del-point"
                  ><input
                    type="text"
                    id="prof-sp-skill"
                    required
                    v-model="skill.content"
                  />
                  <i
                    class="fa fa-times-circle-o delete-button skill-delete-button"
                    aria-hidden="true"
                    @click="deleteItem(profileData.special_skill, skillKey)"
                  ></i>
                </span>
              </span>
              <span
                class="icon-wrapp"
                @click="addItem(profileData.special_skill, 'skill')"
                ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
              ></span>
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
                  class="input del-point"
                >
                  <input type="text" required v-model="hobby.content" />
                  <i
                    class="fa fa-times-circle-o delete-button hobby-delete-button"
                    aria-hidden="true"
                    @click="deleteItem(profileData.special_hobby, hobbyKey)"
                  ></i> </span
              ></span>
              <span
                class="icon-wrapp"
                @click="addItem(profileData.special_hobby, 'hobby')"
                ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
              ></span>
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
            <dt class="career__term del-point">
              <div class="form__group">
                <label class="form__group__label" for="prof-career-from"
                  >{{ careerKey + 1 + "." }}&nbsp;開始：</label
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
              <i
                class="fa fa-window-close delete-button career-delete-button"
                aria-hidden="true"
                @click="deleteItem(profileData.profile_career,  careerKey)"
              ></i>
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
          <div class="icon-layout">
            <span
              class="icon-wrapp"
              @click="addItem(profileData.profile_career, 'career')"
              ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
            ></span>
          </div>

          <hr class="under-line" />
          <h3 class="section-title">Pr</h3>
          <ul>
            <li
              class="pr"
              v-for="(pr, prKey) in profileData.profile_pr"
              :key="prKey"
            >
              <div class="form__group">
                <span class="pr-num">{{ prKey + 1 + "." }}&nbsp;</span>
                <div class="pr-inputs form__group__inputs del-point">
                  <input type="text" required v-model="pr.content" />
                  <i
                    class="fa fa-times-circle-o delete-button pr-delete-button"
                    aria-hidden="true"
                    @click="deleteItem(profileData.profile_pr, prKey)"
                  ></i>
                </div>
              </div>
              <!--.formgroup-->
            </li>
          </ul>
          <div class="icon-layout">
            <span
              class="icon-wrapp"
              @click="addItem(profileData.profile_pr, 'pr')"
              ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
            ></span>
          </div>
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
import ObjectData from "~/const/objectData";

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
    addItem(item, category) {
      //定数は同じデータオブジェクトのため、そのままリストレンダリングで使用すると、
      //他のフィールドも連動して変更されてしまう。複製して別のデータオブジェクトとして作成する。
      let addItem = null;
      if (category === "skill") {
        addItem = _.cloneDeep(ObjectData.SKILL_OBJECT);
      } else if (category === "hobby") {
        addItem = _.cloneDeep(ObjectData.HOBBY_OBJECT);
      } else if (category === "pr") {
        addItem = _.cloneDeep(ObjectData.PR_OBJECT);
      } else if (category === "career") {
        addItem = _.cloneDeep(ObjectData.CAREER_OBJECT);
      }
      item.push(addItem);
    },
    deleteItem(items, key) {
      items.splice(key, 1)
    }
  },
};
</script>
