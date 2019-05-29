<template>
  <div class="container__crud" v-bind:style="{backgroundColor: color}">
    <h2>Name: {{ name }}</h2>
    <button @click="update">Red</button>
    <button @click="update">Green</button>
    <button @click="del">Delete</button>
  </div>
</template>


<script>
export default {
  props: ["name", "color", "id"],
  methods: {
    update(event) {
      this.$emit("update", this.id, event.target.innerText);
    },
    del() {
      this.$emit("delete", this.id);
    }
  }
};
</script>


<style lang="scss" scoped>
</style>
