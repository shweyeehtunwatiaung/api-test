<template>
 <div class="addItem">
   <input type="text" />
   <font-awesome-icon 
    icon = "plus-square"
   />
 </div>
</template>
<script>
export default {

}
</script>
<style scoped>
.addItem{
 display: flex;
 justify-content: center;
 align-items: center;
}
input{
 background: #f7f7f7;
 border:0px;
 outline: none;
 padding: 5px;
 margin-right: 10px;
 width: 100%;
}
</style>