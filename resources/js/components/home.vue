<template>
  <div style="background-color:lightblue;">
      <h3>Home Component</h3>
      <router-link  to="/logout">Logout</router-link>
  </div>
</template>

<script>
export default {
  created(){
    if (!User.loggedIn()) {
      this.$router.push({name: '/'})
    }
  }

}
</script>

<style>

</style>