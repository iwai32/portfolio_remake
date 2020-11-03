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
            <span class="form__group__attention">emailが違います</span>
          </div>
        </div>
        <!--.formgroup-->

        <div class="form__group">
          <label class="form__group__label" for="password_confirm"
            ><span>Password(confirm)：</span></label
          >
          <div class="form__group__inputs">
            <input
              type="password"
              id="password_confirm"
              v-model.trim="loginForm.password_confirm"
              required
            />
            <span class="form__group__attention">emailが違います</span>
          </div>
        </div>
        <!--.formgroup-->

        <div class="form__buttons">
          <input
            type="submit"
            value="ログイン"
            class="form__buttons__btn"
            @click="login()"
          />
        </div>
      </div>
    </div>
    <!--.c-container-->
    {{ loginForm }}
  </section>
</template>

<script>
import Validation from "~/const/validation"
export default {
  data() {
    return {
      loginForm: {
        email: "",
        password: "",
        password_confirm: "",
      },
      validation: {
        email: "",
        password: "",
        password_confirm: ""
      }
    };
  },
  watch: {
    'loginForm.email': function(val) {
      this.validEmail(val)
    }
  },
  methods: {
    validEmail(val) {
      console.log(Validation.TEST)
      if (val == "") {
        this.validation.email = "emailが未入力です。"
      }
    },
    login() {
      if (this.loginForm.email == "") {
        alert("未入力");
      } else {
        alert("入力あり");
      }

      //未入力チェック
      //email形式チェック
      //passwordとconfirmの一致確認
      console.log(this.loginForm);
    },
  },
};
</script>