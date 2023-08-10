<template>
  <div class="newpassword-page">
    <br><br>
    <form @submit.prevent="newpassword">
      <input type="password" placeholder="New Password" v-model="form.password"> <br>
      <small style="color:red;" v-if="errors.password">{{errors.password[0]}}</small> <br> 
      <input type="password" placeholder="Retype New Password" v-model="form.password_confirmation"> <br><br>
      <button type="submit" class="btn btn-primary">Submit</button> <br><br>
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
        password: null,
        password_confirmation: null
      }
    }
  },

  methods: {
    newpassword(){
      axios.post('/api/newpassword', this.form)
      .then( 
       res => {
        new Noty({
            type: 'success',
            text: 'You got new password!',
            layout: 'topRight',
            timeout: 3000
            }).show()

        this.$router.push({name: 'resetsuccess'})
         }
      )
      .catch(error => { 
        this.errors = error.response.data.errors
          new Noty({
            type: 'error',
            text: 'ERROR!',
            layout: 'topRight',
            timeout: 3000
            }).show()
            }
      )
     
    }
  }


}

</script>

<style>

</style>