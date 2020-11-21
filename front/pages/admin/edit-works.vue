<template>
  <section class="section">
    <div class="edit-works">
      <h2 class="edit-works__title">Works</h2>
      <!--Works-->
      <div class="edit-works__inner--top">
        <ul class="edit-works-list">
          <li
            class="work-item del-point"
            v-for="(product, productKey) in productData"
            :key="productKey"
          >
            <a class="work-item__frame" @click.stop="showProduct(product)">
              <img :src="productImage(product)" :alt="product.name" />
            </a>
            <div class="form__group work-item-form__group">
              <input type="text" required v-model="product.name" />
            </div>
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
            <BaseBtnDelete
              :deleteData="productData"
              :dataKey="productKey"
              :customClassName="'work-item-delete-button'"
            />
          </li>
        </ul>

        <BaseBtnAdd :addData="productData" :categoryName="'work-product'" />

        <WorksShow
          :productData="targetProduct"
          v-show="togglePanel"
          @close-panel="togglePanel = $event"
          :isEdit="true"
        />
      </div>
    </div>
    <!--.edit-works-->
  </section>
</template>

<script>
import { mapGetters } from "vuex";
import BaseBtnAdd from "~/components/atoms/BaseBtnAdd";
import BaseBtnDelete from "~/components/atoms/BaseBtnDelete";
import WorksShow from "~/components/organisms/WorksShow";
export default {
  components: {
    BaseBtnAdd,
    BaseBtnDelete,
    WorksShow,
  },
  async asyncData({ store }) {
    return store.dispatch("product/editProductData").then((res) => {
      return { productData: _.cloneDeep(res) };
    });
  },
  data() {
    return {
      targetProduct: {},
      togglePanel: false,
    };
  },
  computed: {
    productImage(product) {
      return function (product) {
        if (!_.isEmpty(product) && !_.isEmpty(product.picture1)) {
          return (
            process.env.API_URL + product.profile_id + "/" + product.picture1
          );
        } else {
          return "https://placehold.jp/200x200.png";
        }
      };
    },
  },
  methods: {
    showProduct(product) {
      this.targetProduct = product;
      this.togglePanel = true;
    },
  },
};
</script>