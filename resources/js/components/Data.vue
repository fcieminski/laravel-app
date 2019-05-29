<template>
  <div class="container">
    <button @click="create">Add more</button>
    <div class="container__crud">
      <div
        v-for="crud in cruds"
        v-bind="crud"
        :key="crud.id"
        v-bind:style="{backgroundColor: crud.color}"
      >
        <p>{{crud.name}}</p>
        <p>{{crud.color}}</p>
        <p>{{crud.id}}</p>
      </div>
    </div>
  </div>
</template>


<script>
import Cruds from "./Cruds.vue";

export default {
  data() {
    return {
      cruds: []
    };
  },
  mounted() {
    fetch("/api/crud")
      .then(response => response.json())
      .then(data => {
        this.cruds = data;
      });
  },
  methods: {
    create() {
      fetch("api/crud/create", {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }).then(response => console.log(response));
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
