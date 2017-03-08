<template>
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить новый автомобиль</h4>
                </div>

                <div class="modal-body">
                    <form class="form-horizontal">

                        <alert :error="error"></alert>

                        <div class="form-group">
                            <label for="model" class="col-sm-3 control-label">Модель и марка</label>
                            <div class="col-sm-9">
                                <input type="text" name="model" class="form-control" v-model="item.model">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="numberplate" class="col-sm-3 control-label">Номерной знак</label>
                            <div class="col-sm-9">
                                <input type="text" name="numberplate" class="form-control" v-model="item.numberplate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-sm-3 control-label">Тип</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-control" v-model="item.type_id">
                                    <option v-for="t in getAutoTypes" :value="t.id">{{ t.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="driver" class="col-sm-3 control-label not_required">Водитель</label>
                            <div class="col-sm-9">
                                <select name="driver" class="form-control" v-model="item.driver_id">
                                    <option v-for="d in getDrivers" :value="d.id">{{ fullName(d) }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dispatcher" class="col-sm-3 control-label not_required">Диспетчер</label>
                            <div class="col-sm-9">
                                <select name="dispatcher" class="form-control" v-model="item.dispatcher_id">
                                    <option v-for="d in getDispatchers" :value="d.id">{{ fullName(d) }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mechanic" class="col-sm-3 control-label not_required">Механик</label>
                            <div class="col-sm-9">
                                <select name="mechanic" class="form-control" v-model="item.mechanic_id">
                                    <option v-for="m in getMechanics" :value="m.id">{{ fullName(m) }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="refueler" class="col-sm-3 control-label not_required">Заправщик</label>
                            <div class="col-sm-9">
                                <select name="refueler" class="form-control" v-model="item.refueler_id">
                                    <option v-for="r in getRefuelers" :value="r.id">{{ fullName(r) }}</option>
                                </select>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button-add :item="item" :disabled="error" :error="error" component="auto"></button-add>
                    <button-close :item="item" component="auto"></button-close>
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
import { fullName } from './helpers'
import buttonAdd from './button-add.vue'
import buttonClose from './button-close.vue'
import alert from './alert.vue'

export default {
    components: { buttonAdd, buttonClose, alert },
    data() {
        return {
            item: {
                model: '',
                numberplate: '',
                driver_id: 0,
                dispatcher_id: 0,
                mechanic_id: 0,
                refueler_id: 0,
                type_id: 0
            }
        }
    },
    methods: { fullName: fullName },
    computed: {
        ...mapGetters([ 'getDrivers', 'getDispatchers', 'getMechanics', 'getRefuelers', 'getAutoTypes' ]),
        error: function() {
            return !this.item.model || !this.item.numberplate || !this.item.type_id
        }
    }
}
</script>
