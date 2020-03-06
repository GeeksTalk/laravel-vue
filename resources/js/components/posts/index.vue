<script>
export default {

  data() {
    return {
      posts: null
    }
  },
created() {
  this.fetchAll();
},
methods: {
fetchAll() {
  axios.get('/axios-post').then(( {data}) => this.posts = data);
}

}

}
</script>
<template>
<div>
  <div class="row">
    <div class="col-3" v-for="(post, index) in posts" :key="index">
      <div class="card" style="width: 18rem;" >
        <img class="card-img-top" src="https://picsum.photos/200/150" alt="Card image cap">
        <div class="card-body">
          <b> <a  :href="`/posts/${post.id}`">{{ post.title}}</a></b><br/>
          <span class="lead">{{post.user.fname }} @ {{post.created_at}}</span>
          <p class="card-text">{{post.post}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<style></style>