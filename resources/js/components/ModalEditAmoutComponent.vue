<!-- Modal para editar o campo 'Previsto em KG' de um ingrediente em uma receita -->
<template>
    <div class="modal fade" :id="id_modal" tabindex="-1" aria-labelledby="modalEditAmountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditAmountLabel">{{ title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="amount" class="col-form-label">Previsto em KG:</label>
                            <input type="number" class="form-control" id="amount" v-model="value">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Salvar alteração</button>
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
        "id_ingredient",
        "id_recipe",
    ],
    data() {
        return {
            value: "",
        }
    },
    methods: {

    }

    //Funcionalidade não finalizada
}
</script>
