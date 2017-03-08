<template>
    <div class="panel panel-default">

        <div class="panel-heading">
            <form class="form-inline">
                <span class="panel-title">Путевые листы</span>
                <!-- <button type="button" class="btn btn-default btn-sm btn-new" data-toggle="modal" data-target="#modal"> <span class="glyphicon glyphicon-plus text-success" aria-hidden="true"></span> </button> -->
                <auto-types v-model="selected.type"></auto-types>
                <organization-select v-model="selected.organization" :organizations="filteredOrganizations"></organization-select>
                <button type="button" class="btn btn-default btn-sm" @click="clear"> <span class="glyphicon glyphicon-remove text-warning" aria-hidden="true"></span> </button>
            </form>

        </div>

        <div class="panel-body">
            <div>
                <div class="form-group">
                    <div class="input-group" v-if="selected.type || selected.organization">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" disabled v-if="selected.type">{{ selected.type }}</button>
                            <button type="button" class="btn btn-default" disabled v-if="selected.organization">{{ selected.organization }}</button>
                        </div>
                        <input type="text" class="form-control" placeholder="Поиск по модели, типу, номерному знаку автомобиля, наименованию или адресу организации..." id="search" autofocus v-model="search" :value="search">
                    </div>
                    <div v-else>
                        <input type="text" class="form-control" placeholder="Поиск по модели, типу, номерному знаку автомобиля, наименованию или адресу организации..." autofocus v-model="search" :value="search">
                    </div>

                </div>

                <div v-for="waybill in waybills" class="panel panel-default">
                    <div class="panel-body">
                        <waybill-print v-if="waybill.print" :waybill="waybill"></waybill-print>
                        <waybill-edit v-else-if="waybill.edit" :waybill="waybill"></waybill-edit>
                        <waybill-show v-else :waybill="waybill"></waybill-show>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<style scoped>
    .btn-new { margin: 0 1rem }
</style>

<script>
import { mapGetters, mapActions } from 'vuex'
import waybillShow from '../components/waybill-show.vue'
import waybillEdit from '../components/waybill-edit.vue'
import waybillPrint from '../components/waybill-print.vue'
import autoTypes from '../components/auto-types.vue'
import organizationSelect from '../components/organization-select.vue'

export default {
    data: function() {
        return {
            search: '',
            selected: {
                type: '',
                organization: ''
            }
        }
    },
    components: { autoTypes, organizationSelect, waybillShow, waybillEdit, waybillPrint },
    methods: {
        ...mapActions([ 'init' ]),
        clear() {
            this.selected.type = ''
            this.selected.organization = ''
        }
    },
    mounted() {
        this.init('employer')
        this.init('organization')
        this.init('auto')
        this.init('waybill')
    },
    computed: {
        ...mapGetters([ 'getAutos', 'getEmployers', 'getOrganizations', 'getWaybills' ]),
        filteredOrganizations: function() { return _.uniq(
            (this.getWaybills.filter( item => item.string.indexOf(this.selected.type) > -1 )).map( item => item.customer.name )
        ) },
        waybills: function() { let search = _.concat(this.search.toLowerCase().split(' '), _.values(this.selected).map( item => item.toLowerCase().replace(/\s+/g, '') ) ); return this.getWaybills.filter( item => search.every( part => item.string.indexOf(part) > -1 ) ) }
    }
}
</script>
