<template>
  <div class="edit-profile-con">
    <section class="edit-profile-sec">
      <div class="edit-profile-sec__inner">
        <h2 class="edit-profile-title">Edit-Profile</h2>
        <div class="form edit-profile-form">
          <div>
            <h3 class="section-title">プロフィール</h3>

            <div class="form__group profile-form__group">
              <label class="form__group__label" for="prof-name">お名前：</label>
              <div class="form__group__inputs">
                <input
                  type="text"
                  id="prof-name"
                  required
                  v-model="profileData.name"
                />
                <span class="form__group__attention">{{ validation.profile.name }}</span>
              </div>
            </div>
            <!--.formgroup-->

            <div class="form__group profile-form__group">
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

            <div class="form__group profile-form__group">
              <label class="form__group__label" for="prof-one-thing"
                >ひとこと：</label
              >
              <div class="form__group__inputs">
                <input
                  type="text"
                  id="prof-one-thing"
                  required
                  v-model="profileData.one_thing"
                />
              </div>
            </div>
            <!--.formgroup-->

            <div class="form__group profile-form__group">
              <label class="form__group__label"
                >特技：</label
              >
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
                      required
                      v-model="skill.content"
                    />
                    <BaseBtnDelete
                      :deleteData="profileData.special_skill"
                      :dataKey="skillKey"
                      :customClassName="'skill-delete-button'"
                    />
                  </span>
                </span>
                <BaseBtnAdd
                  :addData="profileData.special_skill"
                  :categoryName="'sp-skill'"
                />
              </div>
            </div>
            <!--.formgroup-->

            <div class="form__group profile-form__group">
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
                    <BaseBtnDelete
                      :deleteData="profileData.special_hobby"
                      :dataKey="hobbyKey"
                      :customClassName="'hobby-delete-button'"
                    /> </span
                ></span>
                <BaseBtnAdd
                  :addData="profileData.special_hobby"
                  :categoryName="'hobby'"
                />
              </div>
            </div>
            <!--.formgroup-->
          </div>

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
                  <span class="form__group__attention">{{ $_validLength(career, careerKey, 'careerdate') }}</span>
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
              <BaseBtnDelete
                :deleteData="profileData.profile_career"
                :dataKey="careerKey"
                :customClassName="'career-delete-button'"
              />
            </dt>
            <dd class="career__desc">
              <div class="form__group">
                <label class="form__group__label">企業名：</label>
                <div class="form__group__inputs content">
                  <input type="text" required v-model="career.content"/>
                  <span class="form__group__attention">{{ $_validLength(career, careerKey, 'career') }}</span>
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
            <BaseBtnAdd
              :addData="profileData.profile_career"
              :categoryName="'career'"
            />
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
                  <BaseBtnDelete
                    :deleteData="profileData.profile_pr"
                    :dataKey="prKey"
                    :customClassName="'pr-delete-button'"
                  />
                </div>
              </div>
              <!--.formgroup-->
            </li>
          </ul>
          <div class="icon-layout">
            <BaseBtnAdd
              :addData="profileData.profile_pr"
              :categoryName="'pr'"
            />
          </div>
        </div>
      </div>
      <!--.profile-sec__inner-->
    </section>
    <!--.profile-sec #profileArea-->
    <div class="buttons update-button">
      <BaseBtnUpdate :categoryName="'profile'" :updateData="profileData" :validData="validation"/>
    </div>
  </div>
  <!--.profile-con-->
</template>


<script>
import BaseBtnAdd from "~/components/atoms/BaseBtnAdd";
import BaseBtnDelete from "~/components/atoms/BaseBtnDelete";
import BaseBtnUpdate from "~/components/atoms/BaseBtnUpdate";
import validation from "~/mixins/validation"

export default {
  //middlewareを定義する
  layout: "mypage",
  components: {
    BaseBtnAdd,
    BaseBtnDelete,
    BaseBtnUpdate,
  },
  mixins: [validation],
  async asyncData({ store }) {
    return store.dispatch("profile/profileData").then((res) => {
      return { profileData: _.cloneDeep(res) };
    });
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
};
</script>
