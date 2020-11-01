<template>
  <div class="work-show">
    <span class="close" @click="emitTogglePanel"
      ><i class="fa fa-times" aria-hidden="true"></i
    ></span>
    <div class="work-container">
      <h2 class="work-title">
        <a :href="productData.product_url" target="_blank">{{
          productData.name
        }}</a>
      </h2>
      <div class="inner-l">
        <p class="work-photo">
          <a :href="productData.product_url" target="_blank"
            ><img :src="productImage(productData)" :alt="productData.name"
          /></a>
        </p>
        <dl class="work-lead" v-if="!_.isEmpty(productData.product_detail)">
          <template v-for="detail in productData.product_detail">
            <dt :key="`definition-${detail.id}`">{{ detail.definition }}</dt>
            <dd :key="`detail-${detail.id}`">{{ detail.detail }}</dd>
          </template>
        </dl>
      </div>
      <!--inner-l-->
      <div class="inner-r">
        <div class="point-wrap">
          <h3 class="point">Point</h3>
          <ul class="p-list" v-if="!_.isEmpty(productData.product_point)">
            <li v-for="points in productData.product_point" :key="points.id">
              {{ points.point }}
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
  </div>
</template>

<script>
export default {
  props: {
    productData: {
      type: Object,
      default: {},
    },
  },
  computed: {
    productImage(product) {
      return function (product) {
        if (!_.isEmpty(product)) {
          return (
            process.env.API_URL + product.profile_id + "/" + product.picture2
          );
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

<style>
</style>