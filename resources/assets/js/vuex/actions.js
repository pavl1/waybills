import Vue from 'vue'

function clear(payload) {
    let item = payload.item
    switch (payload.component) {
        case 'employer':
            item.name = ''
            item.position_id = 1
            item.options.license = ''
            break
        case 'auto':
            item.model = ''
            item.numberplate = ''
            item.type_id = 1
            item.driver_id = 0
            item.serviceStaff_ids = []
            break
        case 'organization':
            item.name = ''
            item.address = ''
            item.type_id = 1
            item.auto_ids = []
            break
    }
}

function prepare(payload) {
    let current = payload.current ? payload.current : payload.item
    switch (payload.component) {
        case 'auto':
            current.employer_ids = []
            _.has(current, 'driver_id') && current.employer_ids.push(current.driver_id)
            _.has(current, 'dispatcher_id') && current.employer_ids.push(current.dispatcher_id)
            _.has(current, 'mechanic_id') && current.employer_ids.push(current.mechanic_id)
            _.has(current, 'refueler_id') && current.employer_ids.push(current.refueler_id)
            break
        case 'organization':
            _.has(current, 'autos') && delete current.autos
            _.has(current, 'type') && delete current.type
            _.has(current, 'edit') && delete current.edit
            break
    }
}

export default {

    init ( { commit }, component ) {
        Vue.http.get('/api/' + component)
            .then( response => response.json() )
            .then( items => commit('INIT_' + component.toUpperCase(), items ) )
    },

    create ( { commit }, payload ) {
        prepare(payload)
        Vue.http.post('/api/' + payload.component, JSON.stringify(payload.item))
            .then( response => response.json() )
            .then( response => {
                commit('CREATE_' + payload.component.toUpperCase(), response )
                $('#modal').modal('hide')
                clear(payload)
            })
    },

    update ( { commit }, payload ) {
        prepare(payload)
        Vue.http.put('/api/' + payload.component + '/' + payload.item.id, JSON.stringify(payload.current))
            .then( response => response.json() )
            .then( current => commit('UPDATE_' + payload.component.toUpperCase(), { item: payload.item, current } ) )
    },

    destroy ( { commit }, payload ) {
        Vue.http.delete('/api/' + payload.component + '/' + payload.item.id).then(
            (response) => { commit('DESTROY_' + payload.component.toUpperCase(), payload.item) }
        )
    },

    edit ( { commit }, payload ) { commit('EDIT', payload ) },

    cancel ( { commit }, payload ) { commit('CANCEL', payload ) },

    clear ( { commit }, payload ) { clear(payload) },

}
