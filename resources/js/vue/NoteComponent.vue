<template>
<div class="note">
   <div class="tools">
        <button class="delete"><i class="fas fa-trash-alt"></i></button>
    </div>

    <textarea id="title" placeholder="Title" v-model="title"></textarea>
    <textarea id="author" placeholder="Author" v-model="author"></textarea>
    <textarea id="description" placeholder="Description" v-model="description"></textarea>
    <textarea id="id" placeholder="id" v-model="id"></textarea>

    <button type="submit" @click="saveNote()">Save</button>
</div>

</template>

<script>
export default {
  data() {
    return {
        title: '',
        author: '',
        description: '',
        id: ''
    };
  },
  props: {},
  methods: {
          saveNote() {
    axios.post('/notes', {
        params: {
            id: this.id,
            title: this.title,
            autor: this.author, 
            description: this.description,
        }
    }).then(function (r) {
        this.title = ''
        this.author = ''
        this.description = ''
        this.id = ''
        location.reload();
    }).catch(function (error) {
        console.log(error);
    })
      }
  },
};
</script>
