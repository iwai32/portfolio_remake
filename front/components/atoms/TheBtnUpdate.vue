<template>
  <div>
    <button class="button" @click.stop="update()">Update</button>
  </div>
</template>

<script>
import callApi from "~/const/callApi";
export default {
  props: {
    updateData: {
      type: Object,
      default: {},
    },
    categoryName: {
      type: String,
      default: "",
    },
  },
  methods: {
    update() {
      let category = this.categoryName;
      let apiUrl = "";
      let storeName = "";

      if (category === "profile") {
        apiUrl = callApi.UPDATE_PROFILE_API;
        storeName = "profile/updateProfile";
      }

      //バイデーション
      this.$store.dispatch(storeName, {
        apiUrl: apiUrl,
        data: this.updateData
      });
    },
  },
};
</script>