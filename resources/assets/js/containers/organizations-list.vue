<template>
    <div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск по наименованию, типу и адресу..." v-model="search" :value="search">
        </div>
        <organization v-for="organization in organizations" :organization="organization" :types="getOrganizationTypes" :autos="getAutos"></organization>

        <organization-new :autos="getAutos" :types="getOrganizationTypes"></organization-new>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import organization from '../components/organization.vue'
import organizationNew from '../components/organization-new.vue'

export default {
    data: function() {
        return { search: '' }
    },
    components: { organization, organizationNew },
    methods: {
        ...mapActions([ 'init' ])
    },
    mounted() {
        this.init('auto')
        this.init('organization')
        this.init('organizationtype')
    },
    computed: {
        ...mapGetters([ 'getOrganizations', 'getOrganizationTypes', 'getAutos' ]),
        organizations: function() {
            return _.orderBy(this.getOrganizations.filter( organization => {
                let name = organization.name.toLowerCase().indexOf(this.search) > -1
                let address = organization.address.toLowerCase().indexOf(this.search) > -1
                let type = organization.type.name.toLowerCase().indexOf(this.search) > -1
                return ( name || address || type )
            }), 'name')
        }
    }
}</script>
