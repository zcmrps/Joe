<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$JLoading = new Typecho_Widget_Helper_Form_Element_Select(
	'JLoading',
	array('on' => '开启（默认）', 'off' => '关闭'),
	'on',
	'是否开启主题加载动画',
	'介绍：开启后可防止使用谷歌内核的浏览器出现闪动问题'
);
$JLoading->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JLoading->multiMode());

$JIndex_Link_Active = new Typecho_Widget_Helper_Form_Element_Select(
	'JIndex_Link_Active',
	array('on' => '开启（默认）', 'off' => '关闭'),
	'on',
	'是否开启文章列表选中动画',
	'介绍：开启后首页和搜索页面展示的文章列表中文章被鼠标移入或者选中则会出现浮起动画'
);
$JIndex_Link_Active->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JIndex_Link_Active->multiMode());

$JPendant_SSL = new Typecho_Widget_Helper_Form_Element_Select(
	'JPendant_SSL',
	array('on' => '开启（默认）', 'off' => '关闭'),
	'on',
	'是否开启SSL安全认证图标',
	'介绍：开启后站点右下角将会显示SSL安全认证图标'
);
$JPendant_SSL->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JPendant_SSL->multiMode());

$JGrey_Model = new Typecho_Widget_Helper_Form_Element_Select(
	'JGrey_Model',
	array('off' => '关闭（默认）', 'on' => '开启'),
	'off',
	'是否开启哀悼模式',
	'介绍：开启后全站都显示灰色，为逝者默哀！'
);
$JGrey_Model->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JGrey_Model->multiMode());

$JHeader_Counter = new Typecho_Widget_Helper_Form_Element_Select(
	'JHeader_Counter',
	array('on' => '开启（默认）', 'off' => '关闭'),
	'on',
	'是否开启顶部浏览进度条',
	'介绍：开启后页面顶部位置将会展示屏幕浏览进度条'
);
$JHeader_Counter->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JHeader_Counter->multiMode());

$JFooter_Fish = new Typecho_Widget_Helper_Form_Element_Select(
	'JFooter_Fish',
	array('on' => '开启（默认）', 'off' => '关闭'),
	'on',
	'是否开启底部鱼群跳跃',
	'介绍：开启后页面底部位置将会展示灵动的鱼群跳跃，增添网站灵动气氛'
);
$JFooter_Fish->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JFooter_Fish->multiMode());

$JList_Animate = new Typecho_Widget_Helper_Form_Element_Select(
	'JList_Animate',
	array(
		'off' => '关闭（默认）',
		'bounce' => 'bounce',
		'flash' => 'flash',
		'pulse' => 'pulse',
		'rubberBand' => 'rubberBand',
		'headShake' => 'headShake',
		'swing' => 'swing',
		'tada' => 'tada',
		'wobble' => 'wobble',
		'jello' => 'jello',
		'heartBeat' => 'heartBeat',
		'bounceIn' => 'bounceIn',
		'bounceInDown' => 'bounceInDown',
		'bounceInLeft' => 'bounceInLeft',
		'bounceInRight' => 'bounceInRight',
		'bounceInUp' => 'bounceInUp',
		'bounceOut' => 'bounceOut',
		'bounceOutDown' => 'bounceOutDown',
		'bounceOutLeft' => 'bounceOutLeft',
		'bounceOutRight' => 'bounceOutRight',
		'bounceOutUp' => 'bounceOutUp',
		'fadeIn' => 'fadeIn',
		'fadeInDown' => 'fadeInDown',
		'fadeInDownBig' => 'fadeInDownBig',
		'fadeInLeft' => 'fadeInLeft',
		'fadeInLeftBig' => 'fadeInLeftBig',
		'fadeInRight' => 'fadeInRight',
		'fadeInRightBig' => 'fadeInRightBig',
		'fadeInUp' => 'fadeInUp',
		'fadeInUpBig' => 'fadeInUpBig',
		'fadeOut' => 'fadeOut',
		'fadeOutDown' => 'fadeOutDown',
		'fadeOutDownBig' => 'fadeOutDownBig',
		'fadeOutLeft' => 'fadeOutLeft',
		'fadeOutLeftBig' => 'fadeOutLeftBig',
		'fadeOutRight' => 'fadeOutRight',
		'fadeOutRightBig' => 'fadeOutRightBig',
		'fadeOutUp' => 'fadeOutUp',
		'fadeOutUpBig' => 'fadeOutUpBig',
		'flip' => 'flip',
		'flipInX' => 'flipInX',
		'flipInY' => 'flipInY',
		'flipOutX' => 'flipOutX',
		'flipOutY' => 'flipOutY',
		'rotateIn' => 'rotateIn',
		'rotateInDownLeft' => 'rotateInDownLeft',
		'rotateInDownRight' => 'rotateInDownRight',
		'rotateInUpLeft' => 'rotateInUpLeft',
		'rotateInUpRight' => 'rotateInUpRight',
		'rotateOut' => 'rotateOut',
		'rotateOutDownLeft' => 'rotateOutDownLeft',
		'rotateOutDownRight' => 'rotateOutDownRight',
		'rotateOutUpLeft' => 'rotateOutUpLeft',
		'rotateOutUpRight' => 'rotateOutUpRight',
		'hinge' => 'hinge',
		'jackInTheBox' => 'jackInTheBox',
		'rollIn' => 'rollIn',
		'rollOut' => 'rollOut',
		'zoomIn' => 'zoomIn',
		'zoomInDown' => 'zoomInDown',
		'zoomInLeft' => 'zoomInLeft',
		'zoomInRight' => 'zoomInRight',
		'zoomInUp' => 'zoomInUp',
		'zoomOut' => 'zoomOut',
		'zoomOutDown' => 'zoomOutDown',
		'zoomOutLeft' => 'zoomOutLeft',
		'zoomOutRight' => 'zoomOutRight',
		'zoomOutUp' => 'zoomOutUp',
		'slideInDown' => 'slideInDown',
		'slideInLeft' => 'slideInLeft',
		'slideInRight' => 'slideInRight',
		'slideInUp' => 'slideInUp',
		'slideOutDown' => 'slideOutDown',
		'slideOutLeft' => 'slideOutLeft',
		'slideOutRight' => 'slideOutRight',
		'slideOutUp' => 'slideOutUp',
	),
	'off',
	'选择一款炫酷的列表动画',
	'介绍：开启后，列表将会显示所选择的炫酷动画'
);
$JList_Animate->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JList_Animate->multiMode());

