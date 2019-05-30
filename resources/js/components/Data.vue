<template>
  <div>
    <button @click="create">Add more</button>
    <h2>Amount of Cruds: {{cruds.length}}</h2>
    <div class="container__crud">
      <div
        class="container__crud-single"
        v-for="crud in cruds"
        v-bind="crud"
        :key="crud.id"
        :style="{backgroundColor: crud.color}"
      >
        <p>Name: {{crud.name}}</p>
        <p>{{crud.color}}</p>
        <p>id: {{crud.id}}</p>
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
      })
        .then(() => window.location.reload())
        .catch(({ message }) => console.log(message));
    },
    reload() {
      window.location.reload;
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
