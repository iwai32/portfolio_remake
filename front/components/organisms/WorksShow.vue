<template>
  <div class="work-show" :class="isEdit ? 'edit-work-show' : ''">
    <div class="work-container" :class="isEdit ? 'edit-work-container' : ''">
      <span class="close" @click="emitTogglePanel"
        ><i class="fa fa-times" aria-hidden="true"></i
      ></span>
      <div class="form__group product-form__group" v-if="isEdit">
        <div class="form__group__inputs">
          <label
            ><span>作品名</span>
            <input type="text" required v-model="productData.name" />
          </label>
        </div>
        <div class="form__group__inputs">
          <label
            ><span>サイトURL</span>
            <input type="text" required v-model="productData.product_url" />
          </label>
        </div>
      </div>

      <h2 v-else class="work-title">
        <a :href="productData.product_url" target="_blank">{{
          productData.name
        }}</a>
      </h2>

      <div class="inner-wrapper">
        <!-- edit -->
        <div class="inner-l" v-if="isEdit">
          <p class="work-photo">
            <a :href="productData.product_url" target="_blank"
              ><img :src="productImage(productData)" :alt="productData.name"
            /></a>
          </p>
          <div class="edit-work-container__button-area">
            <label class="file-upload-button"
              >Upload
              <input
                type="file"
                @change="skillImageUpload(skill, $event)"
                class="input-hidden"
              />
            </label>
          </div>
          <dl
            class="work-lead edit-work-lead"
            v-if="!_.isEmpty(productData.product_detail)"
          >
            <template v-for="(detail, detailKey) in productData.product_detail">
              <dt :key="`definition-${detailKey}`">
                <div class="form__group detail-form__group del-point">
                  <label
                    >名目
                    <input type="text" required v-model="detail.definition" />
                  </label>
                  <BaseBtnDelete
                    :deleteData="productData.product_detail"
                    :dataKey="detailKey"
                    :customClassName="'detail-delete-button'"
                  />
                </div>
              </dt>
              <dd :key="`detail-${detailKey}`">
                <div class="form__group detail-form__group">
                  <label>
                    詳細
                    <input type="text" required v-model="detail.detail" />
                  </label>
                </div>
              </dd>
            </template>
            <BaseBtnAdd
              :addData="productData.product_detail"
              :categoryName="'work-detail'"
            />
          </dl>
        </div>

        <div class="inner-l" v-else>
          <p class="work-photo">
            <a :href="productData.product_url" target="_blank"
              ><img :src="productImage(productData)" :alt="productData.name"
            /></a>
          </p>
          <dl class="work-lead" v-if="!_.isEmpty(productData.product_detail)">
            <template v-for="detail in productData.product_detail">
              <dt :key="`definition-${detail.id}`">
                <span>{{ detail.definition }}</span>
              </dt>
              <dd :key="`detail-${detail.id}`">
                <span>{{ detail.detail }}</span>
              </dd>
            </template>
          </dl>
        </div>

        <!-- edit -->
        <div
          class="inner-r"
          v-if="!_.isEmpty(productData.product_point) && isEdit"
        >
          <div class="point-wrap">
            <h3 class="point">Point</h3>
            <ul class="p-list" v-if="!_.isEmpty(productData.product_point)">
              <li
                v-for="(points, pointKey) in productData.product_point"
                :key="pointKey"
              >
                <div class="form__group p-form__group del-point">
                  <input type="text" required v-model="points.point" />
                  <BaseBtnDelete
                    :deleteData="productData.product_point"
                    :dataKey="pointKey"
                    :customClassName="'point-delete-button'"
                  />
                </div>
              </li>
            </ul>
            <BaseBtnAdd
              :addData="productData.product_point"
              :categoryName="'work-point'"
            />
          </div>
          <!--point-wrap-->
          <div class="work-txt edit-work-txt">
            <div class="form__group comment-form__group">
              <label
                ><span>コメント</span>
                <textarea
                  cols="30"
                  rows="10"
                  required
                  v-model="productData.about"
                ></textarea>
              </label>
            </div>
            <div class="form__group__inputs comment-form__group">
              <label>
                <span>githubURL</span>
                <input
                  type="text"
                  required
                  v-model="productData.repository_url"
                />
              </label>
            </div>
          </div>
        </div>

        <div
          class="inner-r"
          v-else-if="!_.isEmpty(productData.product_point) && !isEdit"
        >
          <div class="point-wrap">
            <h3 class="point">Point</h3>
            <ul class="p-list" v-if="!_.isEmpty(productData.product_point)">
              <li v-for="points in productData.product_point" :key="points.id">
                <span>{{ points.point }}</span>
              </li>
            </ul>
          </div>
          <!--point-wrap-->
          <p class="work-txt">
            {{ productData.about }}
            <!-- <a href="https://github.com/iwai32/RpgRanker" target="_blank"
            >Githubのソースコードはこちら</a
          > -->
          </p>
        </div>
        <!--inner-r-->
      </div>

      <div class="buttons update-button edit-work-button" v-if="isEdit">
        <TheBtnUpdate />
      </div>
    </div>
  </div>
</template>

<script>
import BaseBtnAdd from "~/components/atoms/BaseBtnAdd";
import BaseBtnDelete from "~/components/atoms/BaseBtnDelete";
import TheBtnUpdate from "~/components/atoms/TheBtnUpdate";

export default {
  components: {
    BaseBtnAdd,
    BaseBtnDelete,
    TheBtnUpdate,
  },
  props: {
    productData: {
      type: Object,
      default: {},
    },
    isEdit: {
      type: Boolean,
      default: false,
    },
  },
  computed: {
    productImage(product) {
      return function (product) {
        if (!_.isEmpty(product) && !_.isEmpty(product.picture1)) {
          return (
            process.env.API_URL + product.profile_id + "/" + product.picture2
          );
        } else {
          return "https://placehold.jp/240x240.png";
        }
      };
    },
  },
  methods: {
    emitTogglePanel() {
      this.$emit("close-panel", false);
    },
  },
};
</script>