$JLive2d = new Typecho_Widget_Helper_Form_Element_Select(
	'JLive2d',
	array(
		'off' => '关闭（默认）',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-shizuku@1.0.5/assets/shizuku.model.json' => '志津久(shizuku)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-izumi@1.0.5/assets/izumi.model.json' => '泉(izumi)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-haru@1.0.5/01/assets/haru01.model.json' => '李夏露01(haru01)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-haru@1.0.5/02/assets/haru02.model.json' => '李夏露02(haru02)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-wanko@1.0.5/assets/wanko.model.json' => '王淑玲(wanko)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-hijiki@1.0.5/assets/hijiki.model.json' => '羊栖菜(hijiki)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-koharu@1.0.5/assets/koharu.model.json' => '小春(koharu)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-z16@1.0.5/assets/z16.model.json' => 'z16',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-haruto@1.0.5/assets/haruto.model.json' => '哈鲁托(haruto)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-tororo@1.0.5/assets/tororo.model.json' => '托罗罗(tororo)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-chitose@1.0.5/assets/chitose.model.json' => '千岁(chitose)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-miku@1.0.5/assets/miku.model.json' => '米库(miku)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-epsilon2_1@1.0.5/assets/Epsilon2.1.model.json' => '艾司隆2.1(Epsilon2.1)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-unitychan@1.0.5/assets/unitychan.model.json' => '陈统一(unitychan)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-nico@1.0.5/assets/nico.model.json' => '尼科(nico)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-rem@1.0.1/assets/rem.model.json' => '雷姆(rem)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-nito@1.0.5/assets/nito.model.json' => 'nito',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-nipsilon@1.0.5/assets/nipsilon.model.json' => '尼普西隆(nipsilon)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-ni-j@1.0.5/assets/ni-j.model.json' => '杰倪(ni-j)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-nietzsche@1.0.5/assets/nietzche.model.json' => '采尼(nietzche)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-platelet@1.1.0/assets/platelet.model.json' => '血小板(platelet)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-isuzu@1.0.4/assets/model.json' => '铃十五(isuzu)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-jth@1.0.0/assets/model/katou_01/katou_01.model.json' => '卡图01(katou_01)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-mikoto@1.0.0/assets/mikoto.model.json' => '米科托(mikoto)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-mashiro-seifuku@1.0.1/assets/seifuku.model.json' => '艾福斯(seifuku)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-ichigo@1.0.1/assets/ichigo.model.json' => '圆脸女孩(ichigo)',
		'https://fastly.jsdelivr.net/npm/live2d-widget-model-hk_fos@1.0.0/assets/hk416.model.json' => '女枪手(hk416)'
	),
	'off',
	'选择一款喜爱的Live2D动态人物模型（仅在屏幕分辨率大于1400px下显示）',
	'介绍：开启后会在右下角显示一个小人'
);
$JLive2d->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JLive2d->multiMode());

$JCursorEffects = new Typecho_Widget_Helper_Form_Element_Select(
	'JCursorEffects',
	array(
		'off' => '关闭（默认）',
		'cursor1.js' => '效果1',
		'cursor2.js' => '效果2',
		'cursor3.js' => '效果3',
		'cursor4.js' => '效果4',
		'cursor5.js' => '效果5',
		'cursor6.js' => '效果6',
		'cursor7.js' => '效果7',
		'cursor8.js' => '效果8',
		'cursor9.js' => '效果9',
		'cursor10.js' => '效果10',
		'cursor11.js' => '效果11',
	),
	'off',
	'选择鼠标特效',
	'介绍：用于开启炫酷的鼠标特效'
);
$JCursorEffects->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JCursorEffects->multiMode());

$JDocumentTitle = new Typecho_Widget_Helper_Form_Element_Text(
	'JDocumentTitle',
	NULL,
	'网站崩溃了...',
	'网页被隐藏时显示的标题',
	'介绍：在PC端切换网页标签时，网站标题显示的内容。如果不填写，则默认不开启 <br />
		 注意：严禁加单引号或双引号！！！否则会导致网站出错！！'
);
$JDocumentTitle->setAttribute('class', 'joe_content joe_decoration');
$form->addInput($JDocumentTitle);