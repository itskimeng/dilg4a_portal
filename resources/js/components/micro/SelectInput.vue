<!-- SelectInput.vue -->
<template>
    <div class="form-group">
      <label>{{ label }}</label>
      <select v-model="selectedItems" v-bind="$attrs"  class="form-control" :style="{ width: '100%' }">
        <option :value="null" disabled>{{ placeholder }}</option>
        <slot></slot>
      </select>
    </div>
  </template>
  
  <script>
  export default {
    name: 'SelectInput',
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
        default: '-- Select --'
      }
    },
    data(){
      return {
        selectedItems:this.value
      }
    }
  };
  </script>
  