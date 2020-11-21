<template>
  <span class="icon-wrapp" @click="addItem()"
    ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
  ></span>
</template>

<script>
import ObjectData from "~/const/objectData";

export default {
  props: {
    addData: {
      type: Array,
      default: [],
    },
    categoryName: {
      type: String,
      default: "",
    },
  },
  methods: {
    addItem() {
      //定数は同じデータオブジェクトのため、そのままリストレンダリングで使用すると、
      //他のフィールドも連動して変更されてしまう。複製して別のデータオブジェクトとして作成する。
      let addItem = null;
      let category = this.categoryName;
      
      if (category === "sp-skill") {
        addItem = _.cloneDeep(ObjectData.SP_SKILL_OBJECT);
      } else if (category === "hobby") {
        addItem = _.cloneDeep(ObjectData.HOBBY_OBJECT);
      } else if (category === "pr") {
        addItem = _.cloneDeep(ObjectData.PR_OBJECT);
      } else if (category === "career") {
        addItem = _.cloneDeep(ObjectData.CAREER_OBJECT);
      } else if (category === "skill") {
        addItem = _.cloneDeep(ObjectData.SKILL_OBJECT);
      } else if (category === "skill-category") {
        addItem = _.cloneDeep(ObjectData.SKILL_CATEGORY_OBJECT);
      } else if (category === "work-product") {
        addItem = _.cloneDeep(ObjectData.WORK_PRODUCT_OBJECT);
      } else if (category === "work-point") {
        addItem = _.cloneDeep(ObjectData.WORK_POINT_OBJECT);
      } else if (category === "work-detail") {
        addItem = _.cloneDeep(ObjectData.WORK_DETAIL_OBJECT);
      }
      this.addData.push(addItem);
    },
  },
};
</script>