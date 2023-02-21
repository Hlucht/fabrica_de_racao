<!-- Página de receitas -->
<template>
    <nav-component />
    <modal-flex-component title="Adicionar receita" id_modal="modalNew" title_input="Nome" button="Salvar"
        class_button="success" :on_press="handle_create" />

    <div class="w-75 p-3 h-75 d-block mx-auto">
        <table class="table table-striped mt-5">
            <thead>
                <tr class="bg-primary-subtle">
                    <td>
                        <h3 class="mt-2 mb-3">Receitas</h3>
                    </td>
                    <td colspan="2">
                        <div class="d-md-flex justify-content-md-end mb-3">
                            <button class="btn btn-success btn-sm me-md-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalNew">
                                <i class="fa-solid fa-plus"></i>
                                Nova Receita
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">
                        <div class="d-md-flex justify-content-center">
                            Ação
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="recipe in recipes">
                    <th scope="row">{{ recipe.id }}</th>
                    <td><a :href="`/receita/${recipe.id}`">{{ recipe.name }}</a></td>
                    <td>
                        <div class="d-md-flex justify-content-center">
                            <button type="button" class="btn btn-danger btn-sm me-3" data-bs-toggle="modal"
                                :data-bs-target="`#del${recipe.id}`">
                                <i class="fa-solid fa-trash"></i>
                                Excluir
                            </button>
                        </div>
                    </td>

                    <modal-delete-component :message="`Deseja excluir a receita ${recipe.name} ?`"
                        :id_modal="`del${recipe.id}`" button="Excluir" element="recipe" />
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        recipes: Array,
    },
    methods: {
        async handle_create(value) {
            const formData = new FormData();
            formData.append('name', value);

            const response = await fetch('/receitas', {
                method: "POST",
                body: formData
            })

            if (response.status == 201) {
                const recipe = await response.json();

                window.location.href = `http://localhost:8000/receita/${recipe.id}`;
            } else {
                console.error("Não foi possível cadastrar receita");
            }
        }
    },

    //Funcionalidade parcialmente finalizada 

    //No momento apenas a INSERÇÃO funciona
}
</script>
