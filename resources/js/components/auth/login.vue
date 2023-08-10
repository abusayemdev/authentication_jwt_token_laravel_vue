<template>
  <div class="login-page" >
    <br><br>
    <form @submit.prevent="login">
        <input type="email" placeholder="Email" v-model="form.email"> <br>
        <small style="color:red;" v-if="errors.email">{{errors.email[0]}}</small> <br>
        <input type="password" placeholder="Password" v-model="form.password"> <br> 
        <small style="color:red;" v-if="errors.password">{{errors.password[0]}}</small> <br> 
        <button type="submit" class="btn btn-primary">Log In</button> 
    </form>

    <br>
    <router-link to="/forget">I forgot my password</router-link>
    <br>
    <router-link to="/register">Register a new account</router-link>

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
        password: null
      }
    }
  },

  methods: {
    login(){
      axios.post('/api/auth/login', this.form)
      .then( 
       res => {
        User.responseAfterLogin(res)
        new Noty({
            type: 'success',
            text: 'You are logged in successfully!',
            layout: 'topRight',
            timeout: 3000
            }).show()

        this.$router.push({name: 'home'})
         }
      )
      .catch(error => {
         this.errors = error.response.data.errors

         new Noty({
            type: 'error',
            text: 'Invalid Email or Password!',
            layout: 'topRight',
            timeout: 3000
            }).show()
         
      })
     
    }
  }


}
</script>

<style>
</style>