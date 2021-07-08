<template>
  <div
      class="alert"
      :class="['alert-' + tipo]"
  > <h3
        class="alert-heading"
        v-if="titulo != null">
      {{titulo}}
    </h3>
      {{mensaje}}
  </div>
</template>

<script>
export default {
  name: "BaseNotificacion",
  components: {},
  props: {
    //define la propiedad, y el tipo de dato
    mensaje: {
      type: String,
      required: true,
    },
    titulo: String,
    tipo: {
      type: String,
      default: 'primary'
    },
  },
  data: function () {
    return {}
  },
  computed: {},
  methods: {}
}
</script>

<style scoped>

</style>
