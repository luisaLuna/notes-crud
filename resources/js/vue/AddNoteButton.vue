<template>
  <button class="add" id="add">
      <i class="fas fa-plus"></i> Add note
  </button>
</template>

<script>
export default {
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style scoped>
.add {
  position: fixed;
  top: 1rem;
  right: 1rem;
  background-color: #9ec862;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 0.5rem 1rem;
  cursor: pointer;
  font-size: 18px;
  margin: 18px 20px;
}

.add:active {
  transform: scale(0.98);
}
</style>
<style lang="scss" scoped></style>