<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">News and Event Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Tile : <?php echo e($students->name); ?></h5>
        <p class="card-text">Description : <?php echo e($students->address); ?></p>
        <p class="card-text">Date : <?php echo e($students->mobile); ?></p>
  </div>

    </hr>

  </div>
</div>

<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ xampp1\htdocs\blog\resources\views/students/show.blade.php ENDPATH**/ ?>