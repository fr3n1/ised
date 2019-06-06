<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body" >
                        <form method="get" action="/api/test">
                            <button type="submit">sexo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            getQuestions(){
                axios.get('/api/questions').then((response)=>{
                    console.log(response.data);
                })
            }
        },
        mounted(){
            this.getQuestions();
        }

    }
</script>
