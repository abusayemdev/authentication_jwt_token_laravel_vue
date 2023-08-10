<template>
  <div class="forget-page">
    <br><br>
    <form @submit.prevent="forget">
      <input type="email" placeholder="Existing Email" v-model="form.email"> <br>
      <small style="color:red;" v-if="errors.email">{{errors.email[0]}}</small> <br>
      <button type="submit" class="btn btn-md btn-primary">Submit</button> <br><br>
    </form>
     <router-link to="/">Back to Login</router-link>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  created(){
    if (User.loggedIn()) {
      this.$router.push({name: 'home'})
      
    }

  },

  data(){
    return {
      errors: {},
      form: {
        email: null,
      }
    }
  },

  methods: {
    forget(){
      axios.post('/api/forgetuser', this.form)
       .then( res =>{
         if (res.data.email === this.form.email) {
            new Noty({
            type: 'success',
            text: 'Email matched!',
            layout: 'topRight',
            timeout: 3000
            }).show();

           this.$router.push({name: 'newpassword'})
         } 

       })

        .catch(error => {
          new Noty({
            type: 'error',
            text: 'Email not found!',
            layout: 'topRight',
            timeout: 3000
            }).show()

           this.errors = error.response.data.errors
           })
    }
  }


}

</script>

<style>

</style>