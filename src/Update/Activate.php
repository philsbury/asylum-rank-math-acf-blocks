<?php

namespace Asylum\RankMath\Update;

class Activate
{
    public static function activate()
    {
        update_option('rank_math_acf_block_analyser_version', ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_VERSION);
    }
}

