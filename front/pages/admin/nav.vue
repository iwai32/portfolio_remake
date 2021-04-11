<template>
  <section class="admin-con">
    <div>
      <h2 class="admin-con__title">Edit</h2>
      <TheUpdatePopUp/>
      <PageNavBtns :nav-category-data="navCategoryDataForAdmin" :PageClass="'admin'" />
    </div>
  </section>
</template>

<script>
import { mapGetters } from "vuex"
import TheUpdatePopUp from "~/components/atoms/TheUpdatePopUp"
import PageNavBtns from "~/components/molecules/PageNavBtns";

export default {
  middleware({ store, redirect }) {
    if (!store.$auth.loggedIn) {
      //認証指定いなかったらトップへリダイレクト
      redirect("/");
    }
  },
  async fetch({ store }) {
    await store.dispatch("navCategory/navCategoryDataForAdmin");
  },
  components: {
    TheUpdatePopUp,
    PageNavBtns,
  },
  data() {
    return {
      PageNavBtnList: [
        {
          title: "Profile",
          url: "/admin/edit-profile",
          activeRoute: "edit-profile",
        },
        {
          title: "Skill",
          url: "/admin/edit-skills",
          activeRoute: "edit-skills",
        },
        {
          title: "Works",
          url: "/admin/edit-works",
          activeRoute: "edit-works",
        },
      ],
    };
  },
  computed: {
    ...mapGetters({
      navCategoryDataForAdmin: "navCategory/navCategoryDataForAdmin"
    })
  }
};
</script>