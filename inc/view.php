<?php

function add_wc_service_tax($content){

  $post = get_post();


  ob_start();

  //Работаем с Назначением
  $purpose = wp_get_object_terms( $post->ID, 'purpose' );
  if(! empty($purpose)):
    ?>
    <div class="purpose-wrapper-wc">
      <h1>Назначение</h1>
      <ul>
        <?php foreach ($purpose as $value): ?>
            <li>
              <div class="purpose-item-wrapper-wc">
                <?php echo $value->name ?>
              </div>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php
  endif;

  //Компоненты
  $components = wp_get_object_terms( $post->ID, 'components' );
  if(! empty($components)):
    ?>
    <div class="components-wrapper-wc">
      <h1>Компоненты</h1>
      <ul>
        <?php foreach ($components as $value): ?>
            <li>
              <div class="components-item-wrapper-wc">
                <?php echo $value->name ?>
              </div>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php
  endif;


  //Работы
  $job = wp_get_object_terms( $post->ID, 'job' );
  if(! empty($job)):
    ?>
    <div class="job-wrapper-wc">
      <h1>Работы</h1>
      <ul>
        <?php foreach ($job as $value): ?>
            <li>
              <div class="job-item-wrapper-wc">
                <?php echo $value->name ?>
              </div>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php
  endif;

  $html =  ob_get_contents();

  ob_get_clean();

  if(isset($html)) $content .= $html;

  return $content;

}
add_filter('the_content', 'add_wc_service_tax');
