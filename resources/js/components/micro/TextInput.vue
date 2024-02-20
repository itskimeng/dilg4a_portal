<!-- TextInput.vue -->
<template>
  <div class="form-group">
    <label>{{ label }}</label>
    <input v-bind="$attrs" v-model="internalValue" class="form-control" :placeholder="placeholder" :type="type"
      :readonly="readonly" />
  </div>
</template>

<script>
export default {
  name: 'TextInput',
  props: {
    label: {
      type: String,
      default: ''
    },
    value: {
      type: [String, Number],
      default: ''
    },
    placeholder: {
      type: String,
      default: ''
    },
    type: {
      type: String,
      default: 'text'
    },
    readonly: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      internalValue: this.value
    }
  },
  emits: ['update:modelValue'],
  watch: {
    internalValue(newValue) {
      this.$emit('update:modelValue', newValue); // Emit input event when value changes
    },
    value(newValue) {
      this.internalValue = newValue; // Update internalValue if external value changes
    }
  }

};
</script>
