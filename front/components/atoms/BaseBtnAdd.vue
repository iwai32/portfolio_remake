<template>
  <span class="icon-wrapp" @click="addItem(addData, categoryName)"
    ><i class="fa fa-plus-circle add-icon" aria-hidden="true"></i
  ></span>
</template>

<script>
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
    addItem(item, category) {
      let copyObject = _.cloneDeep(item[0]);
      const VM = this;

      _.forEach(copyObject, function (value, key) {
        if (typeof copyObject[key] === "object") {
          VM.cloneObject(copyObject[key]);
        } else {
          copyObject[key] = "";
        }
      });

      item.push(copyObject);
    },
    //objectがなくなるまで回し、プロパティを空にする
    cloneObject(item) {
      const VM = this;

      _.forEach(item, function (value, key) {
        if (typeof item[key] === "object") {
          VM.cloneObject(item[key]);
        } else {
          item[key] = "";
        }
      });

    },
  },
};
</script>