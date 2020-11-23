<template>
  <div>
    <button class="button" @click.stop="update()">Update</button>
  </div>
</template>

<script>
import callApi from "~/const/callApi";
import validation from "~/mixins/validation";
export default {
  props: {
    validData: {
      type: Object,
      default: {},
    },
    updateData: {
      type: Object,
      default: {},
    },
    categoryName: {
      type: String,
      default: "",
    },
  },
  mixins: [validation],
  methods: {
    async update() {
      //update前にバリデーションをする
      let isSuccess = this.$_allValidCheck(this.validData);

      if (isSuccess) {

        let category = this.categoryName;
        let apiUrl = "";
        let storeName = "";

        if (category === "profile") {
          apiUrl = callApi.UPDATE_PROFILE_API;
          storeName = "profile/updateProfile";
        }

        const response = await this.$store.dispatch(storeName, {
          apiUrl: apiUrl,
          data: this.updateData,
        });

        if (!_.isEmpty(response) && response.status === 200) {
          this.$router.push({ path: "/admin/nav", query: { update: true } });
        } else {
          console.log(response);
          alert("システムエラーもしくは入力内容に不備があります。");
        }
      } else {
        alert('入力内容に不備があります。')
      }
    },
  },
};
</script>