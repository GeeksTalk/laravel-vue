<script>
import MakeComments from '../commons/makeComment.vue';
export default {
  name:'PostIndex',
  components: {
    MakeComments,
  },
  props: {
    post: {
      required: true,
      type: Object
    }
  },
  data() {
    return {
    }
  },
}
</script>
<template>
<div>
  <div class="col-lg-8  offset-2">

          <!-- Title -->
          <h1 class="mt-4">{{post.title}}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{post.user.fname}} {{post.user.lname}}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{post.created_at}}</p>

          <hr>

          <!-- Preview Image -->
        <img class="card-img-top" src="https://picsum.photos/400/200" alt="Card image cap">


          <hr>
          {{post.post}}
          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

          <hr>
          <make-comments></make-comments>
          <!-- Comment with nested comments -->
          <div class="media mb-4" v-for="(comment, index) in post.comments" :key="index">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{ comment.user.fname}}</h5>
                {{comment.comment}}
              <div class="media mt-4" v-for="(subcomment, index) in comment.children">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">{{subcomment.user.fname}}</h5>
                    {{subcomment.comment}}
                    <make-comments></make-comments>
                </div>
              </div>

            </div>
          </div>

        </div>
  </div>
</template>
<style></style>