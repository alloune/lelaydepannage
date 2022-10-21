<template>
    <div>
        <p>Ajouter un formulaire</p>
        <button @click="showForm">Afficher</button>
        <div v-for="number in addForm">
            <form class="form-control">
                <div v-for="(details,key) in carDetails" class="form-group">
                    <label class="form-group">{{ details }}</label>
                    <input class="form-group" type="text" :name="key"/>
                </div>
                    <label>Description</label>
                    <textarea  name="description" placeholder="Ta description ..."></textarea>
                <br/>
                <p>Pour ajouter plusieurs images, choisir tous les fichiers d'un coup.</p>
                <input @submit.prevent type="file" name="media" multiple="multiple" accept=".jpg, .png, .jpeg">
                <br/>
                <input @submit.prevent @click="postToAPI" type="submit" value="Ajouter">
            </form>
        </div>


    </div>
</template>

<script>
export default {
    name: "AddVehicule",
    data: function (){
        return {
            addForm : 0,
            carDetails:
                {
                    'year' : 'Année de construction',
                    'brand' : 'Marque',
                    'km' : 'Killométrage',
                    "model" : "Modèle",
                    "engine" : 'Cylindré',
                    "fuels" : 'Carburant',
                    "price" : 'Prix',
                    "ct" : 'Contrôle technique',
                }

        }
},
    methods:{
    showForm(){
        this.addForm ++;
    },
    postToApi(){

    }
    }
}
</script>

<style scoped>

</style>
