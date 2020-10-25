export const state = () => ({
  skillData: {}
})

export const mutations = {
  SET_SKILL_DATA(state, payload) {
    state.skillData = payload
  }
}

export const getters = {
  skillData (state) {
    return state.skillData
  }
}

export const actions = {
  skillData({commit}, params) {
    return this.$axios.get('/api/skill')
    .then((res) => {
      commit('SET_SKILL_DATA', res.data.data)
    })
  }
}