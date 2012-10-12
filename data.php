<?php
	$gallery = [
		'title'			=> 'Gallery Title',
		'currentPage' 	=> 0,
		'members'		=> 
		[
			[
				'pageNum'	=> 0,
				'href'		=> 'name.html',
				'title' 	=> 'member 0 title',
				'body'		=> 'Hundreds of these airships escaped to Hawaii, and not only did they  bring the plague with them, but they found the plague already there  before them.',
				'src'		=> 'img/trans-1x1.png',
				'width'		=> 150,
				'height'	=> 150
			],
			[
				'pageNum'	=> 1,
				'href'		=> 'name1.html',
				'title' 	=> 'member 1 title',
				'body'		=> 'member 1 body',
				'src'		=> 'img/trans-1x1.png',
				'width'		=> 150,
				'height'	=> 150
			],
			[
				'pageNum'	=> 2,
				'href'		=> 'name2.html',
				'title' 	=> 'member 2 title',
				'body'		=> 'member 2 body',
				'src'		=> 'img/trans-1x1.png',
				'width'		=> 150,
				'height'	=> 150
			]
		]
	];
	
	$series = [
		'members'	=> 
		[
			[
				'href'	=> 'series1.html',
				'title'	=> 'Series member 1',
				'type'	=> 'Series Type'
			],
			[
				'href'	=> 'series2.html',
				'title'	=> 'Series member 2',
				'type'	=> 'Series Type'
			],
			[
				'href'	=> 'series3.html',
				'title'	=> 'Series member 3',
				'type'	=> 'Series Type'
			],
			[
				'href'	=> 'series4.html',
				'title'	=> 'Series member 4',
				'type'	=> 'Series Type'
			]
		]
	];
	
	include('data/article.php');
	include('data/major_minor.php');
	include('data/around_web.php');
	include('data/carousel.php');
	include('data/take_five.php');
	include('data/more_explore.php');
	include('data/more_like.php');
	include('data/feature_four.php');
	include('data/hero_multi.php');
	include('data/featured_article.php');
	include('data/featured_article_hero.php');
	include('data/gallery_list.php');
	include('data/home_topic.php');
	include('data/orig_videos.php');
	
	
	$data = [
		'gallery' 				=> $gallery,
		'series'				=> $series,
		'article'				=> $article,
		'major_minor'			=> $major_minor,
		'around_web'			=> $around_web,
		'carousel'				=> $carousel,
		'take_five'				=> $take_five,
		'more_explore'			=> $more_explore,
		'more_like'				=> $more_like,
		'feature_four'			=> $feature_four,
		'hero_multi'			=> $hero_multi,
		'featured_article'		=> $featured_article,
		'featured_article_hero'	=> $featured_article_hero,
		'gallery_list'			=> $gallery_list,
		'home_topic'			=> $home_topic,
		'orig_videos'			=> $orig_videos
	];
?>