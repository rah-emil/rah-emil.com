<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  name: 'IndexView',

  setup() {
    const componentName = ref<string>('IndexView');

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
