<template>
    <div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск по имени, должности и водительскому удостоверению..." v-model="search" :value="search">
        </div>
        <employer v-for="person in employers" :person="person"></employer>
        <employer-new></employer-new>
    </div>
</template>

<script>

import { mapGetters, mapActions } from 'vuex'
import employer from '../components/employer.vue'
import employerNew from '../components/employer-new.vue'

export default {
    data() { return { search: '' } },
    components: { employer, employerNew },
    methods: { ...mapActions([ 'init' ]) },
    mounted() {
        this.init('employer')
        // Для дочерних компонентов
        this.init('position')
    },
    computed: {
        ...mapGetters([ 'getEmployers' ]),
        employers() {

            return _.orderBy(this.getEmployers.filter( (employer) => {
                let name =  (
                        employer.last_name.toLowerCase() + employer.first_name.toLowerCase() + employer.middle_name.toLowerCase()
                    ).indexOf(this.search) > -1
                let position = employer.position.name.toLowerCase().indexOf(this.search) > -1
                let license = _.has(employer.options, 'license') ? employer.options.license.toString().indexOf(this.search) > -1 : false
                return ( name || position || license )
            }), 'name')
        }
    }
}
</script>
