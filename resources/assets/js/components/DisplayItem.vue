<template>
    <div>
        <h1>Items</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{name : 'CreateItem'}" class="btn btn-primary">Create Item</router-link>
            </div>
        </div>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Item Name</td>
                    <td>Item Price</td>
                    <td colspan="2">Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                    <td><router-link :to="{ name : 'EditItem' , params : { id : item.id }}" class="btn btn-primary">Edit</router-link> </td>
                    <td><button class="btn btn-danger" v-on:click="deleteItem(item.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "display-item",
        data: function() {
            return {
                items : {}
            }
        },
        created: function () {
            this.fetchItems();
        },
        mounted: function () {
            console.log("Hello "+ this.items);
        },
        methods : {
            fetchItems() {
                let uri = 'http://localhost:8000/items';
                this.axios.get(uri).then((response) => {
                    this.items = response.data;
                    console.log("Data : "+ this.items);
                });
            },
            deleteItem(id) {
                let uri = `http://localhost:8000/items/${id}`;
                this.items.splice(id, 1);
                this.axios.delete(uri);
            }
        }
    }
</script>

<style scoped>

</style>