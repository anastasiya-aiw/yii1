<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Здесь через <span id="counter">10</span>&thinsp;сек. появится попап-окно.</p>

<script type="text/javascript">
var popupId = 1;
var s = document.createElement('script');
s.type = 'text/javascript';
s.src = 'http://yii/testdrive/js/modal.js';
document.body.append(s);
</script>

<script type="text/javascript">
/*
var t = setInterval(updateCounter, 1000);

function updateCounter(){
  var counter = document.getElementById('counter');
  var counterValue = parseInt(counter.innerHTML) - 1;

  if( counterValue == 0) clearInterval(t);
  counter.innerHTML = counterValue;
}
*/
</script>
