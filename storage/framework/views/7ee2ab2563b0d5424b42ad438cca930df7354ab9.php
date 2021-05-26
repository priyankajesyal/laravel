<form action="/delete/<?php echo $data->id; ?>" method="post">
    <div class="modal-body">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <h5 class="text-center">Are you sure you want to delete <?php echo e($data->name); ?> ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
    </div>
</form><?php /**PATH C:\laravel\resources\views/delete.blade.php ENDPATH**/ ?>