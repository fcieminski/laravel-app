<template>
  <div class="container">
    <button @click="create">Add more</button>
    <div class="container__crud">
      <cruds v-for="crud in cruds" v-bind="crud" :key="crud.id" @update="update" @delete="del"></cruds>
    </div>
  </div>
</template>


<script>
// function Crud({ id, color, name }) {
//   this.id = id;
//   this.color = color;
//   this.name = name;
// }

let data = { id: 1, name: "kokojambo", color: "red" };

import Cruds from "./Cruds.vue";

export default {
  data() {
    return {
      cruds: []
    };
  },
  methods: {
    create(data) {
      fetch("api/crud/create", {
        method: "GET",
        // body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json"
        }
      }).then(response => console.log(response));
    },
    read() {
      window.axios.get("/api/cruds").then(({ data }) => {
        console.log(data);
      });
    },
    update(id, color) {
      // To do
    },
    del(id) {
      // To do
    }
  },
  component: {
    Cruds
  }
};
</script>


<style lang="scss" scoped>
</style>
