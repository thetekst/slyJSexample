<html>
    <head>
        <meta name="generator"
        content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <style>
.frame {
width: 1140px;
}
.frame ul li {
float: left;
width: 227px;
margin: 0 1px 0 0;
padding: 0;
background: #333;
color: #DDD;
text-align: center;
cursor: pointer;
}

.scrollbar {
margin: 0 0 1em 0;
height: 2px;
background: #CCC;
line-height: 0;
}

.scrollbar .handle {
cursor: pointer;
height: 100%;
background: #292A33;
cursor: pointer;
}

.scrollbar .handle .mousearea {
position: absolute;
top: -9px;
left: 0;
width: 100%;
height: 20px;
}
</style>
        <title></title>
    </head>
    <body>
    <div class="wrap">
        <div class="scrollbar">
            <div class="handle">
                <div class="mousearea"></div>
            </div>
        </div>
		
        <div class="prevPage">&lt;-</div>
        <div class="nextPage">-&gt;</div>
		
        <div class="frame" id="basic" style="overflow: hidden;">
            <ul class="clearfix">
                <li>0</li>
                <li>1</li>
                <li>2</li>
                <li class="active">3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
            </ul>
        </div>
        <ul class="pages">
            
        </ul>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
    <script src="sly.min.js"></script> 
    <script>
	$(function() {
		var $frame  = $('#basic');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: $wrap.find('.pages'),
			
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: 1,
			//easing: 'easeOutExpo', // install the jQuery Easing Plugin.
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			forward: $wrap.find('.forward'),
			backward: $wrap.find('.backward'),
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next'),
			prevPage: $wrap.find('.prevPage'),
			nextPage: $wrap.find('.nextPage')
		});
	});
</script></body>
</html>
