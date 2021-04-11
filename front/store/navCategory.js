export const state = () => ({
  navCategoryData: []
})

export const mutations = ({
  SET_NAV_CATEGORY_DATA(state, payLoad) {
    state.navCategoryData = payLoad
  }
})

export const getters = {
  navCategoryData(state) {
    return state.navCategoryData
  }
}

export const actions = {
  async navCategoryData({
    commit
  }) {
    this.$axios.get('/api/nav-category').then((res) => {
      commit('SET_NAV_CATEGORY_DATA', res.data.data)
    })
  }
}
