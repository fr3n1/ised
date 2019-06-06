
<template>
  <div>
    <div class="d-flex justify-content-between">
      <div class="sidenav">
        <div class="progress">
          <div class="progress-bar bg-success w-100">100%</div>
        </div>
        <div
          v-for="(professor, professorIndex) in professores"
          :key="professor.id"
          @click="changeProfessor(professorIndex)"
        >
          <professor-card v-model="professores[professorIndex]"></professor-card>
        </div>
      </div>
    </div>
    <div class="d-block mx-auto align-text-top">
      <h4 v-text="user.id"></h4>
      <h4 v-text="'Curso: CCO'"></h4>
      <h4 v-text="'Campus: PA1'"></h4>
      <h4 v-text="'Período: Matutino'"></h4>
    </div>
    <questionario v-model="professores[activeProfessor]" :key="activeProfessor"></questionario>
  </div>
</template>

<script>
import ProfessorCard from "./teacherCard";
import Questionario from "./Questionario";
export default {
  components: {
    "professor-card": ProfessorCard,
    questionario: Questionario
  },
  methods: {
    changeProfessor(professorIndex) {
      this.activeProfessor = professorIndex;
    },
    getTeachers() {
      axios.get("/api/teachers").then(response => {
       // this.professores = response.data;
        console.log(this.professores);
      }).catch(function (error) {
        console.log(error);
      });
    },
    getUser() {
      axios.get("/api/user").then(response => {
        this.user = response.data;
        console.log(this.user);
      }).catch(function (error) {
        console.log(error);
      });;
    },
  },

  data() {
    return {
      activeProfessor: 0,
      user: {},
      professores: [
        {
          id: 1,
          NOME: "Prof. Joãozinho do Juazeiro",
          DISCIPLINA: "Laravel",
          tipo: "Professor"
        },

      ]
    };
  },
  mounted() {
    this.getTeachers();
    this.getUser();
  }
};
</script>

<style lang="scss" scoped>
body {
  font-family: "Lato", sans-serif;
}
.sidenav {
  height: 100%;
  width: 400px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #525252;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-top: 25px;
  margin-left: 420px;
  /* Same as the width of the sidenav */
  font-size: 28px;
  /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}
</style>
