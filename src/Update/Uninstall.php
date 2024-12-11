<?php

namespace Asylum\RankMath\Update;

class Uninstall
{
    public static function uninstall()
    {
        delete_option('rank_math_acf_block_analyser_version');
    }
}
