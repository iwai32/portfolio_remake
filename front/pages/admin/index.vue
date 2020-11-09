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
            <span class="form__group__attention">{{ validation.email }}</span>
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
              validation.password
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
import Validation from "~/const/validation";
export default {
  middleware({ store, redirect }) {
    if (store.$auth.loggedIn) {
      redirect("/admin/nav");
    }
  },
  data() {
    return {
      loginForm: {
        email: "",
        password: "",
      },
      validation: {
        email: "",
        password: "",
      },
    };
  },
  watch: {
    "loginForm.email": function (val) {
      this.validEmail(val);
    },
    "loginForm.password": function (val) {
      this.validPassword(val);
    },
  },
  computed: {
    isSuccess() {
      let emailOk =
        this.loginForm.email.length !== 0 && this.validation.email.length === 0;
      let passwordOk =
        this.loginForm.password.length !== 0 &&
        this.validation.password.length === 0;
      if (emailOk && passwordOk) {
        return true;
      }
      return false;
    },
  },
  methods: {
    validEmail(val) {
      const reg = new RegExp(
        "^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$"
      );

      if (val.length === 0) {
        this.validation.email = Validation.MSG_REQUIRED;
      } else if (!reg.test(val)) {
        this.validation.email = Validation.EMAIL_TYPE;
      } else {
        this.validation.email = "";
      }
    },
    validPassword(val) {
      if (val.length === 0) {
        this.validation.password = Validation.MSG_REQUIRED;
      } else if (val.length < 6) {
        this.validation.password = Validation.PASSWORD_MIN;
      } else {
        this.validation.password = "";
      }
    },
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