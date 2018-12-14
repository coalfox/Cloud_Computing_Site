<?php
	
	$myBrand = "Cloud Computing Services";
	$myTitle = "Semantic Markup";
	$bannerPrimary = "George Fox";
	$bannerSecondary = "INFO 300";
	
	include("./_includes/header.php"); //inserts page header
	
?>
<main>
<article>
<div>
<h3>Html Semantics</h3>
<p>HTML is a markup language, meaning that it uses tags, and that it often uses recognizeable words in place of programming syntax. This is important because it is meant to be interpreted by humans, both in structure and in the resulting rendered output.</p>
<p>Semantics incolves the enclosing of and layering of content within these tags, to ensure that the resulting output is consistent. When writing html, it is important to layer your content within the appropriate tags just enough that it will be clean and readable on any device, but not too much that redundant tags are used that serve no purpose and will only cause a page to load slower.</p>
<p>Section 508 dictates certain accessiblity standards so that anyone, from anywhere, should be able to access a webpage's content, specifically for people with disabilities.</p>
<p>Search engine optimization (SEO) involves the formatiing of html to also be easily readable by machines, specifically in cases where a search engine parses a web site to index it such that it may easily appear in relevant search results.</p>
<p>Both of these go hand-in-hand with semantics, as creating and adhering to standards and correctly utilizing tags makes the internet easier to use for everyone.</p>
</div>
</article>
</main>
<?php include("./_includes/footer.php"); //inserts page footer ?>