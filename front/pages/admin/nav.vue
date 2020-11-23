<template>
  <section class="admin-con">
    <div>
      <h2 class="admin-con__title">Edit</h2>
      <TheUpdatePopUp/>
      <PageNavBtns :PageNavBtnList="PageNavBtnList" :PageClass="'admin'" />
    </div>
  </section>
</template>

<script>
import TheUpdatePopUp from "~/components/atoms/TheUpdatePopUp"
import PageNavBtns from "~/components/molecules/PageNavBtns";

export default {
  middleware({ store, redirect }) {
    if (!store.$auth.loggedIn) {
      redirect("/");
    }
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
  }
};
</script>