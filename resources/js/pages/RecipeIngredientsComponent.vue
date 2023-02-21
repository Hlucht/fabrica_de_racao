<!-- Página de receita com seus ingredientes -->
<template>
    <nav-component />
    <modal-flex-component :title="`Editar Receita | ${recipe.name}`" id_modal="editRecipe" title_input="Nome" button="Salvar alteração" class_button="primary"/>
    <modal-add-ingredient-component title="Adicionar ingrediente" id_modal="modalAddIngredient" :ingredients="ingredients" :recipe_id="recipe.id"/>

    <div class="w-75 p-3 h-75 d-block mx-auto">
        <table class="table table-striped mt-5">
            <thead>
                <tr class="bg-primary-subtle">
                    <td colspan="4">
                        <h3>{{ recipe.id }} - {{ recipe.name }}</h3>
                    </td>
                    <td>
                        <div class="d-md-flex justify-content-md-end m-2">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            :data-bs-target="`#editRecipe`">
                            <i class="fa-solid fa-pen"></i>
                            Editar Receita
                        </button>
                        </div>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <h5 class="m-2">Ingredientes</h5>
                    </td>
                    <td colspan="4">
                        <div class="d-md-flex justify-content-md-end m-2">
                            <button class="btn btn-success btn-sm me-md-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalAddIngredient">
                                <i class="fa-solid fa-plus"></i>
                                Adicionar Ingrediente
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Ordem</th>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Previsto em KG</th>
                    <th scope="col">
                        <div class="d-md-flex justify-content-center">
                            Ação
                        </div>
                    </th>
                </tr>
            </thead>
            <draggable :list="recipe_ingredients" tag="tbody">
                <tr v-for="(recipe_ingredient, index) in recipe_ingredients" :key="recipe_ingredient.id">
                    <td scope="row"><i class="fa-solid fa-grip-vertical"></i> {{ index + 1 }}</td>
                    <td scope="row">{{ recipe_ingredient.ingredient_id }}</td>
                    <td scope="row">{{ recipe_ingredient.description }}</td>
                    <td scope="row">{{ recipe_ingredient.amount }}</td>
                    <td>
                        <div class="d-md-flex justify-content-center">
                            <button type="button" class="btn btn-danger btn-sm me-3" data-bs-toggle="modal"
                                :data-bs-target="`#del${recipe_ingredient.ingredient_id}`">
                                <i class="fa-solid fa-trash"></i>
                                Remover
                            </button>

                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                :data-bs-target="`#${recipe_ingredient.ingredient_id}`">
                                <i class="fa-solid fa-pen"></i>
                                Editar
                            </button>
                        </div>
                    </td>

                    <modal-edit-amount-component :title="`Editar ingrediente | ${recipe_ingredient.description}`"
                        :id_modal="`${recipe_ingredient.ingredient_id}`" />

                    <modal-delete-component :message="`Deseja remover o ingrediente ${recipe_ingredient.description} ?`"
                        :id_modal="`del${recipe_ingredient.ingredient_id}`" button ="Remover" element="recipe ingredient"/>
                </tr>
            </draggable>
        </table>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { VueDraggableNext } from 'vue-draggable-next'

export default defineComponent({
    components: {
        draggable: VueDraggableNext,
    },
    props: {
        recipe: Object,
        ingredients: Array,
        // recipe_ingredients: Array,
    },
    data() {
        return {
            recipe_ingredients: [
                { ingredient_id: '1', description: 'Milho', amount: 100 },
                { ingredient_id: '3', description: 'Farinha', amount: 250 }
            ],
        }
    },

    //Funcionalidade não finalizada - Ingredientes renderizados como exemplo 
})
</script>
