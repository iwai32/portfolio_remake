<template>
  <section class="section">
    <div class="admin-con">
      <h2 class="admin-con__title">Admin</h2>
      <div class="form">
        <div class="form__group">
          <label class="form__group__label" for="email">Email：</label>
          <div class="form__group__inputs">
            <input
              type="email"
              id="email"
              v-model.trim="loginForm.email"
              required
            />
            <span class="form__group__attention">{{
              validation.login.email
            }}</span>
          </div>
        </div>
        <!--.formgroup-->

        <div class="form__group">
          <label class="form__group__label" for="password">Password：</label>
          <div class="form__group__inputs">
            <input
              type="password"
              id="password"
              v-model.trim="loginForm.password"
              required
            />
            <span class="form__group__attention">{{
              validation.login.password
            }}</span>
          </div>
        </div>
        <!--.formgroup-->

        <div class="form__buttons">
          <input
            type="submit"
            value="ログイン"
            class="form__buttons__btn"
            @click="login()"
            :disabled="!isSuccess"
          />
        </div>
      </div>
    </div>
    <!--.c-container-->
  </section>
</template>

<script>
import validation from "~/mixins/validation";
export default {
  middleware({ store, redirect }) {
    if (store.$auth.loggedIn) {
      redirect("/admin/nav");
    }
  },
  mixins: [validation],
  data() {
    return {
      loginForm: {
        email: "",
        password: "",
      },
    };
  },
  computed: {
    isSuccess() {
      let emailOk = false;
      let passwordOk = false;

      if (
        _.get(this.loginForm, "email").length !== 0 &&
        _.get(this.validation, "login.email").length === 0
      ) {
        emailOk = true;
      }

      if (
        _.get(this.loginForm, "password").length !== 0 &&
        _.get(this.validation, "login.password").length === 0
      ) {
        passwordOk = true;
      }

      if (emailOk && passwordOk) {
        return true;
      }
      return false;
    },
  },
  methods: {
    login() {
      this.$auth
        .loginWith("local", {
          data: this.loginForm,
        })
        .then((res) => {
          this.$router.push("/admin/nav");
        });
    },
  },
};
</script>