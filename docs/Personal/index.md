---
layout: details
title: Personal
permalink: /Personal/
description: Test Section 'Personal' to compare different html2pdf tools.
---



## 🔬 BLOG-POST

### Input HTML & CSS

<details>
    <summary>
        View BLOG-POST Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!doctype <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>/&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span>
html,body
{
	height:100%;
	margin:0;
	padding:0
}

body
{
	font-size:1.2rem;
	font-family:monospace
}

a
{
	color:#195584
}

a:visited,a:hover,a:active
{
	color:#7b598f
}

.boxes
{
	display:grid;
	grid-template-columns:repeat(auto-fill,minmax(320px,1fr));
	grid-gap:2rem;
	margin:2rem
}

.boxes a
{
	padding:2rem;
	border:1vw solid;
	text-decoration:none;
	font-weight:700;
	font-size:1.4rem;
	background:#e0ffff
}

.boxes a span
{
	color:#000;
	margin-top:2rem;
	display:block;
	font-weight:400;
	font-size:1.2rem
}

h1
{
	letter-spacing:.2em;
	padding:2rem;
	padding-top:0;
	margin:0;
	overflow:hidden;
	font-weight:700
}

	@page
	{
		margin:2cm;
		background:#ffffe0
	}

	img{
		max-width: 100%;
	}

	@page:first
	{
		@top-right{
			content: "";
		}
		@top-left{
			content: "";
		}
		@bottom-right{
			content: "";
		}
		@bottom-left{
			content: "";
		}
		margin-top:6cm
	}

	@page:left
	{
		@top-left{
			content: "Create Color Images from HEX colors with PHP";
		}
		@bottom-right{
			content: counter(page);
		}
		margin-right:4cm
	}

	@page:right
	{
		@top-right{
			content: "Create Color Images from HEX colors with PHP";
		}
		@bottom-left{
			content: counter(page);
		}
		margin-left:4cm
	}

	body
	{
		font-size:24pt
	}

	html *,a,a:visited,a:hover,a:active
	{
		color:#000;
		font-family:Georgia,serif
	}

	code{
		word-break:break-word;
	}

	a:after
	{
		display:block;
		margin-top:1cm;
		content:attr(href);
		overflow-wrap:break-word;
		word-wrap:break-word;
		-ms-word-break:break-all;
		word-break:break-all;
		word-break:break-word;
		-ms-hyphens:auto;
		-moz-hyphens:auto;
		-webkit-hyphens:auto;
		hyphens:auto
	}

	h2
	{
		page-break-before:always
	}

	h2:nth-child(1):before
	{
		page-break-after:always;
		display:block;
		font-size:1.4rem;
		font-weight:400;
		content:"Source: https://convertingcolors.com/blog/article/create_color_images_from_hex_colors_with_php.html"
	}

	h1:after
	{
		display:block;
		margin-top:4cm;
		content:"Beautiful Color Palettes with PHP";
		line-height:12vw;
		font-size:6vw
	}

	.boxes
	{
		display:block
	}

	.boxes a
	{
		page-break-inside:avoid;
		display:block;
		width:calc(100vw - 4cm);
		margin-bottom:1cm;
		padding:1cm;
		border:1mm solid;
		border-color:#000;
		border-image:none
	}

	.boxes a span
	{
		font-size:1.4rem
	}

	
/*

Monokai Sublime style. Derived from Monokai by noformnocontent http://nn.mit-license.org/

*/

