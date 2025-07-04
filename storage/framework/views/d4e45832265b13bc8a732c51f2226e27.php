<?php $__env->startSection('title', 'Hợp đồng'); ?>

<?php $__env->startSection('content'); ?>
        <!-- Begin: Content -->
        <div id="content" class="order-section">
            <h2 class="order-heading">Xác nhận thông tin đặt sân</h2>

            <div class="order-successfully">
                <div class="order-successfully-infor">
                    <h3 class="order-successfully-header">Hợp đồng đặt sân</h3>

                    <h3>Điều 1: Nội dung hợp đồng</h3><br>
                    <p>Bên A cam kết và thực hiện đặt lịch sân thể thao theo các thông tin sau đây:</p>

                    <ul>
                        <li>Họ và tên: <?php echo e(session('name')); ?></li>
                        <li>Số điện thoại: <?php echo e(session('phone')); ?></li>
                        <li>Sân thể thao: <?php echo e(session('tensan')); ?> - Sân số <?php echo e(session('sosan')); ?></li>                        <li>Thời gian:</li>
                        <?php $__currentLoopData = session('time'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($time); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>Ngày đặt: <?php echo e(date('d/m/Y', strtotime(session('date')))); ?></li>
                        <li>Giá tiền: <?php echo e(number_format(session('price'))); ?> VND</li>
                        <li>Ghi chú: <?php echo e(session('notes')); ?></li>
                    </ul><br>
                    
                    <h3>Điều 2: Thanh toán</h3><br>
                    <p>Bên A cam kết thanh toán phí dịch vụ đặt lịch theo thỏa thuận giữa hai bên.</p><br>

                    <h3>Điều 3: Điều khoản chung</h3><br>
                    <p>Cả hai bên cam kết thực hiện đúng và đầy đủ các điều khoản trong hợp đồng này.</p>
                    <p>Hợp đồng có giá trị từ ngày ký và có thể được điều chỉnh hoặc chấm dứt khi hai bên đồng ý.</p><br>

                    <h3>Điều 4: Kí và xác nhận</h3><br>
                    <p class="order-successfully-day">Hà Nội, ngày <?php echo e(date('d/m/Y')); ?></p><br>

                    <div class="signature">
                        <div class="signature-left">
                            <p>Bên A<br><br> <?php echo e(session('name')); ?></p>
                        </div>
                        <div class="signature-right">
                            <p>Bên B<br><br> Group 7</p>
                        </div>
                    </div>
                </div>
            </div>       

            <div class="footer-link">
                <a href="<?php echo e(route('thanh-toan')); ?>" class="order-football-btn">Tiếp tục</a>
            </div>

        </div>          
        <div class="clear"></div>
        <!-- End: Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\laragon\www\qldatsan\resources\views/client/success.blade.php ENDPATH**/ ?>