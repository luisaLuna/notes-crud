<template>
<div class="container">
  <button class="add" id="add" @click="addNote">
      <i class="fas fa-plus"></i> Add note
  </button>
</div>
</template>

<script>
import NoteComponent from './NoteComponent'

export default {
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {
    addNote(){
      let container = document.querySelector('.notesContainer');
      let note = document.createElement('div');
      note.innerHTML = `<div class="note">
   <div class="tools">
        <button class="delete"><i class="fas fa-trash-alt"></i></button>
    </div>

    <textarea id="title" placeholder="Title"></textarea>
    <textarea id="author" placeholder="Author"></textarea>
    <textarea id="description" placeholder="Description"></textarea>

</div>`
      container.append(note);
    }
  },
  components: {
    NoteComponent
  }
};
</script>

<style>
.add {
  position: fixed;
  top: 1rem;
  right: 1rem;
  background-color: #9ec862;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 0.5rem 1rem;
  cursor: pointer;
  font-size: 18px;
  margin: 18px 30px;
}

.add:active {
  transform: scale(0.98);
}
</style>