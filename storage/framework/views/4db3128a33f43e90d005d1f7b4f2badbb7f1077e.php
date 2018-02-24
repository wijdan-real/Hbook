<form id="sign_in_adm" method="POST" action="<?php echo e(route('auth.login')); ?>">
    <?php echo e(csrf_field()); ?>


    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
        <div class="form-line">
            <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required autofocus>
        </div>
        <?php if($errors->has('email')): ?>
            <span class="text-danger"><strong><?php echo e($errors->first('email')); ?></strong></span>
        <?php endif; ?>
    </div>

    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
    </div>
    <div>
        <div class="">
            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> id="rememberme" class="filled-in chk-col-pink">
            <label for="rememberme">Remember Me</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-raised waves-effect g-bg-cyan">SIGN IN</button>

        </div>
    </div>
</form>
</div>