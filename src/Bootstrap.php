<?php

namespace Asylum\RankMath;

use Asylum\Update\Plugin;

new Plugin('asylum-rank-math-acf-blocks', ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_PATH, ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_URL);
new Admin\Admin;

new Enqueue\Enqueue;
