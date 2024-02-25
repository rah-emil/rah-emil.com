<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  name: 'ExampleView',

  setup() {
    const componentName = ref<string>('ExampleView');

    return {
      componentName,
    };
  },
});
</script>

<template>
  <div>
    {{ componentName }}
  </div>
</template>
