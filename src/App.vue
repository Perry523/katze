<template>
  <div class="col">
    <cad/>
  </div>
</template>

<script>
import cad from './components/Cadastro';
export default {
  name: 'App',

  components: {
    cad
  },

  data: () => ({
    //
  }),
  /*created(){
    this.$http.get('api/lentes',(resp) => {
      console.log(resp)
    })
  }*/
};
</script>
