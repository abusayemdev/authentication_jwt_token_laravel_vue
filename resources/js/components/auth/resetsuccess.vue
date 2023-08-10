<template>
  <div class="newpassword-page">
    <br><br>
    <h1>Password Reset Successfull!</h1>
     <router-link to="/">Back to Login</router-link>
  </div>
</template>

<script>

export default {
  created(){
    if (User.loggedIn()) {
      this.$router.push({name: 'home'})
      
    }

  }
}

</script>

<style>

</style>