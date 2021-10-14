<?php include_once('header.php'); ?>
<?php include_once('left.php'); ?>
  
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
      <div class="layui-container" style = "margin-top:2em;">
        <div class="layui-row layui-col-space18">
          <div class="layui-col-lg4">
            <div class = "admin-msg">当前版本：<?php echo file_get_contents('version.txt'); ?></div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  

