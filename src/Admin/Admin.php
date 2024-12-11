<?php

namespace Asylum\RankMath\Admin;

class Admin
{
    public function __construct()
    {
        $this->updateCheck();


    }


    private function updateCheck()
    {
        if (ASYLUM_RANK_MATH_ACF_BLOCK_ANALYSER_VERSION !== get_option('rank_math_acf_block_analyser_version')) {
            \Asylum\RankMath\Update\Activate::activate();
        }
    }
}
