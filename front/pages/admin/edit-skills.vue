<template>
  <div class="edit-skill-con">
    <section class="edit-skill-sec">
      <div class="edit-skill-sec__inner">
        <h2 class="edit-skill-title">Skill</h2>
        <div class="edit-skill-con__category">
          <ul class="edit-skill-category">
            <li class="edit-skill-category__list">
              <h3 class="edit-skill-category__list__title">スキル</h3>

              <ul class="edit-skill-items">
                <li
                  v-for="(skill, skillKey) in skillData"
                  :key="skillKey"
                  class="edit-skill-items__list"
                  @click="change(skill)"
                  :class="{ active: isActive === skill.name }"
                >
                  <h4 class="edit-skill-items__list__title">
                    {{ skill.name }}
                  </h4>
                  <img
                    class="edit-skill-items__list__logo"
                    :src="skillUrl(skill)"
                    :alt="skill.name"
                  />
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!--edit-skill-con__category-->

        <div class="edit-skill-con__details">
          <div
            v-show="isActive === skill.name"
            class="edit-skill-status-wrapp"
            v-for="(skill, skillKey) in skillData"
            :key="skillKey"
          >
            <dl class="edit-skill-status" v-if="isActive === skill.name">
              <dt class="edit-skill-status__title">
                <h3 class="edit-skill-status__nominal">スキル名</h3>
                <div class="form__group">
                  <div class="form__group__inputs">
                    <input type="text" required v-model="skill.name" />
                  </div>
                </div>
              </dt>
              <dd v-if="!_.isEmpty(skill.skill_category_detail)">
                <h3 class="edit-skill-status__nominal">ポイント</h3>
                <ul>
                  <li
                    class="edit-skill-status__point"
                    v-for="(detail, detailKey) in skill.skill_category_detail"
                    :key="detailKey"
                  >
                    <div class="form__group">
                      <div class="form__group__inputs del-point">
                        <input type="text" required v-model="detail.message" />
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
                  :categoryName="'skill'"
                />
              </dd>
            </dl>
            <div class="edit-skill-uploads">
              <div class="edit-skill-uploads__area">
                <h3 class="edit-skill-status__nominal">アイコンのアップロード</h3>
                <p class="edit-skill-uploads__logo">
                  <img :src="skillUrl(skill)" :alt="skill.name" />
                </p>
                <input type="file" name="" id="" />
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
                </div>
              </div>
              <!--.formgroup-->
            </div>
          </div>
        </div>
        <!--.edit-skill-con__details-->
      </div>
      <!--profile-sec__inner-->
    </section>
    <div class="buttons edit-button">
      <TheBtnEdit />
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import BaseBtnAdd from "~/components/atoms/BaseBtnAdd";
import BaseBtnDelete from "~/components/atoms/BaseBtnDelete";
import TheBtnEdit from "~/components/atoms/TheBtnEdit";

export default {
  layout: "mypage",
  components: {
    BaseBtnAdd,
    BaseBtnDelete,
    TheBtnEdit,
  },
  async asyncData({ store }) {
    return store.dispatch("skill/skillData").then((res) => {
      return { skillData: _.cloneDeep(res) };
    });
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
  },
  methods: {
    change(skill) {
      this.isActive = skill.name;
      this.activeMessage = skill.skill_category_comment.comment;
    },
  },
};
</script>

