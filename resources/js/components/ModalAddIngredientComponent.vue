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
                    <form @submit.prevent="handle_press">
                        <div class="mb-3">
                            <label for="add_ingredient" class="col-form-label">Ingrediente</label>
                            <select class="form-select" aria-label="Default select example" id="add_ingredient"
                                v-model="id_ingredient">
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
    props: [
        "title",
        "id_modal",
        "ingredients",
        "id_recipe",
        "on_press",
    ],
    data() {
        return {
            id_ingredient: "",
        }
    },
    methods: {
        handle_press() {
            this.on_press(this.id_ingredient, this.id_recipe);
        }
    },
}
</script>
