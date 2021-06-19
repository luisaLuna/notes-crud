<template>
<div class="note">
   <div class="tools">
        <button class="edit"><i class="fas fa-edit"></i></button>
        <button class="delete"><i class="fas fa-trash-alt"></i></button>
    </div>

    <textarea id="title" placeholder="Title"></textarea>
    <textarea id="author" placeholder="Author"></textarea>
    <textarea id="description" placeholder="Description"></textarea>

</div>

</template>

<script>
export default {

};
</script>

<style scoped>
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
<style lang="scss" scoped></style>