<!-- Modal geral para excluir elementos no sistema -->
<template>
    <div class="modal fade modal-sm" :id="id_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h5>{{ message }}</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="delete" @click="delete_recipe">{{ button }}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        message: String,
        id_modal: String,
        button: String,
        element: String,
    },

    //Funcionalidade não finalizada
}
</script>
