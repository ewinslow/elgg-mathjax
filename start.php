<?php

function mathjax_init() {
	elgg_register_js('mathjax', '//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML', 'head', 1000);

	// just load it on every page for 1.0
	elgg_load_js('mathjax');
}

elgg_register_event_handler('init', 'system', 'mathjax_init');