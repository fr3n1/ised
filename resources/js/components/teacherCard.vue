<template>
  <div class="card mx-auto mt-5" style="width: 300px">
    <img
      class="card-img-top"
      src="storage/professorAvatar1.png"
      alt="Card image"
      style="width:100%"
    >
    <div class="card-body">
      <h4 class="card-title" v-text="value.NOME"></h4>
      <p class="card-text" v-text="value.DISCIPLINA"></p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    value: Object
  },
  mounted() {}
};
</script>
