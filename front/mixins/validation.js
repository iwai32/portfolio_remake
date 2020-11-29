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
        this.$_generateValidData(careers, 'careers')
      },
      deep: true
    },
    "skillData": {
      handler(skills) {
        this.$_generateValidData(skills, 'skills')
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
        skillData: [],
        skillDetails: [],
        profileCareer: []
      },
    }
  },
  methods: {
    //更新時に全ての入力が有効かチェックする
    $_allValidCheck(validData) {
      let isSuccess = true
      const VM = this

      _.forEach(validData, function (vData) {
        isSuccess = VM.$_validCheck(vData);
      })

      return isSuccess
    },
    //個別にチェックする
    $_validCheck(vData) {
      let isSuccess = true
      const VM = this

      _.forEach(vData, function (vData2) {
        if (!_.isEmpty(vData2)) {
          //バリデーションメッセージが表示されているかチェックする
          if (typeof vData2 === 'object') {
            //オブジェクトなら値を回して空か判定する
            isSuccess = VM.$_validCheckDeeply(vData2)

          } else {

            isSuccess = false
          }
        }
      })

      return isSuccess
    },
    //ネストされているバリデーションデータをチェックする
    $_validCheckDeeply(obj) {
      let isSuccess = true

      _.forEach(obj, function (childObj) {
        if (!_.isEmpty(childObj)) {

          if (typeof childObj === 'object') {

            //オブジェクトなら値を回して空か判定する
            isSuccess = VM.$_validCheckDeeply(childObj)
          } else {

            isSuccess = false
          }
        }
      })

      return isSuccess
    },
    //バリデーション用のデータを生成する
    $_generateValidData(data, categoryName) {
      const VM = this
      let validData = null
      let pushData = null

      _.forEach(data, function (datum, dataKey) {
        if (categoryName === 'careers') {
          validData = VM.validation.profileCareer
          pushData = {
            content: "",
            date_from: ""
          }

        } else if (categoryName === 'skills') {
          validData = VM.validation.skillData
          pushData = {
            name: "",
            skill_category_comment: {
              comment: ""
            }
          }
          //スキルのポイント用のデータを追加する
          VM.$_generateValidData(datum.skill_category_detail, 'skillDetails')
        } else if (categoryName === 'skillDetails') {

          validData = VM.validation.skillDetails
          pushData = {
            message: ""
          }
        }

        if (_.isEmpty(validData[dataKey])) {
          VM.$_validPushData(validData, pushData)
        }

      })
    },
    //validation用のobjectを作成する
    $_validPushData(data, obj) {
      data.push(obj)
    },
    //入力チェック
    $_validLength(data, dataKey, categoryName) {
      let validData = null
      let targetLength = null;
      let targetValidDatum = null

      if (categoryName === "career") {

        //企業名の入力チェック
        validData = this.validation.profileCareer
        targetLength = data.content.length
        targetValidDatum = !_.isEmpty(validData[dataKey]) ? validData[dataKey].content : ""
      } else if (categoryName === "careerdate") {

        //キャリア開始日の入力チェック
        validData = this.validation.profileCareer
        targetLength = data.date_from.length
        targetValidDatum = !_.isEmpty(validData[dataKey]) ? validData[dataKey].date_from : ""
      } else if (categoryName === "skill") {

        //スキル名の入力チェック
        validData = this.validation.skillData
        targetLength = data.name.length
        targetValidDatum = !_.isEmpty(validData[dataKey]) ? validData[dataKey].name : ""
      } else if (categoryName === "skillDetails") {

        //スキルのポイント入力チェック
        validData = this.validation.skillDetails
        targetLength = data.message.length
        targetValidDatum = !_.isEmpty(validData[dataKey]) ? validData[dataKey].message : ""
      } else if (categoryName === "skillComment") {
        validData = this.validation.skillData
        targetLength = data.comment.length

        if (!_.isEmpty(validData[dataKey]) && !_.isEmpty(validData[dataKey].skill_category_comment)) {
          targetValidDatum = validData[dataKey].skill_category_comment.comment
        } else {
          targetValidDatum = ""
        }
      }


      if (!_.isEmpty(validData[dataKey])) {

        if (targetLength === 0) {
          targetValidDatum = this.msg_required
        } else {
          targetValidDatum = ""
        }

        return targetValidDatum
      }

    },
    //imageチェック
    $_validFiles(file) {
      let isUploads = false
      let size = null;
      let type = null;
      let mime = null;

      if (!_.isNull(file)) {
        size = file.size
        type = file.type
        mime = this.$_getMime(type)
        isUploads = this.$_validFileMime(mime)
        isUploads = this.$_validFileSize(size)
      }

      return isUploads
    },
    //有効な拡張子かチェックする
    $_validFileMime(mime) {
      let allowExts = ['png', 'img', 'svg', 'jpeg', 'gif']

      if (allowExts.includes(mime)) {
        return true
      }
      return false
    },
    //有効なファイルサイズかチェックする
    $_validFileSize(size) {
      //上限サイズは3MB
      if (size < 3000000) {
        return true
      }
      return false
    },
    //ファイルの拡張子を取得する
    $_getMime(type) {
      let pos = type.lastIndexOf('/');
      if (pos === -1) return '';
      //拡張子を小文字にして返す
      return type.slice(pos + 1).toLowerCase();
    },
    //Emailチェック
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
    //Passwordチェック
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
