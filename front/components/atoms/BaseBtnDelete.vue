<template>
  <i
    class="fa fa-times-circle-o delete-button"
    :class="customClassName"
    aria-hidden="true"
    @click="deleteItem(deleteData, dataKey)"
  ></i>
</template>

<script>
export default {
  props: {
    deleteData: {
      type: Array,
      default: []
    },
    dataKey: {
      type: Number,
      default: 0
    },
    customClassName: {
      type: String,
      default: ""
    }
  },
  methods: {
    deleteItem(items, key) {
      items.splice(key, 1)
    }
  }
};
</script>