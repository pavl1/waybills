<template>
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить нового работника</h4>
                </div>
                <div class="modal-body">

                    <alert :error="error"></alert>

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Фамилия</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="item.last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Имя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="item.first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label not_required">Отчество</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="item.middle_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-2 control-label">Должность</label>
                            <div class="col-sm-10">
                                <select name="position" class="form-control" v-model="item.position_id">
                                    <option v-for="position in getPositions" :value="position.id">{{ position.name }}</option>
                                </select>
                            </div>
                        </div>
                        <div v-if="item.position_id == 1" class="form-group">
                            <label for="license" class="col-sm-2 control-label">Водительское удостоверение</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" v-model="item.options.license">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button-add :item="item" :disabled="error" :error="error" component="employer"></button-add>
                    <button-close :item="item" component="employer"></button-close>
                </div>
            </div>
        </div>
    </div>

</template>

<style>
.modal-dialog { width: 40vw; }
</style>


<script>

import { mapGetters } from 'vuex'
import buttonAdd from './button-add.vue'
import buttonClose from './button-close.vue'
import alert from './alert.vue'

export default {
    props: { positions: Array },
    components: { buttonAdd, buttonClose, alert },
    data() {
        return {
            item: {
                first_name: '',
                middle_name: '',
                last_name: '',
                position_id: 0,
                options: {
                    license: ''
                }
            }
        }
    },
    computed: {
        ...mapGetters([ 'getPositions' ]),
        error: function() {
            return !this.item.first_name && !this.item.last_name || ( this.item.position_id === 1 && !this.item.options.license ) || !this.item.position_id
        }
    }
}
</script>
