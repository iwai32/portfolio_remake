<template>
  <div class="edit-skill-con">
    <section class="edit-skill-sec">
      <div class="edit-skill-sec__inner">
        <h2 class="edit-skill-title">Edit-Skill</h2>
        <div class="edit-skill-con__category">
          <ul class="edit-skill-category">
            <li class="edit-skill-category__list">
              <h3 class="edit-skill-category__list__title">スキル</h3>

              <ul class="edit-skill-items">
                <li
                  v-for="(skill, skillKey) in skillData"
                  :key="skillKey"
                  class="edit-skill-items__list del-point"
                  @click="change(skill, skillKey)"
                  :class="{ active: isActive === skillKey }"
                >
                  <h4 class="edit-skill-items__list__title">
                    {{ skill.name }}
                  </h4>
                  <img
                    v-if="!_.isEmpty(skill.upload_image)"
                    :src="skill.upload_image"
                    :alt="skill.name"
                  />
                  <img
                    v-else
                    class="edit-skill-items__list__logo"
                    :src="skillUrl(skill)"
                    :alt="skill.name"
                  />
                  <BaseBtnDelete
                    :deleteData="skillData"
                    :dataKey="skillKey"
                    :customClassName="'skill-items-delete-button'"
                  />
                </li>
                <BaseBtnAdd :addData="skillData" :categoryName="'skill'" />
              </ul>
            </li>
          </ul>
        </div>
        <!--edit-skill-con__category-->

        <div class="edit-skill-con__details">
          <div
            v-show="isActive === skillKey"
            class="edit-skill-status-wrapp"
            v-for="(skill, skillKey) in skillData"
            :key="skillKey"
          >
            <dl class="edit-skill-status" v-if="isActive === skillKey">
              <dt class="edit-skill-status__title">
                <h3 class="edit-skill-status__nominal">スキル名</h3>
                <div class="form__group">
                  <div class="form__group__inputs">
                    <input type="text" required v-model="skill.name" />
                    <span class="form__group__attention">{{
                      $_validLength(skill, skillKey, "skill")
                    }}</span>
                  </div>
                </div>
              </dt>
              <dd>
                <h3 class="edit-skill-status__nominal">ポイント</h3>
                <ul v-if="!_.isEmpty(skill.skill_category_detail)">
                  <li
                    class="edit-skill-status__point"
                    v-for="(detail, detailKey) in skill.skill_category_detail"
                    :key="detailKey"
                  >
                    <div class="form__group">
                      <div class="form__group__inputs del-point">
                        <input type="text" required v-model="detail.message" />
                        <span class="form__group__attention">{{
                          $_validLength(detail, detailKey, "skillDetails")
                        }}</span>
                        <BaseBtnDelete
                          :deleteData="skill.skill_category_detail"
                          :dataKey="detailKey"
                          :customClassName="'detail-delete-button'"
                        />
                      </div>
                    </div>
                    <!--.formgroup-->
                  </li>
                </ul>
                <BaseBtnAdd
                  :addData="skill.skill_category_detail"
                  :categoryName="'skill-category'"
                />
              </dd>
            </dl>
            <div class="edit-skill-uploads">
              <div class="edit-skill-uploads__area">
                <h3 class="edit-skill-status__nominal">
                  アイコンのアップロード
                </h3>
                <p class="edit-skill-uploads__logo">
                  <img
                    v-if="!_.isEmpty(skill.upload_icon_img)"
                    :src="skill.upload_icon_img"
                    :alt="skill.name"
                  />
                  <img v-else :src="skillUrl(skill)" :alt="skill.name" />
                </p>
                <div class="edit-skill-uploads__button-area">
                  <label class="file-upload-button"
                    >Upload
                    <input
                      type="file"
                      @change="skillImageUpload(skill, $event)"
                      class="input-hidden"
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="edit-skill-comment">
              <div class="form__group comment">
                <label
                  class="form__group__label"
                  :for="'comment-name'.detailKey"
                  >コメント</label
                >
                <div class="form__group__inputs">
                  <input
                    type="text"
                    :id="'comment-name'.detailKey"
                    required
                    v-model="skill.skill_category_comment.comment"
                  />
                  <span class="form__group__attention">{{
                    $_validLength(
                      skill.skill_category_comment,
                      skillKey,
                      "skillComment"
                    )
                  }}</span>
                </div>
              </div>
              <!--.formgroup-->
            </div>
          </div>
          <div class="buttons update-button sp-on">
            <BaseBtnUpdate
              :validData="validation"
              :updateData="skillData"
              :categoryName="'skill'"
            />
          </div>
        </div>
        <!--.edit-skill-con__details-->
      </div>
      <!--profile-sec__inner-->
    </section>
    <div class="buttons update-button pc-on">
      <BaseBtnUpdate
        :validData="validation"
        :updateData="skillData"
        :categoryName="'skill'"
      />
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import BaseBtnAdd from "~/components/atoms/BaseBtnAdd";
import BaseBtnDelete from "~/components/atoms/BaseBtnDelete";
import BaseBtnUpdate from "~/components/atoms/BaseBtnUpdate";
import validation from "~/mixins/validation";

export default {
  layout: "mypage",
  components: {
    BaseBtnAdd,
    BaseBtnDelete,
    BaseBtnUpdate,
  },
  mixins: [validation],
  async asyncData({ store }) {
    return store.dispatch("skill/editSkillData").then((res) => {
      return { skillData: _.cloneDeep(res) };
    });
  },
  data() {
    return {
      isActive: 0,
      activeMessage: "",
    };
  },
  computed: {
    skillUrl(skill) {
      return function (skill) {
        if (!_.isEmpty(skill)) {
          return (
            process.env.API_URL + skill.profile_id + "/" + skill.skill_icon_img
          );
        }
      };
    },
  },
  methods: {
    change(skill, skillKey) {
      this.isActive = skillKey;
      this.activeMessage = skill.skill_category_comment.comment;
    },
    skillImageUpload(skill, e) {
      const file = e.target.files[0];
      let isUploads = false;
      //拡張子とファイルサイズのバリデーションをする
      isUploads = this.$_validFiles(file);

      if (isUploads) {
        skill.skill_icon_img = file.name;
        this.showSkillImage(skill, file);
      }

      // upload_file
    },
    //プレビューを表示する
    showSkillImage(skill, file) {
      const reader = new FileReader();

      reader.onload = (e) => {
        skill.upload_icon_img = e.target.result;
        console.log(e);
      };
      reader.readAsDataURL(file);
    },
  },
};
</script>

