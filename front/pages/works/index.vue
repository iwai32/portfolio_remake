<template>
  <section class="section">
    <div class="works-con">
      <h2 class="works-con__title">Works</h2>
      <!--Works-->
      <div class="works-con__inner--top">
        <ul class="works-list">
          <li
            class="work-item"
            v-for="product in productData"
            :key="product.id"
          >
            <a class="work-item__frame" @click.stop="showProduct(product)">
              <img :src="productImage(product)" :alt="product.name" />
            </a>
            <h3 class="work-item__title">{{ product.name }}</h3>
            <!-- <p class="work-item__category">自主制作</p> -->
          </li>
        </ul>

        <WorksShow
          :productData="targetProduct"
          v-show="togglePanel"
          @close-panel="togglePanel = $event"
        />
      </div>
      <!--.works-con__inner--top-->

      <div class="works-con__inner--bottom">
        <div class="work-typ">
          <p class="work-typ__txt">
            <vue-typer :text="typText" :repeat="0"></vue-typer>
          </p>
        </div>
      </div>
      <!--.inner-bottm-->
    </div>
    <!--.works-con-->
  </section>
</template>

<script>
import { mapGetters } from "vuex";
import WorksShow from "~/components/organisms/WorksShow";
export default {
  components: {
    WorksShow,
  },
  fetch({ store }) {
    store.dispatch("product/productData");
  },
  data() {
    return {
      targetProduct: {},
      typText: "こちらは今までの制作物を紹介するページです。",
      togglePanel: false,
    };
  },
  computed: {
    productImage(product) {
      return function (product) {
        return (
          process.env.API_URL + product.profile_id + "/" + product.picture1
        );
      };
    },
    ...mapGetters({
      productData: "product/productData",
    }),
  },
  methods: {
    showProduct(product) {
      this.targetProduct = product;
      this.togglePanel = true;
    },
  },
};
</script>