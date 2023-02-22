<!-- Página de Ingredientes -->
<template>
    <nav-component />
    <modal-flex-component title="Adicionar ingrediente" id_modal="modalNew" title_input="Descrição" button="Salvar"
        class_button="success" :on_press="handle_create" />

    <div class="w-75 p-3 h-75 d-block mx-auto">
        <table class="table table-striped mt-5">
            <thead>
                <tr class="bg-primary-subtle">
                    <td>
                        <h3 class="mt-2 mb-3">Ingredientes</h3>
                    </td>
                    <td colspan="2">
                        <div class="d-md-flex justify-content-md-end mb-3">
                            <button class="btn btn-success btn-sm me-md-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalNew">
                                <i class="fa-solid fa-plus"></i>
                                Novo Ingrediente
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">
                        <div class="d-md-flex justify-content-center">
                            Ação
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="ingredient in ingredients">
                    <th scope="row">{{ ingredient.id }}</th>
                    <td scope="row">{{ ingredient.description }}</td>
                    <td>
                        <div class="d-md-flex justify-content-center">
                            <button type="button" class="btn btn-danger btn-sm me-3" data-bs-toggle="modal"
                                :data-bs-target="`#del${ingredient.id}`">
                                <i class="fa-solid fa-trash"></i>
                                Excluir
                            </button>

                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                :data-bs-target="`#${ingredient.id}`">
                                <i class="fa-solid fa-pen"></i>
                                Editar
                            </button>
                        </div>
                    </td>

                    <modal-delete-component :message="`Deseja excluir o ingrediente ${ingredient.description} ?`"
                        :id_modal="`del${ingredient.id}`" button="Excluir" element="ingredient" :on_press="handle_delete"
                        :id="ingredient.id" />

                    <modal-flex-component :title="`Editar ingrediente | ${ingredient.description}`"
                        :id_modal="ingredient.id" title_input="Descrição" button="Salvar alteração" class_button="primary"
                        :on_press="handle_update" :value="ingredient.id" :id="ingredient.id" />
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        ingredients: Array,
    },
    methods: {
        async handle_create(value) {
            const formData = new FormData();
            formData.append('description', value);

            const response = await fetch('/ingredientes', {
                method: "POST",
                body: formData
            })

            location.reload();
        },

        async handle_delete(id) {
            const formData = new FormData();
            formData.append('id', id);

            const response = await fetch(`/ingrediente/${id}`, {
                method: "POST",
                body: formData
            })

            location.reload();
        },

        async handle_update(value, id_ingredient) {
            const formData = new FormData();
            formData.append('id', id_ingredient);
            formData.append('description', value);

            const response = await fetch(`/ingrediente/edicao/${id_ingredient}`, {
                method: "POST",
                body: formData
            })

            location.reload();
        },
    },
}
</script>
