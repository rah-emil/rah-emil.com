<script lang="ts">
import { defineComponent } from 'vue';
import { RouterView } from 'vue-router';
import TopHeader from '@/components/TopHeader/TopHeader.vue';

export default defineComponent({
  name: 'DefaultLayout',
  components: { TopHeader, RouterView },
});
</script>

<template>
  <div class="default-layout">
    <h1>default-layout</h1>

    <TopHeader />

    <main class="default-layout__main">
      <RouterView />
    </main>
  </div>
</template>

<style lang="scss" scoped>
.default-layout {
  position: relative;
}
</style>
