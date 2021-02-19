<template>
    <div>
        <div class="card mt-3" v-for="post in posts" :key="post.title">
            <img :src="'/images/'+post.image" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <button class="btn btn-primary" v-on:click="postClick(post)">Ver resume</button>
            </div>
        </div>
        <modal-post @closeModalPost="closeModalPost" :post="postSelected" ></modal-post>
    </div>
</template>
<script>
export default {
    methods:
    {
        postClick: function(p)
        {
            this.postSelected = p;
        },
    },
    data: function(){
        return{
            postSelected: "",
            posts:[
                {
                    title: "Titulo 1000",
                    content: "Contenido",
                    image: "1613602252.jpg"
                },
                {
                    title: "Titulo 2000",
                    content: "Contenido 2000",
                    image: "1613602252.jpg"
                }

            ]
        }
    }
}
</script>