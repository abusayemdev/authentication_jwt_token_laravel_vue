<template>
  <div class="register-page">
    <br><br>
    <form @submit.prevent="signup">
      <input type="text"  placeholder="Full Name" v-model="form.name">  <br>
       <small style="color:red;" v-if="errors.name">{{errors.name[0]}}</small> <br>
      <input type="email"  placeholder="Email" v-model="form.email"> <br>
       <small style="color:red;" v-if="errors.email">{{errors.email[0]}}</small> <br>
      <input type="password"  placeholder="Password" v-model="form.password"> <br>
       <small style="color:red;" v-if="errors.password">{{errors.password[0]}}</small> <br>
      <input type="password"  placeholder="Retype Password" v-model="form.password_confirmation"> <br> <br>
      <button type="submit" class="btn btn-primary">Register</button> <br><br>
      <router-link to="/">I already have an account</router-link>
    </form>
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
        name: null,
        email: null,
        password: null,
        password_confirmation: null
      }
    }
  },

  methods: {
    signup(){
      axios.post('/api/auth/signup', this.form)
      .then( 
       res => {
        User.responseAfterLogin(res)

        new Noty({
          type: 'success',
          text: 'You are registered successfully!',
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