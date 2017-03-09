export default {

    // GENERAL
    EDIT (state, payload) { if (payload.attribute) payload.item[payload.attribute] = true; else payload.item.edit = true },
    CANCEL (state, payload) {
        if (payload.attribute) payload.item[payload.attribute] = false;
        else {
            payload.item.edit = false;
            Object.assign(payload.current, payload.item)
        }
    },

    // EMPLOYER
    INIT_POSITION (state, items) { state.types.positions = items },
    INIT_EMPLOYER (state, items) {
        state.employers = _.orderBy( items.map( item => { item.edit = false; return item }), 'last_name' )
    },
    CREATE_EMPLOYER(state, item) { item.edit = false; state.employers.push(item) },
    UPDATE_EMPLOYER (state, payload) {
        let index = state.employers.indexOf(payload.item);
        payload.current.edit = false;
        state.employers.splice(index, 1, payload.current);
    },
    DESTROY_EMPLOYER (state, item) { state.employers.splice(state.employers.indexOf(item), 1) },

    // AUTOS
    INIT_AUTOTYPE (state, items) { state.types.autos = items },
    INIT_AUTO(state, items) { state.autos = items.map(item => { item.edit = false; return item }) },
    CREATE_AUTO(state, item) { item.edit = false; state.autos.push(item) },
    UPDATE_AUTO(state, payload) { let current = payload.current; let index = state.autos.indexOf(payload.item); current.edit = false; state.autos.splice(index, 1, payload.current); },
    DESTROY_AUTO (state, item) { state.autos.splice(state.autos.indexOf(item), 1) },

    // ORGANIZATIONS
    INIT_ORGANIZATIONTYPE (state, items) { state.types.organizations = items },
    INIT_ORGANIZATION (state, items) { state.organizations = items.map( item => { item.edit = false; item.auto_ids = item.autos.map(auto => auto.id); return item }) },
    CREATE_ORGANIZATION (state, item) { item.edit = false; item.auto_ids = item.autos.map(auto => auto.id); state.organizations.push(item) },
    UPDATE_ORGANIZATION (state, payload) { payload.current.edit = false; payload.current.auto_ids = payload.current.autos.map( item => item.id ); let index = state.organizations.indexOf(payload.item); state.organizations.splice(index, 1, payload.current); },
    DESTROY_ORGANIZATION (state, item) { state.organizations.splice(state.organizations.indexOf(item), 1) },

    // WAYBILLS
    INIT_WAYBILL(state, items) { state.waybills = items.map(item => {item.edit = false; return item }) }

}
