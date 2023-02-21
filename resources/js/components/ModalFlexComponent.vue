<!-- Modal para atender as funcionalidades de inserção e edição de um elemento -->
<template>
    <div class="modal fade" :id="id_modal" tabindex="-1" aria-labelledby="modalFlexLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalFlexLabel">{{ title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="flex" class="col-form-label">{{ title_input }}</label>
                            <input type="text" class="form-control" id="flex" v-model="value">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" :class="`btn btn-${class_button}`" @click="() => handle_press()">{{ button }}</button>
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
        "title_input",
        "button",
        "class_button",
        "on_press",
    ],
    data(){
        return {
            value: "",
        }
    },
    methods: {
        handle_press(){
            this.on_press(this.value);
        }
    }

    //Funcionalidade parcialmente finalizada 

    //No momento apenas a INSERÇÃO funciona
}
</script>
