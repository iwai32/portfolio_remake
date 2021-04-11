export const state = () => ({
  navCategoryData: [],
  navCategoryDataForAdmin: []
})

export const mutations = ({
  SET_NAV_CATEGORY_DATA(state, payLoad) {
    state.navCategoryData = payLoad
  },
  SET_NAV_CATEGORY_DATA_FOR_ADMIN(state, payLoad) {
    state.navCategoryDataForAdmin = payLoad
  },
})

export const getters = {
  navCategoryData(state) {
    return state.navCategoryData
  },
  navCategoryDataForAdmin(state) {
    return state.navCategoryDataForAdmin
  }
}

export const actions = {
  async navCategoryData({
    commit
  }) {
    this.$axios.get('/api/nav-category').then((res) => {
      commit('SET_NAV_CATEGORY_DATA', res.data.data)
    })
  },
  async navCategoryDataForAdmin({
    commit
  }) {
    this.$axios.get('/api/nav-category-for-admin').then((res) => {
      commit('SET_NAV_CATEGORY_DATA_FOR_ADMIN', res.data.data)
    })
  },

}
