<?php
	include('data-article.php');
	
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
	
	$data = [
		'gallery' 	=> $gallery,
		'series'	=> $series,
		'article'	=> $article
	];
?>