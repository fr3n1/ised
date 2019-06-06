<template>
  <div class="container float-right">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div v-for="(question, questionIndex) in questions" :key="question.id" class="mb-4">
              <div class="d-flex">
                <h3 v-text="questionIndex+1"></h3>
                <h3>)</h3>
                <h3 v-text="question.Questao"></h3>
              </div>
              <div class="d-flex justify-content-between">
                <h2 @click="send(1, questionIndex)" >
                  <i class="fas fa-angry"></i>
                </h2>
                <h2 @click="send(2, questionIndex)">
                  <i class="fas fa-frown"></i>
                </h2>
                <h2 @click="send(3, questionIndex)">
                  <i class="fas fa-meh"></i>
                </h2>
                <h2 @click="send(4, questionIndex)">
                  <i class="fas fa-smile"></i>
                </h2>
                <h2 @click="send(5, questionIndex)" v-bind:class="color">
                  <i class="fas fa-grin"></i>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import Notifications from "vue-notification/dist/ssr.js";

export default {
  data() {
    return {
      color: "",
      icons:[],
      questions: []
    };
  },
  props: {
    value: Object
  },
  methods: {
    getQuestions() {
      console.log(this.value.tipo);
      axios.post("/api/questions", { tipo: "Professor" }).then(response => {
        this.questions = response.data;
      });
    },
    send(score, perguntaId) {
      axios.post("/api/questions/send", { 
          score: score,
          user_id :12, 
          evaluated_id: this.value.id,
          id_pergunta: perguntaId
        
         }).then(response => {});
      //this.color = "angry_active"
    }
  },
  mounted() {
    this.getQuestions();
  }
};
</script>
<style>


.angry_active {
  color :red
}

.frown_active {
  color: yellow
}

.meh_active {
  color: rgb(117, 114, 114)
}
.smile_active {
  color: blue
}
.grin_active {
  color:green
}
</style>

