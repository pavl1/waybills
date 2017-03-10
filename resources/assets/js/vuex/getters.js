export default {

    getCompany (state) {
        return state.company
    },

    getPositions (state) {
        return state.types.positions
    },

    getEmployers (state) {
        return state.employers
    },

    getDrivers (state) {
        return state.employers.filter( (e) => e.position_id == 1 )
    },

    getDispatchers (state) {
        return state.employers.filter( (e) => e.position_id == 2 )
    },

    getMechanics (state) {
        return state.employers.filter( (e) => e.position_id == 3 )
    },

    getRefuelers (state) {
        return state.employers.filter( (e) => e.position_id == 4 )
    },

    getOrganizationTypes (state) {
        return state.types.organizations
    },

    getOrganizations (state) {
        return state.organizations
    },

    getCustomers (state) {
        return state.organizations.filter( (e) => e.type_id == 1 ) 
    },

    getContractors (state) {
        return state.organizations.filter( (e) => e.type_id == 2 )
    },

    getAutoTypes (state) {
        return state.types.autos
    },

    getAutos (state) {
        return state.autos
    },

    getWaybills (state) {
        return state.waybills
    },

    getWaybill (state) {
        return state.waybill
    },

    getPrints (state) {
        return state.prints
    }


    // getWaybill (state) {
    //     return state.waybill
    // }

}
