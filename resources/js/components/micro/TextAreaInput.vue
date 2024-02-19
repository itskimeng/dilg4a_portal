<template>
  <div class="form-group">
    <label>{{ label }}</label>
    <textarea v-model="internalValue" v-bind="$attrs" :placeholder="placeholder"></textarea>
  </div>
</template>

<script>
export default {
  name: 'TextAreaInput',
  props: {
    label: {
      type: String,
      default: ''
    },
    value: {
      type: String,
      default: ''
    },
    placeholder: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      internalValue: this.value // Initialize internalValue with the value prop
    };
  },
  watch: {
    internalValue(newValue) {
      // Emit an input event when internalValue changes
      this.$emit('input', newValue);
    },
    value(newValue) {
      // Update internalValue when the value prop changes from outside
      this.internalValue = newValue;
    }
  }
};
</script>
