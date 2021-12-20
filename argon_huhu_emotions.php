<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Argon HuHu Emotions
 * Plugin URI:  https://www.ghostchu.com/wp%E6%8F%92%E4%BB%B6argon-%E5%91%BC%E5%91%BC%E8%A1%A8%E6%83%85%E5%8C%85/
 * Text Domain: argon-huhu-emotions
 * Description: 向 Argon 主题注册来自 半次元 的 “呼呼” 评论表情包
 * Version:     1.0
 * Author:      Ghost_chu
 * Author URI:  https://www.ghostchu.com
 * License:     GPLv3+
 */

    function add_more_emotions($emotionList){
		$assets_dir = plugins_url( 'assets/', __FILE__ );
        array_push(
            $emotionList,
            array(
                'groupname' => '呼呼', 
                'list' => array(
					array('type' => 'sticker', 'code' => 'huhu-baodachu', 'src' => $assets_dir . 'baodachu.png'),
					array('type' => 'sticker', 'code' => 'huhu-cahan', 'src' => $assets_dir . 'cahan.png'),
					array('type' => 'sticker', 'code' => 'huhu-chibao', 'src' => $assets_dir . 'chibao.png'),
					array('type' => 'sticker', 'code' => 'huhu-chiyu', 'src' => $assets_dir . 'chiyu.png'),
					array('type' => 'sticker', 'code' => 'huhu-chuibao', 'src' =>$assets_dir .  'chuibao.png'),
					array('type' => 'sticker', 'code' => 'huhu-dacall', 'src' => $assets_dir . 'dacall.png'),
					array('type' => 'sticker', 'code' => 'huhu-daxiao', 'src' => $assets_dir . 'daxiao.png'),
					array('type' => 'sticker', 'code' => 'huhu-dianzan', 'src' =>$assets_dir .  'dianzan.png'),
					array('type' => 'sticker', 'code' => 'huhu-guaiqiao', 'src' => $assets_dir . 'guaiqiao.png'),
					array('type' => 'sticker', 'code' => 'huhu-heilian', 'src' => $assets_dir . 'heilian.png'),
					array('type' => 'sticker', 'code' => 'huhu-huachi', 'src' => $assets_dir . 'huachi.png'),
					array('type' => 'sticker', 'code' => 'huhu-jiaxiao', 'src' => $assets_dir . 'jiaxiao.png'),
					array('type' => 'sticker', 'code' => 'huhu-jiujie', 'src' => $assets_dir . 'jiujie.png'),
					array('type' => 'sticker', 'code' => 'huhu-kaixin', 'src' => $assets_dir . 'kaixin.png'),
					array('type' => 'sticker', 'code' => 'huhu-kuku', 'src' => $assets_dir . 'kuku.png'),
					array('type' => 'sticker', 'code' => 'huhu-liule', 'src' => $assets_dir . 'liule.png'),
					array('type' => 'sticker', 'code' => 'huhu-lueluelue', 'src' => $assets_dir . 'lueluelue.png'),
					array('type' => 'sticker', 'code' => 'huhu-meiyankanle', 'src' => $assets_dir . 'meiyankanle.png'),
					array('type' => 'sticker', 'code' => 'huhu-meme', 'src' => $assets_dir . 'meme.png'),
					array('type' => 'sticker', 'code' => 'huhu-mengle', 'src' => $assets_dir . 'mengle.png'),
					array('type' => 'sticker', 'code' => 'huhu-momotou', 'src' => $assets_dir . 'momotou.png'),
					array('type' => 'sticker', 'code' => 'huhu-moyu', 'src' => $assets_dir . 'moyu.png'),
					array('type' => 'sticker', 'code' => 'huhu-shangtian', 'src' => $assets_dir . 'shangtian.png'),
					array('type' => 'sticker', 'code' => 'huhu-xianyutan', 'src' => $assets_dir . 'xianyutan.png'),
					array('type' => 'sticker', 'code' => 'huhu-xihuan', 'src' => $assets_dir . 'xihuan.png'),
					array('type' => 'sticker', 'code' => 'huhu-yaoyan', 'src' => $assets_dir . 'yaoyan.png'),
					array('type' => 'sticker', 'code' => 'huhu-yunyun', 'src' => $assets_dir . 'yunyun.png'),
					array('type' => 'sticker', 'code' => 'huhu-zhengjing', 'src' =>$assets_dir .  'chibao.png'),
					array('type' => 'sticker', 'code' => 'huhu-zhuakuang', 'src' => $assets_dir . 'zhuakuang.png')
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions');
?>