.hljs {
    display: block;
    overflow-x: auto;
    padding: 0.5em;
    background: #23241f;
  }
  
  .hljs,
  .hljs-tag,
  .hljs-subst {
    color: #f8f8f2;
  }
  
  .hljs-strong,
  .hljs-emphasis {
    color: #a8a8a2;
  }
  
  .hljs-bullet,
  .hljs-quote,
  .hljs-number,
  .hljs-regexp,
  .hljs-literal,
  .hljs-link {
    color: #ae81ff;
  }
  
  .hljs-code,
  .hljs-title,
  .hljs-section,
  .hljs-selector-class {
    color: #a6e22e;
  }
  
  .hljs-strong {
    font-weight: bold;
  }
  
  .hljs-emphasis {
    font-style: italic;
  }
  
  .hljs-keyword,
  .hljs-selector-tag,
  .hljs-name,
  .hljs-attr {
    color: #f92672;
  }
  
  .hljs-symbol,
  .hljs-attribute {
    color: #66d9ef;
  }
  
  .hljs-params,
  .hljs-class .hljs-title {
    color: #f8f8f2;
  }
  
  .hljs-string,
  .hljs-type,
  .hljs-built_in,
  .hljs-builtin-name,
  .hljs-selector-id,
  .hljs-selector-attr,
  .hljs-selector-pseudo,
  .hljs-addition,
  .hljs-variable,
  .hljs-template-variable {
    color: #e6db74;
  }
  
  .hljs-comment,
  .hljs-deletion,
  .hljs-meta {
    color: #75715e;
  }
    <span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">header</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"banner"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>Create Color Images from HEX colors with PHP<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">header</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">main</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"main"</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_6_colors.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Result six colors"</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Result six colors"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>As a source for our image, we take a PHP array which contains the HEX values of the background and text colors we want to use for our image.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-meta"</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>?php<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
				$aColors = [
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'E24667'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFC9D5'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'C046E2'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'806066'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'808080'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					]
				];<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Via <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/array_walk"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>array_walk<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>, we add the RGB versions of the colors to the array by adding two new keys, background_rgb and text_rgb. We also add the text message we want to see on the image with the key text_msg.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>array_walk($aColors, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-function"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>function<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-params"</span>&gt;</span>(<span class="hljs-symbol">&amp;amp;</span>$aColor, $key)<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>{<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Within the array_walk, we convert the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://convertingcolors.com/format-hex.html"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>HEX color<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> value to RGB. For details on the conversion, please see <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://convertingcolors.com/blog/article/convert_hex_to_rgb_with_php.html"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>the blog post Convert HEX to RGB with PHP
			<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>list<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>(
					$iBackgroundRed, 
					$iBackgroundGreen, 
					$iBackgroundBlue
				) = array_map(
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'hexdec'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
					str_split($aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>)
				);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Again we convert the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://convertingcolors.com/format-hex.html"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>HEX color<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>, but this time for the text color.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>list<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>(
					$iTextRed, 
					$iTextGreen, 
					$iTextBlue
				) = array_map(
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'hexdec'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
					str_split($aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>)
				);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Then we add these values to our $aColor array and finally set the text message to the background <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://convertingcolors.com/format-hex.html"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>HEX color<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    $aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = [
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>   =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundRed, 
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundGreen, 
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>  =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundBlue
				];
				$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = [
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>   =<span class="hljs-symbol">&amp;gt;</span> $iTextRed, 
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> $iTextGreen, 
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>  =<span class="hljs-symbol">&amp;gt;</span> $iTextBlue
				];
			
				$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'#'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> . $aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>];
			});<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>After the extension of the array with the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://convertingcolors.com/format-rgb.html"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>RGB color<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> values, we define a new image object with the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagecreate"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagecreate<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> function. The width of the image is 1600 and the height 1200 pixel.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$oImage         = imagecreate(<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>1600<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>1200<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>We store the width and height in separate variables because we need them later for some calculations. Also, in that way, if you want to change the image size, you only need to change it in one place (the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagecreate"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagecreate<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> call).<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$iImageWidth    = imagesx($oImage);
			$iImageHeight   = imagesy($oImage);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>For the text message we want to display, we need to have some font file for it. In this example, I use the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.fontsquirrel.com/fonts/amble"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>Amble font, which you can find here<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$sFontFile      = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'fonts/amble/Amble-Bold.ttf'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In the case we have multiple colors in our array, we want to show a color palette. If only one color is there, we show this color over the full image. For that, we need to divide the image width with the number of colors, so we get to know how wide each color section should be.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$iColorWidth    = $iImageWidth / count($aColors);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>In each of these sections, we display the colors HEX code as a text message, and the length of the text should not overflow the width of a single color. Therefore we adjust the font size by dividing the color width by 6.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$iFontSize      = $iColorWidth / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>To know in our loop at which color we are right now, we also define a counter.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>$iColorCount    = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Now we can finally loop through the colors and put the colors and messages on the picture. First, we need to allocate the color for the image. That is also why we needed to convert our HEX values to RGB.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>foreach<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($aColors <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>as<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> $aColor){
			
				$iBackgroundColor = imagecolorallocate(
					$oImage, 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
				);
				$iTextColor       = imagecolorallocate(
					$oImage, 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
				);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Now it is time to set the background color on the correct pixels, and for this, we use <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagesetpixel"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagesetpixel<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>. We loop through all pixels for this color's width, and the image height as all colors should show from top to bottom.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($iX = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>; $iX <span class="hljs-symbol">&amp;lt;</span> $iColorWidth; $iX++){
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($iY = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>; $iY <span class="hljs-symbol">&amp;lt;</span> $iImageHeight; $iY++){
						imagesetpixel(
							$oImage, 
							$iX + ($iColorCount * $iColorWidth), 
							$iY, 
							$iBackgroundColor
						);
					}
				}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>To figure out where to place our text, so it is in the center of the color section (color width and image height), we get the bounding box (<span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagettfbbox"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagettfbbox<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>) of our text message using the font file we defined above.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    $aBoundingBox = imagettfbbox($iFontSize, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, $sFontFile, $aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Now we take the lower right corner, X position ($aBoundingBox[2]) and the upper right corner, X position ($aBoundingBox[4]), and get the higher value via the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/max"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>max<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> function, <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/abs"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>abs<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> returns us an absolute value of the higher number. This way, we get the width of the text.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Same we do for the upper right corner, Y position ($aBoundingBox[5]) and the upper left corner, Y position ($aBoundingBox[7]). With this, we get the height of our text message.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    $iTextWidth  = abs(max($aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], $aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]));
				$iTextHeight = abs(max($aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], $aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]));<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>With the help of the text size, we can calculate the X and Y coordinates of the messages on our main image.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    $iTextXCoordinate = intval(($iColorWidth - $iTextWidth) / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
				$iTextYCoordinate = intval(($iImageHeight + $iTextHeight) / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lastly, we set the text on the actual image, and at the end of the foreach loop through the colors, the counter gets increased. <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>    imagettftext(
					$oImage, 
					$iFontSize, 
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
					($iTextXCoordinate + ($iColorCount * $iColorWidth)), 
					$iTextYCoordinate, 
					$iTextColor, 
					$sFontFile, 
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
				);
			
				$iColorCount++;
			}<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If we directly want to show the image, then we need to set the Content-Type via the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/header"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>header<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> function and print the image with the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagepng"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagepng<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> function.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>header(<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>"Content-Type: image/png"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
			imagepng($oImage);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>If the image should be stored instead, we need to pass the file path for the new image as the second parameter to the <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"https://www.php.net/imagepng"</span> <span class="hljs-attr">target</span>=<span class="hljs-string">"_blank"</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"noreferrer noopener"</span>&gt;</span>imagepng<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> function.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>imagepng($oImage, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'myimage.png'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>After showing or storing the image, we destroy it to free any memory associated with the image object.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span>imagedestroy($oImage);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>The Result<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>One Color<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_1_color.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Result one color"</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Result one color"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Two Colors<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_2_colors.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Result two colors"</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Result two colors"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Four Colors<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_4_colors.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Result four colors"</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Result four colors"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Six Colors<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_6_colors.png"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Result six colors"</span> <span class="hljs-attr">title</span>=<span class="hljs-string">"Result six colors"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">h2</span>&gt;</span>The Complete Code<span class="hljs-tag">&lt;/<span class="hljs-name">h2</span>&gt;</span>
			<span class="hljs-tag">&lt;<span class="hljs-name">pre</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">code</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs php"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-meta"</span>&gt;</span><span class="hljs-symbol">&amp;lt;</span>?php<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
				$aColors = [
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'E24667'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFC9D5'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'C046E2'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'806066'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'000000'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					],
					[
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'808080'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>,
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>       =<span class="hljs-symbol">&amp;gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'FFFFFF'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
					]
				];
			
				array_walk($aColors, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-function"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>function<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-params"</span>&gt;</span>(<span class="hljs-symbol">&amp;amp;</span>$aColor, $key)<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>{
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>list<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>(
						$iBackgroundRed, 
						$iBackgroundGreen, 
						$iBackgroundBlue
					) = array_map(
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'hexdec'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
						str_split($aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>)
					);
			
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>list<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>(
						$iTextRed, 
						$iTextGreen, 
						$iTextBlue
					) = array_map(
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'hexdec'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
						str_split($aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>)
					);
			
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = [
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>   =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundRed, 
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundGreen, 
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>  =<span class="hljs-symbol">&amp;gt;</span> $iBackgroundBlue
					];
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = [
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>   =<span class="hljs-symbol">&amp;gt;</span> $iTextRed, 
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> =<span class="hljs-symbol">&amp;gt;</span> $iTextGreen, 
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>  =<span class="hljs-symbol">&amp;gt;</span> $iTextBlue
					];
			
					$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>] = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'#'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> . $aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>];
				});
			
				$oImage         = imagecreate(<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>1600<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>1200<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
				$iImageWidth    = imagesx($oImage);
				$iImageHeight   = imagesy($oImage);
			
				$sFontFile      = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'fonts/amble/Amble-Bold.ttf'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;
				$iColorWidth    = $iImageWidth / count($aColors);
				$iFontSize      = $iColorWidth / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;
				$iColorCount    = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>;
			
				<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>foreach<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($aColors <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>as<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> $aColor){
					$iBackgroundColor = imagecolorallocate(
						$oImage, 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'background_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
					);
					$iTextColor       = imagecolorallocate(
						$oImage, 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'red'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'green'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_rgb'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>][<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'blue'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
					);
			
					<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($iX = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>; $iX <span class="hljs-symbol">&amp;lt;</span> $iColorWidth; $iX++){
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-keyword"</span>&gt;</span>for<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>($iY = <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>; $iY <span class="hljs-symbol">&amp;lt;</span> $iImageHeight; $iY++){
							imagesetpixel(
								$oImage, 
								$iX + ($iColorCount * $iColorWidth), 
								$iY, 
								$iBackgroundColor
							);
						}
					}
			
					$aBoundingBox = imagettfbbox($iFontSize, <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, $sFontFile, $aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]);
			
					$iTextWidth  = abs(max($aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], $aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]));
					$iTextHeight = abs(max($aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>], $aBoundingBox[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]));
			
					$iTextXCoordinate = intval(($iColorWidth - $iTextWidth) / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
					$iTextYCoordinate = intval(($iImageHeight + $iTextHeight) / <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
			
					imagettftext(
						$oImage, 
						$iFontSize, 
						<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-number"</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>, 
						($iTextXCoordinate + ($iColorCount * $iColorWidth)), 
						$iTextYCoordinate, 
						$iTextColor, 
						$sFontFile, 
						$aColor[<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>'text_msg'<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>]
					);
			
					$iColorCount++;
				}
			
				header(<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"hljs-string"</span>&gt;</span>"Content-Type: image/png"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>);
				imagepng($oImage);
				imagedestroy($oImage);<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">pre</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-name">main</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span></code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/Personal/blog-post.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_Personal_blog-post.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_Personal_blog-post.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_Personal_blog-post.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_Personal_blog-post.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_Personal_blog-post.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_Personal_blog-post.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_Personal_blog-post.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_Personal_blog-post.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_Personal_blog-post.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_Personal_blog-post.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_Personal_blog-post.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_Personal_blog-post.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>

## 🔬 COLOR-PALETTE

### Input HTML & CSS

<details>
    <summary>
        View COLOR-PALETTE Code
    </summary>
    <pre><code class="hljs xml"><span class="hljs-meta">&lt;!doctype <span class="hljs-meta-keyword">html</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">html</span> <span class="hljs-attr">lang</span>=<span class="hljs-string">"en"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">charset</span>=<span class="hljs-string">"utf-8"</span>/&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
	<span class="hljs-keyword">@page</span>
	{
        <span class="hljs-attribute">size</span>:<span class="hljs-number">1600px</span> <span class="hljs-number">1200px</span>;
		<span class="hljs-attribute">margin</span>:<span class="hljs-number">0</span>;
        <span class="hljs-attribute">background</span>:red;
        <span class="hljs-attribute">background-image</span>:<span class="hljs-built_in">url</span>(https://convertingcolors.com/images/create_color_images_from_hex_colors_with_php/result_6_colors.png);
        <span class="hljs-attribute">background-size</span>: cover;
	}
    </span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">head</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">body</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">html</span>&gt;</span>
</code></pre>
    <p>
        <a href="https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/Personal/color-palette.html" target="_blank" rel="noopener">📄 Get Input HTML on GitHub</a>
    </p>
</details>

### Output PDF

<div class="details-boxes">
    <div>
        <h4>mPDF</h4>
        <img src="/{{ page.path }}/../mpdf__html_Personal_color-palette.html.png" alt="mPDF Preview" />
        <p>
            <a href="/{{ page.path }}/../mpdf__html_Personal_color-palette.html.pdf" target="_blank">📕 mPDF Output</a>
        </p>
    </div>
    <div>
        <h4>typeset.sh</h4>
        <img src="/{{ page.path }}/../typeset__html_Personal_color-palette.html.png" alt="typeset Preview" />
        <p>
            <a href="/{{ page.path }}/../typeset__html_Personal_color-palette.html.pdf" target="_blank">📕 typeset Output</a>
        </p>
    </div>
    <div>
        <h4>PDFreactor</h4>
        <img src="/{{ page.path }}/../pdfreactor__html_Personal_color-palette.html.png" alt="PDFreactor Preview" />
        <p>
            <a href="/{{ page.path }}/../pdfreactor__html_Personal_color-palette.html.pdf" target="_blank">📕 PDFreactor Output</a>
        </p>
    </div>
    <div>
        <h4>wkhtmltopdf</h4>
        <img src="/{{ page.path }}/../wkhtmltopdf__html_Personal_color-palette.html.png" alt="wkhtmltopdf Preview" />
        <p>
            <a href="/{{ page.path }}/../wkhtmltopdf__html_Personal_color-palette.html.pdf" target="_blank">📕 wkhtmltopdf Output</a>
        </p>
    </div>
    <div>
        <h4>WeasyPrint</h4>
        <img src="/{{ page.path }}/../weasyprint__html_Personal_color-palette.html.png" alt="WeasyPrint Preview" />
        <p>
            <a href="/{{ page.path }}/../weasyprint__html_Personal_color-palette.html.pdf" target="_blank">📕 WeasyPrint Output</a>
        </p>
    </div>
    <div>
        <h4>Prince</h4>
        <img src="/{{ page.path }}/../princexml__html_Personal_color-palette.html.png" alt="Prince Preview" />
        <p>
            <a href="/{{ page.path }}/../princexml__html_Personal_color-palette.html.pdf" target="_blank">📕 Prince Output</a>
        </p>
    </div>
</div>


