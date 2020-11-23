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
    "profileData.profile_career": {
      handler(careers) {
        this.$_validCareerData(careers)
      },
      deep: true
    }
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
          name: "",
        },
        profileCareer: []
      },
    }
  },
  methods: {
    //明日リファクタリングする
    $_allValidCheck(validData) {
      let isSuccess = true

      _.forEach(validData, function (vData) {
        _.forEach(vData, function (vValue) {
          if (!_.isEmpty(vValue)) {

            if (typeof vValue === 'object') {

              _.forEach(vValue, function (test) {
                if (!_.isEmpty(test)) {
                  isSuccess = false
                }
              })

            } else {

              isSuccess = false
            }
          }
        })
      })

      return isSuccess
    },
    $_validCareerData(careers) {
      const VM = this
      _.forEach(careers, function (career, careerKey) {

        if (_.isEmpty(VM.validation.profileCareer[careerKey])) {
          //validation用のobjectを作成する
          VM.validation.profileCareer.push({
            content: "",
            date_from: ""
          })
        }
      })
    },
    $_validCareerContent(career, careerKey) {
      //企業名の入力チェック
      if (!_.isEmpty(this.validation.profileCareer[careerKey])) {

        if (career.content.length === 0) {
          this.validation.profileCareer[careerKey].content = this.msg_required
        } else {
          this.validation.profileCareer[careerKey].content = ""
        }

        return this.validation.profileCareer[careerKey].content
      }
    },
    $_validCareerDateFrom(career, careerKey) {
      //キャリア開始日の入力チェック
      if (!_.isEmpty(this.validation.profileCareer[careerKey])) {

        if (career.date_from.length === 0) {
          this.validation.profileCareer[careerKey].date_from = this.msg_required
        } else {
          this.validation.profileCareer[careerKey].date_from = ""
        }

        return this.validation.profileCareer[careerKey].date_from
      }
    },
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
