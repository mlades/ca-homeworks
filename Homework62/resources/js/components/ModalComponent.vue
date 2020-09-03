<template>
  <div class="container">
    <h1>Modal with slot</h1>
    <!-- Button trigger modal -->
    <slot name="button"></slot>
  

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <slot name="header"></slot>
          <slot name="body"></slot>
          <slot name="footer"></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {};
</script>