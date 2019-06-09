<template>
  <div>
    <h2>{{name}}</h2>
    <h3>{{title}}</h3>
  </div>
</template>


<script>
import store from "../store/index";
export default {
  data() {
    return {
      name: "Checking Vuex"
    };
  },
  computed: {
    title() {
      return this.$store.state;
    }
  }
};
</script>
