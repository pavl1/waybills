<template>
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить новую организацию</h4>
                </div>

                <div class="modal-body">

                    <alert :error="error"></alert>

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Наименование</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" v-model="item.name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Адрес</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" v-model="item.address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-sm-3 control-label">Тип</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-control" v-model="item.type_id">
                                    <option v-for="type in types" :value="type.id">{{ type.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" v-if="item.type_id === 1">
                            <label for="autos" class="col-sm-3 control-label">Автомобили</label>
                            <div class="col-sm-9">
                                <select name="autos" class="form-control" multiple="true" v-model="item.auto_ids">
                                    <option v-for="auto in autos" :value="auto.id">{{ auto.type.name }} {{ auto.model }} {{ auto.numberplate }}</option>
                                </select>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button-add :item="item" :disabled="error" :error="error" component="organization"></button-add>
                    <button-close :item="item" component="organization"></button-close>
                </div>

            </div>
        </div>
    </div>

</template>

<style>
.modal-dialog { width: 40vw; }
</style>

<script>

import buttonAdd from './button-add.vue'
import buttonClose from './button-close.vue'
import alert from './alert.vue'

export default {
    props: { autos: Array, types: Array },
    components: { buttonAdd, buttonClose, alert },
    data() {
        return {
            item: {
                name: '',
                address: '',
                type_id: 1,
                auto_ids: [],
            }
        }
    },
    computed: {
        error: function() {
            return !this.item.name || !this.item.address || ( this.item.type_id === 1 && !this.item.auto_ids.length )
        }
    }
}
</script>
