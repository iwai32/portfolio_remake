export const state = () => ({
  productData : []
})

export const mutations = ({
  SET_PRODUCT_DATA(state, payLoad) {
    state.productData = payLoad
  }
})

export const getters = {
  productData(state) {
    return state.productData
  }
}

export const actions = {
  productData({ commit }) {
    return this.$axios.get('/api/product')
    .then((res) => {
      commit('SET_PRODUCT_DATA', res.data.data)
    })
  }
}