export const state = () => ({
  profileData: []
})

export const mutations = {
  SET_PROFILE_DATA(state, payload) {
    state.profileData = payload
  }
}

export const getters = {
  profileData(state) {
    return state.profileData
  }
}

export const actions = {
  profileData({
    commit
  }) {
    return this.$axios.get('/api/profile')
      .then((res) => {
        commit('SET_PROFILE_DATA', res.data.data)
        return res.data.data
      })
  },
  async updateProfile({
    commit
  }, params) {

    const response = await this.$axios.post(params.apiUrl, params.data).catch((err) => {
      return err.response
    })

    return response
  }
}
