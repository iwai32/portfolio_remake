export default {
  watch: {
    "loginForm.email": function (val) {
      this.$_validEmail(val);
    },
    "loginForm.password": function (val) {
      this.$_validPassword(val);
    },
    "profileData.name": function (val) {
      this.$_validProfileName(val)
    },
  },
  data() {
    return {
      msg_required: "入力必須です。",
      email_type: "emailの形式ではありません。",
      password_min: "passwordは6文字以上が必須です。",
      validation: {
        login: {
          email: "",
          password: "",
        },
        profile: {
          name: ""
        }
      },
    }
  },
  methods: {
    $_validEmail(val) {
      const reg = new RegExp(
        "^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$"
      );

      if (val.length === 0) {
        this.validation.login.email = this.msg_required;
      } else if (!reg.test(val)) {
        this.validation.login.email = this.email_type;
      } else {
        this.validation.login.email = "";
      }
    },
    $_validPassword(val) {
      if (val.length === 0) {
        this.validation.login.password = this.msg_required;
      } else if (val.length < 6) {
        this.validation.login.password = this.password_min;
      } else {
        this.validation.login.password = "";
      }
    },
    $_validProfileName(val) {
      if (val.length === 0) {
        this.validation.profile.name = this.msg_required;
      } else {
        this.validation.profile.name = "";
      }
    }
  }
}
