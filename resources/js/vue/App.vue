<template>
<div id="container">
 <h1>Notes App</h1>
  <div class="notesContainer">
      <div class="heading">
        <add-note-button></add-note-button>
      </div>
      <note-component></note-component>
  </div> 
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
<style>
body {
  font-family: 'Poppins', sans-serif;
  background-color: #b7dde7;
}

h1 {
  margin-left: 20px;
  margin-top: 30px;
  margin-bottom: 0;
  color: #364621;
}

.heading {
  display: block;
  width: 100%;
  color: #597236;
  margin: 0px 30px;
}

.notesContainer {
  display: flex;
  flex-wrap: wrap;
  max-width: 100%;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  margin-top: 20px;
} 

.note {
  background-color: #fff;
  box-shadow: 4px 4px 10px 4px rgba(0, 0, 0, 0.1);
  margin: 30px 20px;
  height: 400px;
  width: 400px;
}

.note .tools {
  background-color: #9ec862;
  display: flex;
  justify-content: flex-end;
  padding: 0.5rem;
}

.note .tools button {
  background-color: transparent;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 1rem;
  margin-left: 0.5rem;
}

.note textarea {
  outline: none;
  font-size: 1.2rem;
  border: none;
  padding: 20px;
  font-family: 'Poppins', sans-serif;
}

#title {
    height: 20px;
    margin: 0;
    padding-bottom: 0px;
    resize: none;
    overflow-y: hidden;
}

#author {
    margin: 0;
    height: 5px;
    resize: none;
    overflow-y: hidden;
    padding-top: 10px;
    padding-bottom: 15px;
}


#description {
    margin: 0;
    padding-top: 10px;
    height: 200px;
    width: 87%;
    resize: none;
}
</style>