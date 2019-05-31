<template>
  <div>
    <button @click="create">Add more</button>
    <h2>Amount of Cruds: {{cruds.length > 0 ? cruds.length : ''}}</h2>
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
        <div class="container__crud-buttons">
          <button class="container__crud-button" @click="del(crud.id)">Delete Crud</button>
          <button
            class="container__crud-button container__crud-button--color"
            @click="update(crud.id, crud.color)"
          >Change color</button>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
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
    update(id, color) {
      fetch(`api/crud/${id}`, {
        method: "PUT",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          color: color === "red" ? "green" : "red"
        })
      });
    },
    del(id) {
      fetch(`api/crud/${id}`, {
        method: "DELETE"
      })
        .then(() => window.location.reload())
        .catch(({ message }) => console.log(message));
    }
  }
};
</script>


<style lang="scss" scoped>
</style>
