import axios from 'axios'
import router from '@/router'

export default {
    namespaced: true,

    state:{
        components: {},
        selectedComponent: {},
        selectedBlock: {}
    },

    getters:{
        components(state){
            return state.components
        },

        selectedComponent(state) {
            return state.selectedComponent
        },

        selectedBlock(state) {
            return state.selectedBlock
        },

        announcementBar(state) {
            return state.components.announcement_bar
        },
    },

    mutations:{
        SET_COMPONENTS(state, value) {
            state.components = value
        },

        SET_SELECTED_COMPONENT(state, value) {
            state.selectedComponent = value
        },

        SET_SELECTED_BLOCK(state, value) {
            state.selectedBlock = value
        },

        SET_ANNOUNCEMENT_BAR(state, value) {
            state.components.announcement_bar = value
        },
    },

    actions:{
        async get({commit}, {theme}) {
            try {
                const { data } = await axios.get(`/stores/theme/${theme}/components`);
                commit('SET_COMPONENTS', data.components);
            } catch (error) {
                commit('SET_COMPONENTS', {});
            }
        },

        selectComponent({state, commit}, {id, type}) {
            // log the state
            if (id == null) {
                commit('SET_SELECTED_COMPONENT', {});
            }

            if (type == 'announcement-bar') {
                // select announcement bar from state
                if (Array.isArray(state.components.announcement_bar)) {
                    let announcementBar = state.components.announcement_bar.find(bar => bar.id == id);
                    commit('SET_SELECTED_COMPONENT', announcementBar);
                    return true;
                } else if (typeof state.components.announcement_bar == 'object') {
                    let announcementBar = state.components.announcement_bar;
                    if (announcementBar.id == id) {
                        commit('SET_SELECTED_COMPONENT', announcementBar);
                        return true;
                    }
                } else {
                    commit('SET_SELECTED_COMPONENT', state.components.announcement_bar);
                    return true;
                }

                commit('SET_SELECTED_COMPONENT', {});
                return false;
            }
        },

        selectBlock({state, commit}, {id, type}) {
            if (id == null) {
                commit('SET_SELECTED_BLOCK', {});
            }

            if (type == 'announcement-block') {
                // select announcement block from announcement bar
                let announcementBlock = state.selectedComponent.blocks.find(announcementBlock => announcementBlock.id == id);
                commit('SET_SELECTED_BLOCK', announcementBlock);
                return true;
            }
        },

        update({state, commit}, {component, data}) {
            if (component == 'announcement-bar') {
                // replace the announcement bar with the new data
                try {
                    commit('SET_ANNOUNCEMENT_BAR', data);
                } catch (error) {
                    commit('SET_ANNOUNCEMENT_BAR', {});
                }   
            }
        },
    }
}