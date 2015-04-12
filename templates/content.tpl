
{foreach $articles as $article}
	<section id="services">
		<div class="illu"><i class="{$article.icon}"></i></div>
		<article>
			<h2>{$article.header}</h2>
			<h3>{$article.subHeader}</h3>
			<p>{$article.text}</p>
		</article>
	</section>
{/foreach}



