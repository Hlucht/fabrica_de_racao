<!-- Modal para adicionar ingrediente em uma receita -->
<template>
    <div class="modal fade modal-sm" :id="id_modal" tabindex="-1" aria-labelledby="modalAddIngredientLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalAddIngredientLabel">{{ title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="addIngredient">
                        <div class="mb-3">
                            <label for="add_ingredient" class="col-form-label">Ingrediente</label>
                            <select class="form-select" aria-label="Default select example" id="add_ingredient"
                                v-model="ingredient_id">
                                <option v-for="ingredient in ingredients" :value="ingredient.id">{{ ingredient.description
                                }}</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Adicionar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        id_modal: String,
        ingredients: Array,
        recipe_id: Number,
    },
    data() {
        return {
            ingredient_id: "",
        }
    },
    methods: {
        async addIngredient() {
            const formData = new FormData();
            formData.append('ingredient_id', this.ingredient_id);
            formData.append('recipe_id', this.recipe_id);

            const response = await fetch('/receita', {
                method: "POST",
                body: formData
            })

            //Funcionaliade não finalizada - Relacionada com a função - store/RecipeIngredientController
        }
    },
}
</script>
