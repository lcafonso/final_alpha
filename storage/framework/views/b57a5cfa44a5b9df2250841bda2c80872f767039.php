


<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="display-comment" <?php if($comment->parent_id != null): ?> style="margin-left:40px;" <?php endif; ?>>
        <div class="col-md-12 offset-md-0" style="text-align: left;" >
            <img src="<?php echo e(asset( $comment->user->profile->file)); ?>" alt="<?php echo e($comment->user->profile->name); ?>" class="cir-responsive"/>
            <strong><?php echo e($comment->user->name); ?></strong>
            <hr>
            <div>
                <p><?php echo e($comment->body); ?></p>
                <a href="" id="reply"></a>


                <form method="post" action="<?php echo e(route('comments.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" name="body" class="form-control" >
                        <input type="hidden" name="post_id" value="<?php echo e($post_id); ?>" />
                        <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning" >
                                <i class="fas fa-reply"></i>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
            <?php echo $__env->make('admin.posts.commentsDisplay', ['comments' => $comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>


    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/posts/commentsDisplay.blade.php ENDPATH**/ ?>