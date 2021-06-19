<template>
    <div class="notesContainer">
      <div class="heading">
        <h1 id="title">Notes App</h1>
        <add-note-button></add-note-button>
      </div>
      <note-component></note-component>
      <note-component></note-component>
      <note-component></note-component>
    </div>
</template>

<script>
import NoteComponent from './NoteComponent' 
import AddNoteButton from './AddNoteButton'

export default {
  components: {
    NoteComponent,
    AddNoteButton
  },
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>
<style scoped>
.heading {
  display: block;
  width: 100%;
  color: #597236;
  margin: 10px 20px;
}

.notesContainer {
  display: flex;
  flex-wrap: wrap;
  max-width: 100%;
  padding: 0;
} 
</style>
<style lang="scss" scoped></style>