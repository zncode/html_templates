<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: portal_index.php 31313 2012-08-10 03:51:03Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

list($navtitle, $metadescription, $metakeywords) = get_seosetting('portal');
if(!$navtitle) {
	$navtitle = $_G['setting']['navs'][1]['navname'];
	$nobbname = false;
} else {
	$nobbname = true;
}
if(!$metakeywords) {
	$metakeywords = $_G['setting']['navs'][1]['navname'];
}
if(!$metadescription) {
	$metadescription = $_G['setting']['navs'][1]['navname'];
}

if(isset($_G['makehtml'])){
	helper_makehtml::portal_index();
}

$a = 'aaa';
$b = 'bbb';
if (empty($_G['uid'])) {
	$is_login = false;
}
else
{
	$is_login = true;
}
$formhash = formhash();

$source_path = 'http://localhost/discuz32/template/default/portal';
$domain87870 = 'http://localhost/discuz32';

//第一横行

$video_li = ' <div class="video_li">
          <div class="videoliimg"><img src="'.$source_path.'/images/v3.jpg"></div>
          <div class="videoliname">VR国内首部电影独家首发</div>
          <div class="videolibot">
            <div class="video_bA"><i class="video_look"></i><span>12</span></div>
            <div class="video_bA"><i class="video_pl"></i><span>15</span></div>
            <div class="video_BRman"> <span>功夫熊猫</span><i><img src="'.$source_path.'/images/v1.jpg"></i> </div>
          </div>
        </div>';

$video_li_1 = ' <div class="video_li marL0">
          <div class="videoliimg"><img src="'.$source_path.'/images/v3.jpg"></div>
          <div class="videoliname">VR国内首部电影独家首发</div>
          <div class="videolibot">
            <div class="video_bA"><i class="video_look"></i><span>12</span></div>
            <div class="video_bA"><i class="video_pl"></i><span>15</span></div>
            <div class="video_BRman"> <span>功夫熊猫</span><i><img src="'.$source_path.'/images/v1.jpg"></i> </div>
          </div>
        </div>';
for($i = 0; $i<11; $i++){
	if($i == 7)
	{
		$output_1 .= $video_li_1;
	}else{
		$output_1 .= $video_li;
	}
}

for($i = 0; $i<6; $i++){
	$output_2 .= $video_li;
}

for($i = 0; $i<5; $i++){
	if($i == 0)
	{
		$output_3 .= $video_li_1;
	}else{
		$output_3 .= $video_li;
	}
	
}
include_once template('diy:portal/index');

