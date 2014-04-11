<?php

foreach ($articles as $article) {
	debug($article->toArray());
	continue;

	debug($article->name);
	if ($article->publishDate) {
		debug($article->publishDate->format('Y-m-d H:i'));
	} else {
		debug($article->publishDate);
	}
}

$x = memory_get_usage();
debug('memory: ' . $this->Number->toReadableSize($x));